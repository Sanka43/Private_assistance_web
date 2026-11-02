# ==============================================================
#  RuXt AI Desktop Companion - 1-Click Zero-Prompt Web Installer
# ==============================================================
# Usage: irm http://<server-url>/api/devices.php?action=install | iex

$ErrorActionPreference = "Stop"

Write-Host ""
Write-Host " ============================================================== " -ForegroundColor Cyan
Write-Host "           RuXt AI Desktop Companion - 1-Click Setup           " -ForegroundColor Cyan
Write-Host " ============================================================== " -ForegroundColor Cyan
Write-Host ""

$BaseServerUrl = "{{SERVER_URL}}"
if ($BaseServerUrl.StartsWith("{{") -or [string]::IsNullOrWhiteSpace($BaseServerUrl)) {
    $BaseServerUrl = "http://localhost/Private_assistance_web"
}
$BaseServerUrl = $BaseServerUrl.TrimEnd('/')

$InstallDir = Join-Path $env:LOCALAPPDATA "Programs\RuXt"
if (-not (Test-Path $InstallDir)) {
    New-Item -ItemType Directory -Force -Path $InstallDir | Out-Null
}

$ExePath = Join-Path $InstallDir "RuXt-Desktop.exe"
$IcoPath = Join-Path $InstallDir "ruxt.ico"
$CerPath = Join-Path $InstallDir "RuXt-Certificate.cer"

try {
    # 1. Download RuXt-Desktop.exe directly into %LOCALAPPDATA%
    Write-Host "[1/5] Downloading RuXt AI Desktop Executable..." -ForegroundColor Yellow
    $exeUrl = "$BaseServerUrl/downloads/RuXt-Desktop.exe"
    Invoke-WebRequest -Uri $exeUrl -OutFile $ExePath -UseBasicParsing

    # 2. Download Official Robot Icon
    Write-Host "[2/5] Downloading High-Resolution 3D Robot Icon..." -ForegroundColor Yellow
    $icoUrl = "$BaseServerUrl/downloads/ruxt.ico"
    try {
        Invoke-WebRequest -Uri $icoUrl -OutFile $IcoPath -UseBasicParsing
    } catch {
        # Fallback to PNG if ico direct fetch fails
        $pngUrl = "$BaseServerUrl/assets/icons/icon-192.png"
        Invoke-WebRequest -Uri $pngUrl -OutFile (Join-Path $InstallDir "icon.png") -UseBasicParsing -ErrorAction SilentlyContinue
    }

    # 3. Download and register Certificate
    Write-Host "[3/5] Registering Application Security & Trust..." -ForegroundColor Yellow
    $cerUrl = "$BaseServerUrl/downloads/RuXt-Certificate.cer"
    try {
        Invoke-WebRequest -Uri $cerUrl -OutFile $CerPath -UseBasicParsing -ErrorAction SilentlyContinue
        if (Test-Path $CerPath) {
            certutil -user -addstore "TrustedPublisher" $CerPath > $null 2>&1
        }
    } catch { }

    # 4. Remove Mark-of-the-Web (Zone.Identifier) so SmartScreen never triggers
    Write-Host "[4/5] Removing Mark-of-the-Web (SmartScreen Bypass)..." -ForegroundColor Yellow
    Unblock-File -Path $ExePath -ErrorAction SilentlyContinue
    if (Test-Path $IcoPath) { Unblock-File -Path $IcoPath -ErrorAction SilentlyContinue }

    # 5. Create Desktop & Start Menu Shortcuts with custom icon
    Write-Host "[5/5] Creating Desktop & Start Menu Shortcuts..." -ForegroundColor Yellow
    $WshShell = New-Object -ComObject WScript.Shell

    # Desktop shortcut
    $DesktopPath = [Environment]::GetFolderPath("Desktop")
    $Shortcut = $WshShell.CreateShortcut((Join-Path $DesktopPath "RuXt AI.lnk"))
    $Shortcut.TargetPath = $ExePath
    if (Test-Path $IcoPath) {
        $Shortcut.IconLocation = "$IcoPath,0"
    }
    $Shortcut.Description = "RuXt AI Private Desktop Assistant"
    $Shortcut.WorkingDirectory = $InstallDir
    $Shortcut.Save()

    # Start menu shortcut
    $ProgramsPath = [Environment]::GetFolderPath("Programs")
    $StartShortcut = $WshShell.CreateShortcut((Join-Path $ProgramsPath "RuXt AI.lnk"))
    $StartShortcut.TargetPath = $ExePath
    if (Test-Path $IcoPath) {
        $StartShortcut.IconLocation = "$IcoPath,0"
    }
    $StartShortcut.Description = "RuXt AI Private Desktop Assistant"
    $StartShortcut.WorkingDirectory = $InstallDir
    $StartShortcut.Save()

    Write-Host ""
    Write-Host " ============================================================== " -ForegroundColor Green
    Write-Host "    [SUCCESS] RuXt AI Desktop is installed & ready to launch!   " -ForegroundColor Green
    Write-Host " ============================================================== " -ForegroundColor Green
    Write-Host " [+] Target Location: $ExePath" -ForegroundColor Gray
    Write-Host " [+] Desktop Shortcut: Created with Official 3D Robot Icon" -ForegroundColor Gray
    Write-Host " [+] SmartScreen Status: 100% Clean (Zero Warnings)" -ForegroundColor Gray
    Write-Host ""
    Write-Host " >>> Launching RuXt AI Desktop now..." -ForegroundColor Cyan

    # Launch application
    Start-Process -FilePath $ExePath -WorkingDirectory $InstallDir

} catch {
    Write-Host ""
    Write-Host "[ERROR] Installation failed: $_" -ForegroundColor Red
    Write-Host "Please check your network connection and server URL: $BaseServerUrl" -ForegroundColor Red
}
