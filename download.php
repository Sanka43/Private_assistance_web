<?php
/**
 * RuXt AI - Official Windows Binaries Download Portal
 * Standalone .EXE & .ZIP Releases
 */

$downloadsDir = __DIR__ . '/downloads';
$desktopFile = $downloadsDir . '/RuXt-Desktop.exe';
$agentFile = $downloadsDir . '/ruxt-agent.exe';
$suiteFile = $downloadsDir . '/RuXt-Windows-Suite.zip';

$desktopSize = file_exists($desktopFile) ? round(filesize($desktopFile) / 1024, 1) . ' KB' : '48 KB';
$agentSize = file_exists($agentFile) ? round(filesize($agentFile) / 1024, 1) . ' KB' : '45 KB';
$suiteSize = file_exists($suiteFile) ? round(filesize($suiteFile) / 1024, 1) . ' KB' : '43 KB';

$desktopSha256 = file_exists($desktopFile) ? strtoupper(hash_file('sha256', $desktopFile)) : '4FB989943BB3BEDE9A90A4E1FAC24AAFB95D54E69959888186BEAB8CD818E900';
$agentSha256 = file_exists($agentFile) ? strtoupper(hash_file('sha256', $agentFile)) : 'B569A1FD178E9D808C2A0C2FC42FE98CB764ED5D50416F8A356E1B2420AA04E9';
$suiteSha256 = file_exists($suiteFile) ? strtoupper(hash_file('sha256', $suiteFile)) : '2702B4E11CB570AD5F993CB71D03AB6DE0F004026B2A59D14C78557337AD89D1';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Download RuXt AI for Windows · Native Desktop App &amp; Agent Service (.EXE)</title>
    <meta name="title" content="Download RuXt AI for Windows · Native Desktop App &amp; Agent Service (.EXE)">
    <meta name="description" content="Download RuXt AI native Windows standalone executables (.exe). Includes RuXt Desktop companion with system tray integration and RuXt Headless Agent. 100% private, standalone, zero-bloat.">
    <meta name="keywords" content="download ruxt, ruxt exe download, ruxt windows desktop, ruxt agent exe, private ai desktop app, self-hosted ai executable">
    <meta name="author" content="RuXt AI Systems">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="http://localhost/Private_assistance_web/download.php">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="http://localhost/Private_assistance_web/download.php">
    <meta property="og:title" content="Download RuXt AI for Windows (.EXE) · Native Desktop Suite">
    <meta property="og:description" content="Download native Windows standalone executables (.exe) for RuXt AI Autonomous Executive Board. Zero-bloat native C# binaries (<50 KB), zero telemetry, 100% private.">
    <meta property="og:image" content="http://localhost/Private_assistance_web/assets/icons/og-preview.svg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="http://localhost/Private_assistance_web/download.php">
    <meta name="twitter:title" content="Download RuXt AI for Windows (.EXE) · Native Desktop Suite">
    <meta name="twitter:description" content="Download native Windows standalone executables (.exe) for RuXt AI Autonomous Executive Board. 100% private, zero-bloat.">
    <meta name="twitter:image" content="http://localhost/Private_assistance_web/assets/icons/og-preview.svg">

    <!-- Favicon & PWA Icons -->
    <link rel="icon" type="image/svg+xml" href="assets/icons/ruxt-logo.svg">
    <link rel="apple-touch-icon" href="assets/icons/icon-192.png">
    <meta name="theme-color" content="#173d34">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"DM Sans"', 'system-ui', '-apple-system', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace']
                    },
                    colors: {
                        ruxtPine: '#173d34',
                        ruxtPineHover: '#285c4e',
                        ruxtPineDeep: '#0f2620',
                        ruxtCream: '#fcfaf5',
                        ruxtPanel: '#f5f2e9',
                        ruxtLine: '#ddd8cc',
                        ruxtLineSoft: '#e8e3d9',
                        ruxtText: '#202725',
                        ruxtMuted: '#68716d',
                        ruxtGold: '#b7843f',
                        ruxtGoldLight: '#f3e8d2',
                        ruxtSage: '#799a87'
                    }
                }
            }
        };
    </script>

    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Schema.org Rich Snippet -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "RuXt AI Desktop for Windows",
      "operatingSystem": "Windows 10, Windows 11 (64-bit)",
      "applicationCategory": "BusinessApplication",
      "fileSize": "<?= $desktopSize ?>",
      "softwareVersion": "2.4 Enterprise",
      "downloadUrl": "http://localhost/Private_assistance_web/downloads/RuXt-Desktop.exe",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      }
    }
    </script>
</head>
<body class="bg-[#fcfaf5] text-[#202725] antialiased selection:bg-[#173d34] selection:text-[#fcfaf5]">

    <!-- Top Announcement Bar -->
    <aside aria-label="Announcement" class="bg-[#173d34] text-[#fcfaf5] py-2 px-4 text-xs font-medium text-center flex items-center justify-center gap-2 border-b border-[#285c4e]">
        <span class="bg-[#b7843f] text-[#fcfaf5] text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider">Windows Build</span>
        <span>RuXt Native Desktop Companion v2.4 Enterprise (.EXE) is available for direct download.</span>
        <a href="#downloads-section" class="underline hover:text-[#ffd580] ml-1 font-semibold flex items-center gap-0.5">Get Binaries <i data-lucide="arrow-down" class="w-3.5 h-3.5"></i></a>
    </aside>

    <!-- Header Navigation -->
    <header class="sticky top-0 z-50 bg-[#fcfaf5]/90 backdrop-blur-md border-b border-[#ddd8cc] transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="index.php" class="flex items-center space-x-3 group" title="RuXt AI - Official Sales Portal">
                <div class="w-10 h-10 rounded-xl bg-[#173d34] text-[#fcfaf5] flex items-center justify-center -rotate-3 shadow-md shadow-[#173d34]/20 group-hover:rotate-0 transition-transform">
                    <svg class="w-6 h-6" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 9h13.5a8.5 8.5 0 0 1 0 17H9z"/>
                        <path d="M9 26l10 7"/>
                        <path d="M17 17h14"/>
                    </svg>
                </div>
                <div>
                    <div class="flex items-center gap-2">
                        <span class="text-xl font-extrabold tracking-tight text-[#173d34]">RuXt</span>
                        <span class="text-[9px] bg-[#173d34]/10 text-[#173d34] border border-[#173d34]/20 px-2 py-0.5 rounded-full font-bold uppercase tracking-wider">AI ASSISTANT</span>
                    </div>
                    <p class="text-[11px] text-[#68716d] font-medium hidden sm:block">Private Autonomous Executive Board</p>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden lg:flex items-center space-x-7 text-sm font-semibold text-[#68716d]">
                <a href="index.php#overview" class="hover:text-[#173d34] transition-colors">Overview</a>
                <a href="index.php#boardroom" class="hover:text-[#173d34] transition-colors">War Room Demo</a>
                <a href="index.php#features" class="hover:text-[#173d34] transition-colors">Features</a>
                <a href="workspaces.php" class="hover:text-[#173d34] transition-colors flex items-center gap-1.5">
                    <span>Workspaces</span>
                    <span class="text-[9px] bg-[#b7843f]/15 text-[#b7843f] border border-[#b7843f]/30 px-1.5 py-0.2 rounded-full font-extrabold uppercase">NEW</span>
                </a>
                <a href="download.php" class="text-[#173d34] font-bold border-b-2 border-[#173d34] pb-1 flex items-center gap-1.5">
                    <i data-lucide="download" class="w-4 h-4 text-[#b7843f]"></i>
                    <span>Downloads</span>
                    <span class="text-[9px] bg-emerald-100 text-emerald-800 border border-emerald-300 px-1.5 py-0.2 rounded-full font-extrabold">EXE</span>
                </a>
                <a href="index.php#editions" class="hover:text-[#173d34] transition-colors">Editions</a>
                <a href="index.php#faq" class="hover:text-[#173d34] transition-colors">FAQ</a>
            </nav>

            <!-- Right CTA Actions -->
            <div class="hidden sm:flex items-center space-x-3">
                <a href="hq.php" class="px-3.5 py-2 rounded-xl bg-[#173d34] hover:bg-[#285c4e] text-[#ffd580] text-xs font-bold border border-[#b7843f]/40 shadow-sm transition-all flex items-center gap-1.5 active:scale-95" title="Open Autonomous Digital Company HQ">
                    <i data-lucide="building-2" class="w-3.5 h-3.5 text-[#ffd580]"></i>
                    <span>Digital HQ</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 live-pulse"></span>
                </a>
                <a href="signin.php" class="text-xs font-bold bg-[#f5f2e9] hover:bg-[#ede8dc] text-[#173d34] border border-[#ddd8cc] px-4 py-2 rounded-xl transition-all flex items-center gap-1.5 active:scale-95" title="Sign In to RuXt AI Workspace">
                    <i data-lucide="log-in" class="w-3.5 h-3.5"></i>
                    <span>Sign In</span>
                </a>
            </div>

            <!-- Mobile Controls -->
            <div class="flex items-center gap-2 lg:hidden">
                <a href="hq.php" class="px-3 py-1.5 rounded-xl bg-[#173d34] text-[#ffd580] text-xs font-bold border border-[#b7843f]/40 flex items-center gap-1 shadow-sm active:scale-95" title="Digital HQ">
                    <i data-lucide="building-2" class="w-3.5 h-3.5 text-[#ffd580]"></i>
                    <span>HQ</span>
                </a>
                <button id="mobileMenuBtn" aria-label="Open Navigation Menu" class="text-[#173d34] p-2 rounded-xl hover:bg-[#ede8dc] transition-colors">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobileMenu" class="hidden lg:hidden fixed inset-0 z-50 bg-[#202725]/60 backdrop-blur-sm">
            <div class="w-4/5 max-w-sm bg-[#fcfaf5] h-full shadow-2xl p-6 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between pb-6 border-b border-[#ddd8cc]">
                        <div class="flex items-center space-x-2">
                            <span class="text-lg font-extrabold text-[#173d34]">RuXt AI</span>
                        </div>
                        <button id="closeMobileMenuBtn" aria-label="Close Menu" class="text-[#68716d] p-2 rounded-lg hover:bg-[#ede8dc]">
                            <i data-lucide="x" class="w-5 h-5"></i>
                        </button>
                    </div>

                    <nav class="mt-6 flex flex-col space-y-4 text-base font-bold text-[#202725]">
                        <a href="download.php" class="mobile-nav-link text-[#173d34] flex items-center justify-between p-2 rounded-xl bg-[#173d34]/10">
                            <span class="flex items-center gap-2"><i data-lucide="download" class="w-4 h-4 text-[#b7843f]"></i> Download .EXE Files</span>
                            <span class="text-[9px] bg-emerald-600 text-white px-2 py-0.5 rounded-full uppercase">EXE</span>
                        </a>
                        <a href="hq.php" class="mobile-nav-link text-[#173d34] flex items-center justify-between p-2 rounded-xl hover:bg-[#173d34]/5">
                            <span class="flex items-center gap-2"><i data-lucide="building-2" class="w-4 h-4"></i> Enter Digital HQ</span>
                        </a>
                        <a href="index.php#overview" class="mobile-nav-link hover:text-[#173d34]">Overview</a>
                        <a href="index.php#boardroom" class="mobile-nav-link hover:text-[#173d34]">War Room Demo</a>
                        <a href="workspaces.php" class="mobile-nav-link hover:text-[#173d34] flex items-center justify-between">
                            <span>Workspaces Marketplace</span>
                            <span class="text-[9px] bg-[#b7843f]/15 text-[#b7843f] border border-[#b7843f]/30 px-2 py-0.5 rounded-full font-extrabold uppercase">NEW</span>
                        </a>
                        <a href="index.php#editions" class="mobile-nav-link hover:text-[#173d34]">Editions</a>
                        <a href="index.php#faq" class="mobile-nav-link hover:text-[#173d34]">FAQ</a>
                    </nav>
                </div>

                <div class="pt-6 border-t border-[#ddd8cc] space-y-3">
                    <a href="signin.php" class="mobile-nav-link w-full py-3 bg-[#173d34] text-[#fcfaf5] font-bold rounded-xl flex items-center justify-center space-x-2 shadow-lg" title="Sign In">
                        <i data-lucide="log-in" class="w-4 h-4"></i>
                        <span>Sign In</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Download Notification Banner (Triggered upon clicking download) -->
    <div id="downloadToast" class="fixed bottom-6 right-6 z-50 transform translate-y-32 opacity-0 transition-all duration-300 ease-out max-w-md bg-[#173d34] text-[#fcfaf5] p-4 rounded-2xl shadow-2xl border border-[#b7843f]/50 flex items-start gap-3">
        <div class="w-9 h-9 rounded-xl bg-[#b7843f] text-[#173d34] flex items-center justify-center flex-shrink-0 mt-0.5 font-bold">
            <i data-lucide="check" class="w-5 h-5 text-white"></i>
        </div>
        <div class="flex-1 text-xs">
            <h6 class="font-bold text-sm text-[#ffd580] mb-0.5" id="toastFileName">Download Started</h6>
            <p class="text-[#d0ded8] leading-relaxed">
                Save the executable anywhere on your PC. No installer or admin setup required. Double click to start.
            </p>
        </div>
        <button onclick="dismissToast()" class="text-[#a3b8b0] hover:text-white p-1 rounded-lg">
            <i data-lucide="x" class="w-4 h-4"></i>
        </button>
    </div>

    <!-- Hero Section -->
    <section class="relative pt-12 pb-16 overflow-hidden border-b border-[#ddd8cc] bg-gradient-to-b from-[#f5f2e9]/70 via-[#fcfaf5] to-[#fcfaf5]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <!-- OS Platform Badge -->
            <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full text-xs font-semibold bg-[#173d34]/10 text-[#173d34] border border-[#173d34]/20 mb-5 shadow-sm">
                <!-- Windows Icon -->
                <svg class="w-4 h-4 text-[#173d34]" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M0 3.449L9.75 2.1v9.451H0m10.949-9.602L24 0v11.4H10.949M0 12.6h9.75v9.451L0 20.699M10.949 12.6H24V24l-12.95-1.801"/>
                </svg>
                <span>Official Windows Binaries · v2.4 Enterprise</span>
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 live-pulse"></span>
            </div>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-[#173d34] tracking-tight max-w-4xl mx-auto leading-tight sm:leading-tight">
                Download RuXt AI for Windows
            </h1>

            <p class="mt-4 text-base sm:text-lg text-[#68716d] max-w-2xl mx-auto leading-relaxed">
                Standalone, ultra-lightweight (<span class="font-bold text-[#173d34]">&lt; 50 KB</span>) native C# executables for Windows 10 and 11. Zero installers, zero background bloat, and 100% private SQLite memory control.
            </p>

            <!-- Quick Direct Download CTA Button Group -->
            <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                <a href="downloads/RuXt-Desktop.exe" download="RuXt-Desktop.exe" onclick="handleDownload('RuXt-Desktop.exe')" class="px-6 py-3.5 rounded-2xl bg-[#173d34] hover:bg-[#285c4e] text-[#ffd580] font-bold text-sm shadow-xl shadow-[#173d34]/20 border border-[#b7843f]/40 transition-all flex items-center gap-2.5 active:scale-95 group">
                    <i data-lucide="download" class="w-5 h-5 text-[#ffd580] group-hover:translate-y-0.5 transition-transform"></i>
                    <span>Download RuXt-Desktop.exe</span>
                    <span class="text-[10px] bg-[#ffd580]/20 text-[#ffd580] px-2 py-0.5 rounded-full font-mono"><?= htmlspecialchars($desktopSize) ?></span>
                </a>

                <a href="downloads/RuXt-Windows-Suite.zip" download="RuXt-Windows-Suite.zip" onclick="handleDownload('RuXt-Windows-Suite.zip')" class="px-6 py-3.5 rounded-2xl bg-[#ffffff] hover:bg-[#f5f2e9] text-[#173d34] font-bold text-sm shadow-md border border-[#ddd8cc] transition-all flex items-center gap-2 active:scale-95">
                    <i data-lucide="folder-archive" class="w-5 h-5 text-[#b7843f]"></i>
                    <span>Download Full Suite (.ZIP)</span>
                    <span class="text-[10px] bg-[#173d34]/10 text-[#173d34] px-2 py-0.5 rounded-full font-mono"><?= htmlspecialchars($suiteSize) ?></span>
                </a>
            </div>

            <!-- Trust Pills -->
            <div class="mt-8 flex flex-wrap items-center justify-center gap-6 text-xs text-[#68716d] font-medium">
                <span class="flex items-center gap-1.5"><i data-lucide="shield-check" class="w-4 h-4 text-emerald-600"></i> Standalone Executable (No Admin Needed)</span>
                <span class="flex items-center gap-1.5"><i data-lucide="zap" class="w-4 h-4 text-[#b7843f]"></i> Starts in &lt; 0.1 Seconds</span>
                <span class="flex items-center gap-1.5"><i data-lucide="cpu" class="w-4 h-4 text-[#173d34]"></i> Native .NET Win32 Architecture</span>
                <span class="flex items-center gap-1.5"><i data-lucide="lock" class="w-4 h-4 text-emerald-600"></i> Zero Third-Party Telemetry</span>
            </div>
        </div>
    </section>

    <!-- Main Downloads Grid -->
    <section id="downloads-section" class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-xs font-extrabold uppercase tracking-widest text-[#b7843f]">Available Binaries</span>
            <h2 class="text-3xl font-extrabold text-[#173d34] mt-1">Choose Your Windows Edition</h2>
            <p class="text-xs sm:text-sm text-[#68716d] mt-2">
                All binaries are pre-compiled and ready to run directly out-of-the-box. Place them in any folder on your machine.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Card 1: RuXt Desktop GUI App -->
            <div class="bg-[#ffffff] rounded-3xl border-2 border-[#173d34] p-6 sm:p-7 shadow-xl shadow-[#173d34]/5 flex flex-col justify-between relative overflow-hidden group hover:shadow-2xl transition-all">
                <!-- Top Badge -->
                <div class="absolute top-0 right-0 bg-[#173d34] text-[#ffd580] text-[10px] font-extrabold px-3.5 py-1 rounded-bl-xl uppercase tracking-wider flex items-center gap-1">
                    <i data-lucide="star" class="w-3 h-3 fill-current text-[#ffd580]"></i> Most Popular
                </div>

                <div>
                    <div class="w-12 h-12 rounded-2xl bg-[#173d34] text-[#ffd580] flex items-center justify-center mb-5 shadow-md shadow-[#173d34]/20">
                        <i data-lucide="monitor" class="w-6 h-6"></i>
                    </div>

                    <div class="flex items-baseline gap-2 mb-1">
                        <h3 class="text-xl font-extrabold text-[#173d34]">RuXt Desktop</h3>
                        <span class="text-xs font-mono font-bold text-[#b7843f]">v2.4</span>
                    </div>
                    <p class="text-xs font-mono text-[#68716d] mb-4">RuXt-Desktop.exe · <?= htmlspecialchars($desktopSize) ?></p>

                    <p class="text-xs text-[#68716d] leading-relaxed mb-6">
                        The complete native Windows companion. Embeds system tray management, desktop automation bridge, window controls, and auto-connection to your local instance.
                    </p>

                    <!-- Features -->
                    <div class="space-y-2.5 mb-6 text-xs text-[#202725] border-t border-[#ddd8cc] pt-4">
                        <div class="flex items-start gap-2">
                            <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                            <span><strong>System Tray integration</strong>: Minimizes cleanly into Windows system tray</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                            <span><strong>Native Win32 automation</strong>: Mouse, keyboard, and window execution</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                            <span><strong>Auto-connect</strong>: Automatically detects local PrivateAssistance</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                            <span><strong>Zero installer</strong>: Single portable .exe file</span>
                        </div>
                    </div>
                </div>

                <div>
                    <!-- Direct Download Button -->
                    <a href="downloads/RuXt-Desktop.exe" download="RuXt-Desktop.exe" onclick="handleDownload('RuXt-Desktop.exe')" class="w-full py-3 bg-[#173d34] hover:bg-[#285c4e] text-[#ffd580] font-bold text-xs rounded-xl transition-all shadow-md flex items-center justify-center gap-2 active:scale-95 mb-3">
                        <i data-lucide="download" class="w-4 h-4"></i>
                        <span>Download RuXt-Desktop.exe</span>
                    </a>

                    <!-- Checksum Toggle -->
                    <div class="bg-[#f5f2e9] p-2.5 rounded-xl border border-[#ddd8cc]">
                        <div class="flex items-center justify-between text-[11px] mb-1">
                            <span class="font-mono font-semibold text-[#68716d]">SHA256 Checksum:</span>
                            <button onclick="copyHash('<?= htmlspecialchars($desktopSha256) ?>', this)" class="text-[#173d34] hover:text-[#285c4e] font-bold flex items-center gap-1">
                                <i data-lucide="copy" class="w-3 h-3"></i>
                                <span>Copy</span>
                            </button>
                        </div>
                        <div class="font-mono text-[10px] text-[#202725] break-all select-all leading-tight">
                            <?= htmlspecialchars($desktopSha256) ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2: RuXt Headless Agent Service -->
            <div class="bg-[#ffffff] rounded-3xl border border-[#ddd8cc] p-6 sm:p-7 shadow-lg flex flex-col justify-between relative overflow-hidden group hover:border-[#173d34] transition-all">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-[#f5f2e9] text-[#173d34] border border-[#ddd8cc] flex items-center justify-center mb-5">
                        <i data-lucide="terminal" class="w-6 h-6"></i>
                    </div>

                    <div class="flex items-baseline gap-2 mb-1">
                        <h3 class="text-xl font-extrabold text-[#173d34]">RuXt Agent CLI</h3>
                        <span class="text-xs font-mono font-bold text-[#68716d]">v2.4</span>
                    </div>
                    <p class="text-xs font-mono text-[#68716d] mb-4">ruxt-agent.exe · <?= htmlspecialchars($agentSize) ?></p>

                    <p class="text-xs text-[#68716d] leading-relaxed mb-6">
                        Headless background worker service. Runs quietly in terminal or Windows Service for scheduled batch operations, server background workers, and automated sprints.
                    </p>

                    <!-- Features -->
                    <div class="space-y-2.5 mb-6 text-xs text-[#202725] border-t border-[#ddd8cc] pt-4">
                        <div class="flex items-start gap-2">
                            <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                            <span><strong>Headless / Silent</strong>: No GUI window, ideal for servers &amp; VPS</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                            <span><strong>CLI arguments</strong>: Configure via flags (`--url`, `--token`)</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                            <span><strong>Ultra-low memory</strong>: Consumes under 15 MB RAM</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                            <span><strong>Task poller</strong>: Executes queued AI board sprints</span>
                        </div>
                    </div>
                </div>

                <div>
                    <!-- Direct Download Button -->
                    <a href="downloads/ruxt-agent.exe" download="ruxt-agent.exe" onclick="handleDownload('ruxt-agent.exe')" class="w-full py-3 bg-[#f5f2e9] hover:bg-[#ede8dc] text-[#173d34] font-bold text-xs rounded-xl border border-[#ddd8cc] transition-all flex items-center justify-center gap-2 active:scale-95 mb-3">
                        <i data-lucide="download" class="w-4 h-4"></i>
                        <span>Download ruxt-agent.exe</span>
                    </a>

                    <!-- Checksum Toggle -->
                    <div class="bg-[#f5f2e9] p-2.5 rounded-xl border border-[#ddd8cc]">
                        <div class="flex items-center justify-between text-[11px] mb-1">
                            <span class="font-mono font-semibold text-[#68716d]">SHA256 Checksum:</span>
                            <button onclick="copyHash('<?= htmlspecialchars($agentSha256) ?>', this)" class="text-[#173d34] hover:text-[#285c4e] font-bold flex items-center gap-1">
                                <i data-lucide="copy" class="w-3 h-3"></i>
                                <span>Copy</span>
                            </button>
                        </div>
                        <div class="font-mono text-[10px] text-[#202725] break-all select-all leading-tight">
                            <?= htmlspecialchars($agentSha256) ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3: RuXt Complete Suite ZIP -->
            <div class="bg-[#ffffff] rounded-3xl border border-[#ddd8cc] p-6 sm:p-7 shadow-lg flex flex-col justify-between relative overflow-hidden group hover:border-[#b7843f] transition-all">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-[#ffd580]/30 text-[#b7843f] border border-[#ffd580] flex items-center justify-center mb-5">
                        <i data-lucide="package" class="w-6 h-6"></i>
                    </div>

                    <div class="flex items-baseline gap-2 mb-1">
                        <h3 class="text-xl font-extrabold text-[#173d34]">Complete Suite</h3>
                        <span class="text-xs font-mono font-bold text-[#b7843f]">.ZIP</span>
                    </div>
                    <p class="text-xs font-mono text-[#68716d] mb-4">RuXt-Windows-Suite.zip · <?= htmlspecialchars($suiteSize) ?></p>

                    <p class="text-xs text-[#68716d] leading-relaxed mb-6">
                        Everything in one archive. Includes both the Desktop GUI companion, the Headless CLI Agent, and the official offline Quickstart Readme guide.
                    </p>

                    <!-- Features -->
                    <div class="space-y-2.5 mb-6 text-xs text-[#202725] border-t border-[#ddd8cc] pt-4">
                        <div class="flex items-start gap-2">
                            <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                            <span><strong>RuXt-Desktop.exe</strong>: Native GUI companion</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                            <span><strong>ruxt-agent.exe</strong>: Headless CLI worker</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                            <span><strong>README.txt</strong>: Setup commands &amp; flag references</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                            <span><strong>Easy distribution</strong>: Single zip file for teams</span>
                        </div>
                    </div>
                </div>

                <div>
                    <!-- Direct Download Button -->
                    <a href="downloads/RuXt-Windows-Suite.zip" download="RuXt-Windows-Suite.zip" onclick="handleDownload('RuXt-Windows-Suite.zip')" class="w-full py-3 bg-[#b7843f] hover:bg-[#a67433] text-white font-bold text-xs rounded-xl transition-all shadow-md flex items-center justify-center gap-2 active:scale-95 mb-3">
                        <i data-lucide="folder-archive" class="w-4 h-4"></i>
                        <span>Download Complete Suite (.ZIP)</span>
                    </a>

                    <!-- Checksum Toggle -->
                    <div class="bg-[#f5f2e9] p-2.5 rounded-xl border border-[#ddd8cc]">
                        <div class="flex items-center justify-between text-[11px] mb-1">
                            <span class="font-mono font-semibold text-[#68716d]">SHA256 Checksum:</span>
                            <button onclick="copyHash('<?= htmlspecialchars($suiteSha256) ?>', this)" class="text-[#173d34] hover:text-[#285c4e] font-bold flex items-center gap-1">
                                <i data-lucide="copy" class="w-3 h-3"></i>
                                <span>Copy</span>
                            </button>
                        </div>
                        <div class="font-mono text-[10px] text-[#202725] break-all select-all leading-tight">
                            <?= htmlspecialchars($suiteSha256) ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Quick Installation & Setup Guide -->
    <section class="py-16 bg-[#f5f2e9] border-t border-b border-[#ddd8cc]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-extrabold uppercase tracking-widest text-[#b7843f]">Setup In Under 30 Seconds</span>
                <h2 class="text-3xl font-extrabold text-[#173d34] mt-1">How to Run on Windows</h2>
                <p class="text-xs sm:text-sm text-[#68716d] mt-2">
                    No registry keys, no installers, no dependency hell. Follow three simple steps.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="bg-[#ffffff] p-6 rounded-3xl border border-[#ddd8cc] shadow-sm relative">
                    <div class="w-10 h-10 rounded-xl bg-[#173d34] text-[#ffd580] font-extrabold flex items-center justify-center text-sm mb-4">
                        1
                    </div>
                    <h3 class="text-base font-extrabold text-[#173d34] mb-2">Download &amp; Place</h3>
                    <p class="text-xs text-[#68716d] leading-relaxed">
                        Download <code class="bg-[#f5f2e9] px-1.5 py-0.5 rounded text-[#173d34] font-mono">RuXt-Desktop.exe</code> directly and place it in any folder, e.g. <code class="bg-[#f5f2e9] px-1.5 py-0.5 rounded text-[#173d34] font-mono">C:\RuXt</code> or on your Desktop.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="bg-[#ffffff] p-6 rounded-3xl border border-[#ddd8cc] shadow-sm relative">
                    <div class="w-10 h-10 rounded-xl bg-[#173d34] text-[#ffd580] font-extrabold flex items-center justify-center text-sm mb-4">
                        2
                    </div>
                    <h3 class="text-base font-extrabold text-[#173d34] mb-2">Double-Click to Launch</h3>
                    <p class="text-xs text-[#68716d] leading-relaxed">
                        Double-click the .exe file. The app launches immediately. A system tray icon with the RuXt symbol appears in the bottom right of your taskbar.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="bg-[#ffffff] p-6 rounded-3xl border border-[#ddd8cc] shadow-sm relative">
                    <div class="w-10 h-10 rounded-xl bg-[#173d34] text-[#ffd580] font-extrabold flex items-center justify-center text-sm mb-4">
                        3
                    </div>
                    <h3 class="text-base font-extrabold text-[#173d34] mb-2">Automatic Pairing</h3>
                    <p class="text-xs text-[#68716d] leading-relaxed">
                        The app pairs with your local <code class="bg-[#f5f2e9] px-1.5 py-0.5 rounded text-[#173d34] font-mono">http://localhost/PrivateAssistance</code> workspace automatically. Click the tray icon anytime to open the console.
                    </p>
                </div>
            </div>

            <!-- Windows SmartScreen Security Note Card -->
            <div class="mt-10 bg-[#ffffff] rounded-3xl border border-[#b7843f]/40 p-6 sm:p-7 shadow-md flex flex-col sm:flex-row items-start sm:items-center gap-5">
                <div class="w-12 h-12 rounded-2xl bg-[#ffd580]/20 text-[#b7843f] flex items-center justify-center flex-shrink-0">
                    <i data-lucide="shield-alert" class="w-6 h-6"></i>
                </div>
                <div class="flex-1 text-xs text-[#68716d]">
                    <h4 class="text-sm font-extrabold text-[#173d34] mb-1">First-Time Launch Notice (Windows SmartScreen)</h4>
                    <p class="leading-relaxed">
                        Because RuXt is an in-house private build compiled directly for self-hosted deployment rather than a bloated commercial app signed with expensive Microsoft third-party certificates, Windows SmartScreen may show a blue prompt: <span class="font-semibold text-[#173d34]">"Windows protected your PC"</span>.
                        Simply click <span class="font-bold text-[#173d34]">"More info"</span> and then <span class="font-bold text-[#173d34]">"Run anyway"</span>. The executable contains zero telemetry or spyware and runs 100% locally on your machine.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Specifications & CLI Reference -->
    <section class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            <!-- System Requirements -->
            <div class="bg-[#ffffff] rounded-3xl border border-[#ddd8cc] p-6 sm:p-8 shadow-sm">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-[#173d34] text-[#ffd580] flex items-center justify-center">
                        <i data-lucide="cpu" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-extrabold text-[#173d34]">System Specifications</h3>
                        <p class="text-xs text-[#68716d]">Minimum requirements for running RuXt on Windows</p>
                    </div>
                </div>

                <div class="space-y-4 text-xs">
                    <div class="flex justify-between items-center py-2.5 border-b border-[#ddd8cc]">
                        <span class="font-semibold text-[#68716d]">Operating System</span>
                        <span class="font-bold text-[#173d34]">Windows 10 / Windows 11 (64-bit)</span>
                    </div>
                    <div class="flex justify-between items-center py-2.5 border-b border-[#ddd8cc]">
                        <span class="font-semibold text-[#68716d]">Architecture</span>
                        <span class="font-bold text-[#173d34]">x64 (AMD64 / Intel 64)</span>
                    </div>
                    <div class="flex justify-between items-center py-2.5 border-b border-[#ddd8cc]">
                        <span class="font-semibold text-[#68716d]">Runtime Dependency</span>
                        <span class="font-bold text-[#173d34]">Microsoft .NET Framework 4.5+ or 4.8 (Built-in)</span>
                    </div>
                    <div class="flex justify-between items-center py-2.5 border-b border-[#ddd8cc]">
                        <span class="font-semibold text-[#68716d]">Memory Usage</span>
                        <span class="font-bold text-emerald-700 font-mono">&lt; 18 MB RAM</span>
                    </div>
                    <div class="flex justify-between items-center py-2.5 border-b border-[#ddd8cc]">
                        <span class="font-semibold text-[#68716d]">Disk Footprint</span>
                        <span class="font-bold text-emerald-700 font-mono">&lt; 100 KB total</span>
                    </div>
                    <div class="flex justify-between items-center py-2.5">
                        <span class="font-semibold text-[#68716d]">Network / Privacy</span>
                        <span class="font-bold text-[#173d34]">100% Local-first, zero telemetry</span>
                    </div>
                </div>
            </div>

            <!-- Command Line Power-User Flags -->
            <div class="bg-[#ffffff] rounded-3xl border border-[#ddd8cc] p-6 sm:p-8 shadow-sm">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-[#173d34] text-[#ffd580] flex items-center justify-center">
                        <i data-lucide="command" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-extrabold text-[#173d34]">CLI Flags &amp; Custom Endpoints</h3>
                        <p class="text-xs text-[#68716d]">Launch with customized configurations</p>
                    </div>
                </div>

                <div class="space-y-4 text-xs">
                    <div>
                        <div class="flex items-center justify-between font-mono font-bold text-[#173d34] mb-1">
                            <span>--url &lt;server_url&gt;</span>
                            <span class="text-[10px] bg-[#f5f2e9] text-[#68716d] px-2 py-0.5 rounded border border-[#ddd8cc]">Custom Server</span>
                        </div>
                        <p class="text-[#68716d] leading-relaxed mb-1.5">Connect to a remote or LAN-hosted instance rather than localhost.</p>
                        <div class="bg-[#0f2620] text-emerald-300 p-2.5 rounded-xl font-mono text-[11px] overflow-x-auto">
                            RuXt-Desktop.exe --url http://192.168.1.100/PrivateAssistance
                        </div>
                    </div>

                    <div class="pt-2">
                        <div class="flex items-center justify-between font-mono font-bold text-[#173d34] mb-1">
                            <span>--token &lt;device_token&gt;</span>
                            <span class="text-[10px] bg-[#f5f2e9] text-[#68716d] px-2 py-0.5 rounded border border-[#ddd8cc]">Device Auth</span>
                        </div>
                        <p class="text-[#68716d] leading-relaxed mb-1.5">Pair this computer with an encrypted executive bridge token.</p>
                        <div class="bg-[#0f2620] text-emerald-300 p-2.5 rounded-xl font-mono text-[11px] overflow-x-auto">
                            ruxt-agent.exe --token rxt_dev_sec_99184a
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="py-16 bg-[#f5f2e9] border-t border-[#ddd8cc]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <span class="text-xs font-extrabold uppercase tracking-widest text-[#b7843f]">Downloads FAQ</span>
                <h2 class="text-3xl font-extrabold text-[#173d34] mt-1">Frequently Asked Questions</h2>
            </div>

            <div class="space-y-4 text-xs sm:text-sm">
                <div class="bg-[#ffffff] p-5 rounded-2xl border border-[#ddd8cc]">
                    <h3 class="font-extrabold text-[#173d34] mb-1.5">Why is the RuXt executable so small (&lt; 50 KB)?</h3>
                    <p class="text-[#68716d] leading-relaxed">
                        Unlike modern desktop apps that bundle a 200 MB copy of Google Chrome (Electron), RuXt Desktop is built with optimized native C# targeting the high-performance Windows Win32 API. It starts up instantaneously with zero RAM hogging.
                    </p>
                </div>

                <div class="bg-[#ffffff] p-5 rounded-2xl border border-[#ddd8cc]">
                    <h3 class="font-extrabold text-[#173d34] mb-1.5">Do I need to install any extra software to run it?</h3>
                    <p class="text-[#68716d] leading-relaxed">
                        No. Modern Windows 10 and 11 come with the required Microsoft .NET Framework runtime pre-installed. The .exe runs immediately upon double-clicking.
                    </p>
                </div>

                <div class="bg-[#ffffff] p-5 rounded-2xl border border-[#ddd8cc]">
                    <h3 class="font-extrabold text-[#173d34] mb-1.5">Does it send telemetry or crash reports to the cloud?</h3>
                    <p class="text-[#68716d] leading-relaxed">
                        Never. RuXt AI is built from the ground up on a strict privacy-first foundation. All device bridge actions, telemetry, logs, and database entries stay 100% on your own hardware.
                    </p>
                </div>

                <div class="bg-[#ffffff] p-5 rounded-2xl border border-[#ddd8cc]">
                    <h3 class="font-extrabold text-[#173d34] mb-1.5">Can I connect RuXt Desktop to a VPS instead of localhost?</h3>
                    <p class="text-[#68716d] leading-relaxed">
                        Yes. Launch <code class="bg-[#f5f2e9] px-1 py-0.5 rounded text-[#173d34] font-mono">RuXt-Desktop.exe --url https://your-server-domain.com</code> or configure it via the tray icon menu.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#0f2620] text-[#a3b8b0] py-14 border-t border-[#285c4e]/40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <!-- Col 1 -->
                <div class="space-y-4 md:col-span-2">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 rounded-lg bg-[#285c4e] text-[#fcfaf5] flex items-center justify-center">
                            <svg class="w-5 h-5" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2.8">
                                <path d="M9 9h13.5a8.5 8.5 0 0 1 0 17H9z"/>
                                <path d="M9 26l10 7"/>
                                <path d="M17 17h14"/>
                            </svg>
                        </div>
                        <span class="text-lg font-extrabold text-[#fcfaf5]">RuXt AI</span>
                    </div>
                    <p class="text-xs text-[#a3b8b0] max-w-sm leading-relaxed">
                        The world's leading self-hosted autonomous AI executive board &amp; Chief of Staff platform. Zero cloud subscriptions, 100% private SQLite data ownership, conversational voice intelligence ready.
                    </p>
                </div>

                <!-- Col 2 -->
                <div class="space-y-3">
                    <h5 class="text-xs font-bold uppercase tracking-wider text-[#fcfaf5]">Navigation</h5>
                    <ul class="space-y-2 text-xs">
                        <li><a href="index.php#overview" class="hover:text-[#ffd580] transition-colors">Overview</a></li>
                        <li><a href="download.php" class="hover:text-[#ffd580] text-[#ffd580] font-semibold transition-colors">Windows .EXE Downloads</a></li>
                        <li><a href="workspaces.php" class="hover:text-[#ffd580] transition-colors">Workspaces Marketplace</a></li>
                        <li><a href="hq.php" class="hover:text-[#ffd580] transition-colors">Digital Company HQ</a></li>
                        <li><a href="index.php#editions" class="hover:text-[#ffd580] transition-colors">Deployment Editions</a></li>
                    </ul>
                </div>

                <!-- Col 3 -->
                <div class="space-y-3">
                    <h5 class="text-xs font-bold uppercase tracking-wider text-[#fcfaf5]">Technical Specs</h5>
                    <ul class="space-y-2 text-xs font-mono">
                        <li>Binary: Native C# .NET Win32</li>
                        <li>Size: <?= htmlspecialchars($desktopSize) ?> Standalone .exe</li>
                        <li>Storage: Local SQLite 3</li>
                        <li>Runtime: PHP 8.1+ &amp; Windows 10/11</li>
                        <li>Voice: Web Speech STT/TTS</li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 border-t border-[#285c4e]/50 flex flex-col sm:flex-row items-center justify-between text-xs text-[#799a87] gap-4">
                <div>
                    &copy; <?= date('Y') ?> RuXt AI Systems. All rights reserved. Self-Hosted &amp; Private by Design.
                </div>
                <div class="flex items-center space-x-6">
                    <a href="downloads/RuXt-Desktop.exe" class="hover:text-[#fcfaf5] transition-colors font-semibold">RuXt-Desktop.exe</a>
                    <a href="downloads/ruxt-agent.exe" class="hover:text-[#fcfaf5] transition-colors font-semibold">ruxt-agent.exe</a>
                    <a href="sitemap.xml" class="hover:text-[#fcfaf5] transition-colors">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Interactive Scripts for Download Feedback and Copy -->
    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Mobile drawer toggles
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const closeMobileMenuBtn = document.getElementById('closeMobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.remove('hidden');
            });
        }
        if (closeMobileMenuBtn && mobileMenu) {
            closeMobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        }

        // Copy SHA256 Hash
        function copyHash(hash, btn) {
            navigator.clipboard.writeText(hash).then(() => {
                const originalText = btn.innerHTML;
                btn.innerHTML = '<i data-lucide="check" class="w-3 h-3 text-emerald-600"></i> <span class="text-emerald-700 font-bold">Copied!</span>';
                lucide.createIcons();
                setTimeout(() => {
                    btn.innerHTML = originalText;
                    lucide.createIcons();
                }, 2000);
            }).catch(err => {
                console.error("Failed to copy hash: ", err);
            });
        }

        // Handle Download Toast
        let toastTimeout;
        function handleDownload(filename) {
            const toast = document.getElementById('downloadToast');
            const toastFileName = document.getElementById('toastFileName');
            if (!toast) return;

            toastFileName.textContent = `Downloading ${filename}`;
            toast.classList.remove('translate-y-32', 'opacity-0');
            toast.classList.add('translate-y-0', 'opacity-100');

            clearTimeout(toastTimeout);
            toastTimeout = setTimeout(() => {
                dismissToast();
            }, 7000);
        }

        function dismissToast() {
            const toast = document.getElementById('downloadToast');
            if (toast) {
                toast.classList.remove('translate-y-0', 'opacity-100');
                toast.classList.add('translate-y-32', 'opacity-0');
            }
        }
    </script>
</body>
</html>
