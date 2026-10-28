<?php
// api/inquiry.php - Secure Lead & Order Capture Endpoint
header('Content-Type: application/json; charset=UTF-8');
header('X-Content-Type-Options: nosniff');

$dataDir = __DIR__ . '/data';
if (!is_dir($dataDir)) {
    mkdir($dataDir, 0755, true);
}

// Ensure SQLite database for orders/inquiries
$dbPath = $dataDir . '/orders.sqlite';
$pdo = new PDO('sqlite:' . $dbPath);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->exec("
    CREATE TABLE IF NOT EXISTS orders (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        plan TEXT NOT NULL,
        price TEXT NOT NULL,
        name TEXT NOT NULL,
        email TEXT NOT NULL,
        phone TEXT,
        note TEXT,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        status TEXT DEFAULT 'pending'
    )
");

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
    $raw = file_get_contents('php://input');
    $data = json_decode($raw, true);

    if (!$data) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Invalid JSON input.']);
        exit;
    }

    $name = isset($data['name']) ? trim(strip_tags($data['name'])) : '';
    $email = isset($data['email']) ? filter_var(trim($data['email']), FILTER_VALIDATE_EMAIL) : false;
    $plan = isset($data['plan']) ? trim(strip_tags($data['plan'])) : 'Founder Executive Suite';
    $price = isset($data['price']) ? trim(strip_tags($data['price'])) : '$99';
    $phone = isset($data['phone']) ? trim(strip_tags($data['phone'])) : '';
    $note = isset($data['note']) ? trim(strip_tags($data['note'])) : '';

    if (empty($name)) {
        http_response_code(422);
        echo json_encode(['success' => false, 'message' => 'Please provide your name.']);
        exit;
    }

    if (!$email) {
        http_response_code(422);
        echo json_encode(['success' => false, 'message' => 'Please provide a valid email address.']);
        exit;
    }

    $stmt = $pdo->prepare("
        INSERT INTO orders (plan, price, name, email, phone, note)
        VALUES (:plan, :price, :name, :email, :phone, :note)
    ");
    $stmt->execute([
        ':plan' => $plan,
        ':price' => $price,
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone,
        ':note' => $note
    ]);

    $orderId = $pdo->lastInsertId();

    echo json_encode([
        'success' => true,
        'order_id' => $orderId,
        'message' => 'Order inquiry recorded successfully! Our team will reach out via WhatsApp/Email within 15 minutes.'
    ]);
    exit;
}

if ($method === 'GET') {
    // Basic read for website admin
    $adminKey = isset($_GET['key']) ? $_GET['key'] : '';
    // Optional secret key for safety
    if ($adminKey !== 'ruxt2026') {
        echo json_encode([
            'status' => 'RuXt Sales API Online',
            'timestamp' => date('c'),
            'usage' => 'Send POST request with plan, name, email, and phone.'
        ]);
        exit;
    }

    $stmt = $pdo->query("SELECT * FROM orders ORDER BY created_at DESC LIMIT 100");
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode(['success' => true, 'orders' => $orders]);
    exit;
}

http_response_code(405);
echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
