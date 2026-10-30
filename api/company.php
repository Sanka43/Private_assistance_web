<?php
// api/company.php - Local SQLite Persistence for RuXt Digital Company HQ
header('Content-Type: application/json; charset=UTF-8');
header('X-Content-Type-Options: nosniff');

$dataDir = __DIR__ . '/data';
if (!is_dir($dataDir)) {
    mkdir($dataDir, 0755, true);
}

$dbPath = $dataDir . '/orders.sqlite';
$pdo = new PDO('sqlite:' . $dbPath);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Create company state and tasks tables
$pdo->exec("
    CREATE TABLE IF NOT EXISTS company_profiles (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        company_name TEXT NOT NULL,
        industry TEXT NOT NULL,
        mrr INTEGER DEFAULT 68400,
        valuation INTEGER DEFAULT 3200000,
        runway_months INTEGER DEFAULT 24,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
    );

    CREATE TABLE IF NOT EXISTS company_tasks (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        task_uid TEXT UNIQUE,
        title TEXT NOT NULL,
        department TEXT NOT NULL,
        assigned_to TEXT NOT NULL,
        priority TEXT DEFAULT 'Medium',
        status TEXT DEFAULT 'in_progress',
        deliverable TEXT,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    );
");

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    // Retrieve latest company state
    $stmtProfile = $pdo->query("SELECT * FROM company_profiles ORDER BY id DESC LIMIT 1");
    $profile = $stmtProfile->fetch(PDO::FETCH_ASSOC);

    $stmtTasks = $pdo->query("SELECT * FROM company_tasks ORDER BY id DESC LIMIT 50");
    $tasks = $stmtTasks->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode([
        'success' => true,
        'profile' => $profile ?: null,
        'tasks' => $tasks ?: []
    ]);
    exit;
}

if ($method === 'POST') {
    $raw = file_get_contents('php://input');
    $payload = json_decode($raw, true);

    if (!$payload) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Invalid JSON input.']);
        exit;
    }

    if (isset($payload['profile'])) {
        $p = $payload['profile'];
        $stmt = $pdo->prepare("
            INSERT INTO company_profiles (company_name, industry, mrr, valuation, runway_months)
            VALUES (:name, :industry, :mrr, :val, :runway)
        ");
        $stmt->execute([
            ':name' => trim(strip_tags($p['name'] ?? 'NovaScale AI')),
            ':industry' => trim(strip_tags($p['industry'] ?? 'Autonomous Software')),
            ':mrr' => intval($p['mrr'] ?? 68400),
            ':val' => intval($p['valuation'] ?? 3200000),
            ':runway' => intval($p['runwayMonths'] ?? 24)
        ]);
    }

    echo json_encode(['success' => true, 'message' => 'Company state synchronized to local SQLite vault.']);
    exit;
}

http_response_code(405);
echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
