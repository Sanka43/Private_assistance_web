<?php
/**
 * RuXt AI - Autonomous Digital Company Headquarters (HQ)
 * Local XAMPP / Apache Entry Point
 */
$pageTitle = "RuXt AI · Autonomous Digital Company Headquarters & AI Executive Board";
$activePage = "hq";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Primary SEO & Brand Meta Tags -->
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="title" content="RuXt AI · Autonomous Digital Company Headquarters &amp; AI Executive Board">
    <meta name="description" content="Command your own digitalized company with dedicated AI team members. Chief of Staff, CTO, CMO, CFO, and COO operating autonomously on your private hardware.">
    <meta name="keywords" content="autonomous AI company, digital company headquarters, AI executive board, chief of staff, private SQLite business OS, multi-agent organization">

    <!-- Favicon & PWA Icons -->
    <link rel="icon" type="image/svg+xml" href="assets/icons/ruxt-logo.svg">
    <link rel="apple-touch-icon" href="assets/icons/icon-192.png">
    <meta name="theme-color" content="#173d34">

    <!-- Preconnect Google Fonts -->
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
                        ruxtSage: '#799a87'
                    }
                }
            }
        }
    </script>

    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body class="bg-[#fcfaf5] text-[#202725] antialiased selection:bg-[#173d34] selection:text-[#fcfaf5] min-h-screen flex flex-col">

    <!-- Top Command Navigation Bar -->
    <header class="sticky top-0 z-40 bg-[#fcfaf5]/90 backdrop-blur-md border-b border-[#ddd8cc]">
        <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <!-- Brand & Company Badge -->
            <div class="flex items-center space-x-2 sm:space-x-4">
                <a href="index.php" class="flex items-center space-x-2 group" title="Return to Overview">
                    <img src="assets/icons/ruxt-logo.svg" alt="RuXt AI" class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg shadow-sm">
                    <span class="font-extrabold text-base sm:text-lg text-[#173d34] tracking-tight">RuXt<span class="text-[#b7843f]">.HQ</span></span>
                </a>
                <span class="hidden sm:inline-block h-5 w-px bg-[#ddd8cc]"></span>
                <div class="hidden md:flex items-center gap-1.5 bg-[#f5f2e9] px-3 py-1 rounded-full border border-[#e8e3d9]">
                    <span class="w-2 h-2 rounded-full bg-emerald-600 live-pulse"></span>
                    <span class="text-xs font-bold text-[#173d34]">Company Command OS</span>
                </div>
            </div>

            <!-- Top Controls -->
            <div class="flex items-center space-x-1.5 sm:space-x-3">
                <!-- Voice Briefing Toggle -->
                <button id="toggleVoiceBtn" class="px-2.5 sm:px-3 py-1.5 rounded-xl border border-[#ddd8cc] bg-[#f5f2e9] text-[#68716d] hover:text-[#173d34] transition-all flex items-center gap-1.5 cursor-pointer touch-target" title="Toggle AI Executive Audio Voice">
                    <i data-lucide="volume-x" class="w-3.5 h-3.5"></i>
                    <span class="hidden sm:inline text-xs font-bold">Voice: OFF</span>
                </button>

                <!-- Download Windows EXE Button -->
                <a href="download.php" class="px-2.5 sm:px-3 py-1.5 rounded-xl border border-[#ddd8cc] bg-[#f5f2e9] text-[#173d34] hover:bg-[#ede8dc] transition-all flex items-center gap-1.5 text-xs font-bold touch-target shadow-xs" title="Download Windows Desktop App (.EXE)">
                    <i data-lucide="download" class="w-3.5 h-3.5 text-[#b7843f]"></i>
                    <span class="hidden md:inline">Download EXE</span>
                </a>

                <!-- Found Company Wizard Trigger -->
                <button id="foundCompanyBtn" class="px-3 sm:px-3.5 py-1.5 rounded-xl bg-[#173d34] hover:bg-[#285c4e] text-[#fcfaf5] text-xs font-bold shadow-sm transition-all flex items-center gap-1.5 touch-target">
                    <i data-lucide="plus-circle" class="w-3.5 h-3.5 text-[#ffd580]"></i>
                    <span class="hidden sm:inline">Found New Venture</span>
                    <span class="sm:hidden font-bold">New</span>
                </button>

                <!-- Return to Main Site -->
                <a href="index.php" class="p-2 rounded-xl text-[#68716d] hover:text-[#173d34] hover:bg-[#ede8dc] transition-colors touch-target flex items-center justify-center" title="Back to Public Site">
                    <i data-lucide="home" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- Company Pulse Banner -->
    <section class="bg-[#173d34] text-[#fcfaf5] border-b border-[#285c4e] py-6 sm:py-8 relative overflow-hidden">
        <div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-emerald-500/10 filter blur-3xl pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6">
                <!-- Company Identity -->
                <div class="space-y-1 text-center lg:text-left">
                    <div class="flex items-center justify-center lg:justify-start gap-2 flex-wrap">
                        <span class="px-2 py-0.5 rounded text-[10px] font-mono uppercase bg-[#b7843f] text-[#fcfaf5] font-bold">Autonomous Enterprise</span>
                        <span id="hqCompanyMemory" class="text-xs text-[#a7f3d0] font-mono">SQLite Vault v4.2 (Encrypted)</span>
                    </div>
                    <h1 id="hqCompanyName" class="text-xl sm:text-2xl md:text-3xl font-extrabold text-[#fcfaf5] tracking-tight">NovaScale AI Systems Ltd.</h1>
                    <p id="hqCompanyIndustry" class="text-xs sm:text-sm text-[#ffd580] font-medium">Autonomous Enterprise Software · 100% Private Hardware</p>
                </div>

                <!-- Company KPI Metric Badges -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5 sm:gap-3 text-center w-full lg:w-auto">
                    <div class="p-2.5 sm:p-3 rounded-2xl bg-[#0f2620]/60 border border-[#285c4e] backdrop-blur-sm">
                        <span class="text-[9px] sm:text-[10px] text-[#a7f3d0] uppercase font-bold block">Monthly ARR/MRR</span>
                        <span id="hqCompanyMrr" class="text-sm sm:text-base lg:text-lg font-mono font-black text-[#fcfaf5]">$68,400/mo</span>
                    </div>
                    <div class="p-2.5 sm:p-3 rounded-2xl bg-[#0f2620]/60 border border-[#285c4e] backdrop-blur-sm">
                        <span class="text-[9px] sm:text-[10px] text-[#a7f3d0] uppercase font-bold block">Valuation</span>
                        <span id="hqCompanyValuation" class="text-sm sm:text-base lg:text-lg font-mono font-black text-[#ffd580]">$3.2M</span>
                    </div>
                    <div class="p-2.5 sm:p-3 rounded-2xl bg-[#0f2620]/60 border border-[#285c4e] backdrop-blur-sm">
                        <span class="text-[9px] sm:text-[10px] text-[#a7f3d0] uppercase font-bold block">Cash Runway</span>
                        <span id="hqCompanyRunway" class="text-sm sm:text-base lg:text-lg font-mono font-black text-emerald-300">24 Mo</span>
                    </div>
                    <div class="p-2.5 sm:p-3 rounded-2xl bg-[#0f2620]/60 border border-[#285c4e] backdrop-blur-sm">
                        <span class="text-[9px] sm:text-[10px] text-[#a7f3d0] uppercase font-bold block">AI Workforce</span>
                        <span id="hqCompanyStaff" class="text-sm sm:text-base lg:text-lg font-mono font-black text-[#fcfaf5]">6 Active</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HQ Navigation Tabs Bar -->
    <nav class="bg-[#ffffff] border-b border-[#ddd8cc] sticky top-16 z-30 shadow-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-1 sm:space-x-2 py-2 overflow-x-auto no-scrollbar">
                <button class="hq-nav-btn px-4 py-2 rounded-xl text-xs font-bold transition-all bg-[#173d34] text-[#fcfaf5] shadow-sm flex items-center gap-1.5 whitespace-nowrap" data-view="war-room">
                    <i data-lucide="flame" class="w-3.5 h-3.5 text-[#ffd580]"></i>
                    <span>Strategy War Room</span>
                </button>

                <button class="hq-nav-btn px-4 py-2 rounded-xl text-xs font-bold transition-all text-[#68716d] hover:text-[#173d34] hover:bg-[#f0ede4] flex items-center gap-1.5 whitespace-nowrap" data-view="org-chart">
                    <i data-lucide="network" class="w-3.5 h-3.5"></i>
                    <span>Org Chart &amp; AI Staff</span>
                </button>

                <button class="hq-nav-btn px-4 py-2 rounded-xl text-xs font-bold transition-all text-[#68716d] hover:text-[#173d34] hover:bg-[#f0ede4] flex items-center gap-1.5 whitespace-nowrap" data-view="kanban">
                    <i data-lucide="kanban" class="w-3.5 h-3.5"></i>
                    <span>Autonomous Sprint Pipeline</span>
                </button>

                <button class="hq-nav-btn px-4 py-2 rounded-xl text-xs font-bold transition-all text-[#68716d] hover:text-[#173d34] hover:bg-[#f0ede4] flex items-center gap-1.5 whitespace-nowrap" data-view="departments">
                    <i data-lucide="building-2" class="w-3.5 h-3.5"></i>
                    <span>Department Floors</span>
                </button>

                <button class="hq-nav-btn px-4 py-2 rounded-xl text-xs font-bold transition-all text-[#68716d] hover:text-[#173d34] hover:bg-[#f0ede4] flex items-center gap-1.5 whitespace-nowrap" data-view="vault">
                    <i data-lucide="shield-check" class="w-3.5 h-3.5"></i>
                    <span>Company Vault &amp; SOPs</span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Workspace Area -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-6">

        <!-- VIEW 1: STRATEGY WAR ROOM -->
        <section id="view-war-room" class="hq-view-panel space-y-6">
            <div class="p-5 rounded-3xl bg-[#ffffff] border border-[#ddd8cc] shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <div class="flex items-center gap-2">
                        <h2 class="text-lg font-extrabold text-[#173d34] tracking-tight">Executive War Room</h2>
                        <span id="warRoomStatusBadge" class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800 flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Boardroom Idle · Ready
                        </span>
                    </div>
                    <p class="text-xs text-[#68716d] mt-0.5">Submit high-level strategic objectives; your AI executives will deliberate, construct consensus, and generate execution tasks.</p>
                </div>

                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2.5">
                    <select id="warRoomScenario" class="px-3 py-2 rounded-xl border border-[#ddd8cc] text-xs font-medium bg-[#fcfaf5] text-[#173d34] focus:ring-2 focus:ring-[#173d34] focus:outline-none">
                        <option value="q4-pricing">Scenario: Enterprise Lifetime License Packaging</option>
                        <option value="zero-churn">Scenario: Customer Onboarding &lt;1% Churn</option>
                        <option value="privacy-audit">Scenario: 100% Offline Air-Gapped Audit</option>
                    </select>

                    <button id="conveneBoardroomBtn" class="px-4 py-2 bg-[#173d34] hover:bg-[#285c4e] text-[#fcfaf5] text-xs font-bold rounded-xl shadow-md transition-all flex items-center justify-center gap-1.5 cursor-pointer active:scale-95">
                        <i data-lucide="play" class="w-3.5 h-3.5 text-[#ffd580]"></i>
                        <span>Convene Deliberation</span>
                    </button>
                </div>
            </div>

            <!-- Deliberation Chamber Container -->
            <div class="bg-[#ffffff] rounded-3xl border border-[#ddd8cc] shadow-md overflow-hidden flex flex-col">
                <div class="bg-[#f0ede4] px-6 py-3 border-b border-[#ddd8cc] flex items-center justify-between text-xs text-[#68716d]">
                    <div class="flex items-center space-x-2">
                        <span class="w-3 h-3 rounded-full bg-red-400"></span>
                        <span class="w-3 h-3 rounded-full bg-amber-400"></span>
                        <span class="w-3 h-3 rounded-full bg-emerald-400"></span>
                        <span class="ml-2 font-mono font-bold text-[#173d34]">localhost/Private_assistance_web/war-room/</span>
                    </div>
                    <span class="text-[11px] font-mono text-[#68716d] hidden sm:inline">Local SQLite Deliberation Stream</span>
                </div>

                <div id="boardroomTranscript" class="p-6 sm:p-8 space-y-4 max-h-[500px] overflow-y-auto bg-[#faf8f2]">
                    <div class="text-center py-10 space-y-2">
                        <div class="w-12 h-12 rounded-2xl bg-[#173d34]/10 text-[#173d34] mx-auto flex items-center justify-center">
                            <i data-lucide="users" class="w-6 h-6"></i>
                        </div>
                        <h4 class="text-sm font-bold text-[#173d34]">Boardroom Chamber Assembled</h4>
                        <p class="text-xs text-[#68716d] max-w-md mx-auto">
                            Click <strong>"Convene Deliberation"</strong> above or type a custom directive below to initiate real-time AI debate between your Chief of Staff, CTO, CMO, CFO, and COO.
                        </p>
                    </div>
                </div>

                <!-- Custom Directive Input Prompt Bar -->
                <div class="p-3 sm:p-4 bg-[#ffffff] border-t border-[#ddd8cc]">
                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2">
                        <input type="text" id="customDirectiveInput" placeholder="Enter Founder directive (e.g. 'Optimize landing page conversion for Q4 and allocate budget')..." class="flex-1 px-3.5 sm:px-4 py-2.5 rounded-xl border border-[#ddd8cc] text-xs focus:ring-2 focus:ring-[#173d34] focus:outline-none bg-[#fcfaf5]">
                        <button id="sendDirectiveBtn" class="px-5 py-2.5 bg-[#173d34] hover:bg-[#285c4e] text-[#fcfaf5] text-xs font-bold rounded-xl transition-all flex items-center justify-center gap-1.5 shadow-sm active:scale-95 whitespace-nowrap touch-target">
                            <span>Issue Directive</span>
                            <i data-lucide="corner-down-left" class="w-3.5 h-3.5"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- VIEW 2: ORG CHART & AI STAFF -->
        <section id="view-org-chart" class="hq-view-panel hidden space-y-6">
            <div class="p-4 sm:p-5 rounded-3xl bg-[#ffffff] border border-[#ddd8cc] shadow-sm flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                <div>
                    <h2 class="text-base sm:text-lg font-extrabold text-[#173d34] tracking-tight">Interactive Organizational Hierarchy</h2>
                    <p class="text-xs text-[#68716d] mt-0.5">Click any executive card to view their dossier, inspect real-time cognitive metrics, or convene a private 1-on-1 meeting.</p>
                </div>
                <span class="text-xs font-mono font-bold text-[#173d34] bg-[#f5f2e9] px-3 py-1.5 rounded-xl border border-[#ddd8cc] self-start sm:self-auto">
                    6 AI Officers Active
                </span>
            </div>

            <div id="orgChartContainer" class="p-4 sm:p-10 rounded-3xl bg-[#fcfaf5] border border-[#ddd8cc] shadow-inner overflow-x-auto touch-scroll"></div>
        </section>

        <!-- VIEW 3: KANBAN -->
        <section id="view-kanban" class="hq-view-panel hidden space-y-4 sm:space-y-6">
            <div class="p-4 sm:p-5 rounded-3xl bg-[#ffffff] border border-[#ddd8cc] shadow-sm flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                <div>
                    <h2 class="text-base sm:text-lg font-extrabold text-[#173d34] tracking-tight">Autonomous Sprint &amp; Task Pipeline</h2>
                    <p class="text-xs text-[#68716d] mt-0.5">Tasks auto-dispatched from boardroom decisions. Review AI deliverables and grant founder sign-off.</p>
                </div>
                <div class="flex items-center gap-2 self-start sm:self-auto">
                    <span class="text-xs text-[#68716d]">Local SQLite Sync: <strong>Active</strong></span>
                </div>
            </div>

            <!-- Mobile Column Switcher Pills (Visible only on mobile screens < 640px) -->
            <div class="flex items-center gap-1.5 overflow-x-auto no-scrollbar pb-1 sm:hidden">
                <button class="kanban-filter-btn px-3 py-1.5 rounded-xl text-xs font-bold transition-all bg-[#173d34] text-[#fcfaf5] shadow-xs active" data-col="all">
                    All
                </button>
                <button class="kanban-filter-btn px-3 py-1.5 rounded-xl text-xs font-bold transition-all bg-[#ffffff] text-[#68716d] border border-[#ddd8cc]" data-col="kanbanColCardBacklog">
                    Backlog (<span id="mCountBacklog">0</span>)
                </button>
                <button class="kanban-filter-btn px-3 py-1.5 rounded-xl text-xs font-bold transition-all bg-[#ffffff] text-[#68716d] border border-[#ddd8cc]" data-col="kanbanColCardProgress">
                    Executing (<span id="mCountProgress">0</span>)
                </button>
                <button class="kanban-filter-btn px-3 py-1.5 rounded-xl text-xs font-bold transition-all bg-[#ffffff] text-[#68716d] border border-[#ddd8cc]" data-col="kanbanColCardReview">
                    Sign-Off (<span id="mCountReview">0</span>)
                </button>
                <button class="kanban-filter-btn px-3 py-1.5 rounded-xl text-xs font-bold transition-all bg-[#ffffff] text-[#68716d] border border-[#ddd8cc]" data-col="kanbanColCardDone">
                    Done (<span id="mCountDone">0</span>)
                </button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4" id="kanbanColumnsGrid">
                <!-- Backlog Column -->
                <div id="kanbanColCardBacklog" class="kanban-col-wrapper p-3.5 sm:p-4 rounded-3xl bg-[#f5f2e9] border border-[#ddd8cc] flex flex-col space-y-3">
                    <div class="flex items-center justify-between pb-2 border-b border-[#ddd8cc]">
                        <span class="text-xs font-bold text-[#68716d] uppercase tracking-wider">Backlog</span>
                        <span id="countBacklog" class="px-2 py-0.5 rounded-full text-[10px] font-mono font-bold bg-[#ffffff] border border-[#ddd8cc]">0</span>
                    </div>
                    <div id="kanbanColBacklog" class="kanban-column space-y-3 flex-1 overflow-y-auto max-h-[500px]"></div>
                </div>

                <!-- In Progress Column -->
                <div id="kanbanColCardProgress" class="kanban-col-wrapper p-3.5 sm:p-4 rounded-3xl bg-[#f5f2e9] border border-[#ddd8cc] flex flex-col space-y-3">
                    <div class="flex items-center justify-between pb-2 border-b border-[#ddd8cc]">
                        <span class="text-xs font-bold text-[#173d34] uppercase tracking-wider flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-blue-600 live-pulse"></span>
                            AI Executing
                        </span>
                        <span id="countProgress" class="px-2 py-0.5 rounded-full text-[10px] font-mono font-bold bg-[#ffffff] border border-[#ddd8cc]">0</span>
                    </div>
                    <div id="kanbanColProgress" class="kanban-column space-y-3 flex-1 overflow-y-auto max-h-[500px]"></div>
                </div>

                <!-- Founder Review Column -->
                <div id="kanbanColCardReview" class="kanban-col-wrapper p-3.5 sm:p-4 rounded-3xl bg-[#f5f2e9] border border-[#ddd8cc] flex flex-col space-y-3">
                    <div class="flex items-center justify-between pb-2 border-b border-[#ddd8cc]">
                        <span class="text-xs font-bold text-amber-800 uppercase tracking-wider flex items-center gap-1.5">
                            <i data-lucide="eye" class="w-3.5 h-3.5 text-amber-600"></i>
                            Founder Sign-Off
                        </span>
                        <span id="countReview" class="px-2 py-0.5 rounded-full text-[10px] font-mono font-bold bg-[#ffffff] border border-[#ddd8cc]">0</span>
                    </div>
                    <div id="kanbanColReview" class="kanban-column space-y-3 flex-1 overflow-y-auto max-h-[500px]"></div>
                </div>

                <!-- Completed Column -->
                <div id="kanbanColCardDone" class="kanban-col-wrapper p-3.5 sm:p-4 rounded-3xl bg-[#f5f2e9] border border-[#ddd8cc] flex flex-col space-y-3">
                    <div class="flex items-center justify-between pb-2 border-b border-[#ddd8cc]">
                        <span class="text-xs font-bold text-emerald-800 uppercase tracking-wider flex items-center gap-1.5">
                            <i data-lucide="check-check" class="w-3.5 h-3.5 text-emerald-600"></i>
                            Shipped &amp; Done
                        </span>
                        <span id="countDone" class="px-2 py-0.5 rounded-full text-[10px] font-mono font-bold bg-[#ffffff] border border-[#ddd8cc]">0</span>
                    </div>
                    <div id="kanbanColDone" class="kanban-column space-y-3 flex-1 overflow-y-auto max-h-[500px]"></div>
                </div>
            </div>
        </section>

        <!-- VIEW 4: DEPARTMENTS -->
        <section id="view-departments" class="hq-view-panel hidden space-y-6">
            <div class="p-5 rounded-3xl bg-[#ffffff] border border-[#ddd8cc] shadow-sm">
                <h2 class="text-lg font-extrabold text-[#173d34] tracking-tight">Virtual Department Offices</h2>
                <p class="text-xs text-[#68716d] mt-0.5">Real-time telemetry and operational metrics across your specialized functional divisions.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div id="deptFloorTech" class="dept-floor-card p-6 rounded-3xl bg-[#ffffff] border border-[#ddd8cc] shadow-sm space-y-4"></div>
                <div id="deptFloorGrowth" class="dept-floor-card p-6 rounded-3xl bg-[#ffffff] border border-[#ddd8cc] shadow-sm space-y-4"></div>
                <div id="deptFloorFinance" class="dept-floor-card p-6 rounded-3xl bg-[#ffffff] border border-[#ddd8cc] shadow-sm space-y-4"></div>
                <div id="deptFloorOps" class="dept-floor-card p-6 rounded-3xl bg-[#ffffff] border border-[#ddd8cc] shadow-sm space-y-4"></div>
            </div>
        </section>

        <!-- VIEW 5: VAULT -->
        <section id="view-vault" class="hq-view-panel hidden space-y-6">
            <div class="p-5 rounded-3xl bg-[#ffffff] border border-[#ddd8cc] shadow-sm">
                <h2 class="text-lg font-extrabold text-[#173d34] tracking-tight">Company Knowledge Base &amp; Private Memory Vault</h2>
                <p class="text-xs text-[#68716d] mt-0.5">Encrypted local SQLite storage. All strategic plans, executive memory embeddings, and proprietary assets stored safely on your machine.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="p-5 rounded-3xl bg-[#ffffff] border border-[#ddd8cc] space-y-3">
                    <div class="flex items-center space-x-2 text-[#173d34]">
                        <i data-lucide="database" class="w-5 h-5 text-emerald-600"></i>
                        <h4 class="font-bold text-sm">SQLite Vault Telemetry</h4>
                    </div>
                    <ul class="text-xs space-y-2 text-[#68716d]">
                        <li class="flex justify-between border-b border-[#f0ede4] pb-1">
                            <span>Storage Path:</span>
                            <span class="font-mono text-[#173d34]">api/data/orders.sqlite</span>
                        </li>
                        <li class="flex justify-between border-b border-[#f0ede4] pb-1">
                            <span>Encryption Standard:</span>
                            <span class="font-mono text-emerald-700 font-bold">AES-256 Local</span>
                        </li>
                        <li class="flex justify-between border-b border-[#f0ede4] pb-1">
                            <span>External Cloud Pings:</span>
                            <span class="font-mono text-emerald-700 font-bold">0.00 (Air-Gapped)</span>
                        </li>
                    </ul>
                </div>

                <div class="p-5 rounded-3xl bg-[#ffffff] border border-[#ddd8cc] space-y-3">
                    <div class="flex items-center space-x-2 text-[#173d34]">
                        <i data-lucide="file-text" class="w-5 h-5 text-[#b7843f]"></i>
                        <h4 class="font-bold text-sm">Corporate Documents</h4>
                    </div>
                    <div class="space-y-2 text-xs">
                        <div class="p-2.5 rounded-xl bg-[#fcfaf5] border border-[#e8e3d9] flex items-center justify-between">
                            <span class="font-bold text-[#173d34]">Master Strategy Directive v1.4</span>
                            <span class="text-[10px] text-emerald-700 font-bold font-mono">Verified</span>
                        </div>
                        <div class="p-2.5 rounded-xl bg-[#fcfaf5] border border-[#e8e3d9] flex items-center justify-between">
                            <span class="font-bold text-[#173d34]">Lifetime License Terms 2026</span>
                            <span class="text-[10px] text-emerald-700 font-bold font-mono">Drafted</span>
                        </div>
                    </div>
                </div>

                <div class="p-5 rounded-3xl bg-[#ffffff] border border-[#ddd8cc] space-y-3">
                    <div class="flex items-center space-x-2 text-[#173d34]">
                        <i data-lucide="refresh-cw" class="w-5 h-5 text-purple-600"></i>
                        <h4 class="font-bold text-sm">Factory Reset &amp; Backup</h4>
                    </div>
                    <p class="text-xs text-[#68716d]">Want to wipe demo state or restore standard venture baseline?</p>
                    <button id="resetDemoStateBtn" class="w-full py-2 bg-[#f5f2e9] hover:bg-rose-50 hover:text-rose-700 text-[#68716d] text-xs font-bold rounded-xl border border-[#ddd8cc] transition-colors flex items-center justify-center gap-1.5">
                        <i data-lucide="rotate-ccw" class="w-3.5 h-3.5"></i>
                        <span>Reset Company State to Defaults</span>
                    </button>
                </div>
            </div>
        </section>
    </main>

    <!-- EXECUTIVE DOSSIER MODAL -->
    <div id="executiveDossierModal" class="hidden fixed inset-0 z-50 bg-[#0f2620]/75 backdrop-blur-md flex items-center justify-center p-3 sm:p-4">
        <div class="bg-[#ffffff] max-w-xl w-full max-h-[88vh] overflow-y-auto modal-content-scroll rounded-3xl border border-[#ddd8cc] shadow-2xl p-4 sm:p-8 space-y-4 sm:space-y-5 animate-scaleUp">
            <div class="flex items-center justify-between pb-3 border-b border-[#ddd8cc]">
                <div class="flex items-center space-x-3">
                    <img id="dossierAvatar" src="" class="w-14 h-14 rounded-2xl object-cover border-2 border-[#173d34] shadow-sm">
                    <div>
                        <div class="flex items-center gap-2">
                            <h4 id="dossierName" class="text-base font-bold text-[#173d34]"></h4>
                            <span id="dossierBadge" class="text-[10px] font-bold px-2 py-0.5 rounded bg-[#f5f2e9] text-[#173d34]"></span>
                        </div>
                        <p id="dossierTitle" class="text-xs text-[#68716d]"></p>
                    </div>
                </div>
                <button id="closeDossierBtn" class="text-[#68716d] hover:text-[#173d34] p-2 rounded-xl hover:bg-[#f5f2e9]">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <div class="grid grid-cols-2 gap-3 text-xs">
                <div class="p-3 rounded-2xl bg-[#fcfaf5] border border-[#e8e3d9]">
                    <span class="text-[10px] text-[#68716d] block font-bold uppercase">Real-Time Status</span>
                    <span id="dossierStatus" class="font-bold text-[#173d34]"></span>
                </div>
                <div class="p-3 rounded-2xl bg-[#fcfaf5] border border-[#e8e3d9]">
                    <span class="text-[10px] text-[#68716d] block font-bold uppercase">Cognitive Load</span>
                    <span id="dossierLoad" class="font-mono font-bold text-[#173d34]"></span>
                </div>
            </div>

            <div class="space-y-1.5 text-xs">
                <span class="font-bold text-[#173d34]">Executive Responsibilities:</span>
                <ul id="dossierResponsibilities" class="space-y-1 text-[#68716d]"></ul>
            </div>

            <div class="p-3 rounded-2xl bg-[#f5f2e9] text-xs text-[#202725] italic border border-[#e8e3d9]">
                <span class="font-bold not-italic text-[#173d34] block text-[10px] uppercase mb-0.5">Latest Officer Log:</span>
                <span id="dossierLog"></span>
            </div>

            <div class="pt-3 border-t border-[#ddd8cc] space-y-2">
                <span class="text-xs font-bold text-[#173d34] flex items-center gap-1.5">
                    <i data-lucide="sparkles" class="w-3.5 h-3.5 text-[#b7843f]"></i>
                    Direct 1-on-1 Consultation
                </span>
                <div class="flex items-center gap-2">
                    <input type="text" id="input1on1" placeholder="Ask for specialized counsel or strategic advice..." class="flex-1 px-3.5 py-2 rounded-xl border border-[#ddd8cc] text-xs focus:ring-2 focus:ring-[#173d34] focus:outline-none bg-[#fcfaf5]">
                    <button id="send1on1Btn" class="px-4 py-2 bg-[#173d34] hover:bg-[#285c4e] text-[#fcfaf5] text-xs font-bold rounded-xl transition-all flex items-center gap-1 cursor-pointer">
                        <span>Consult</span>
                        <i data-lucide="send" class="w-3 h-3"></i>
                    </button>
                </div>
                <div id="response1on1" class="hidden"></div>
            </div>
        </div>
    </div>

    <!-- WIZARD MODAL -->
    <div id="foundCompanyWizardModal" class="hidden fixed inset-0 z-50 bg-[#0f2620]/75 backdrop-blur-md flex items-center justify-center p-3 sm:p-4">
        <div class="bg-[#ffffff] max-w-lg w-full max-h-[88vh] overflow-y-auto modal-content-scroll rounded-3xl border border-[#ddd8cc] shadow-2xl p-4 sm:p-8 space-y-4 sm:space-y-5 animate-scaleUp">
            <div class="flex items-center justify-between pb-3 border-b border-[#ddd8cc]">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 rounded-xl bg-[#173d34] text-[#ffd580] flex items-center justify-center font-bold">
                        🏢
                    </div>
                    <div>
                        <h4 class="text-base font-bold text-[#173d34]">Found Your Digital Company</h4>
                        <p class="text-xs text-[#68716d]">Incorporate an autonomous AI venture on your private hardware.</p>
                    </div>
                </div>
                <button id="closeWizardBtn" class="text-[#68716d] hover:text-[#173d34] p-2 rounded-xl hover:bg-[#f5f2e9]">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <form id="foundCompanyForm" class="space-y-4">
                <div>
                    <label class="block text-xs font-bold text-[#173d34] mb-1">Company / Venture Name</label>
                    <input type="text" id="newCompanyName" required placeholder="e.g. Apex AI Studio, Quantum Growth Ventures" class="w-full px-3.5 py-2.5 rounded-xl border border-[#ddd8cc] text-xs focus:ring-2 focus:ring-[#173d34] focus:outline-none bg-[#fcfaf5]">
                </div>

                <div>
                    <label class="block text-xs font-bold text-[#173d34] mb-1">Industry Archetype</label>
                    <select id="newCompanyIndustry" class="w-full px-3.5 py-2.5 rounded-xl border border-[#ddd8cc] text-xs focus:ring-2 focus:ring-[#173d34] focus:outline-none bg-[#fcfaf5]">
                        <option value="Autonomous Enterprise Software">AI Software / SaaS Platform</option>
                        <option value="Direct-to-Consumer E-Commerce Empire">E-Commerce &amp; DTC Brand</option>
                        <option value="Digital Growth &amp; Content Studio">Digital Marketing &amp; Media Agency</option>
                        <option value="Autonomous Real Estate Holding Co.">Real Estate Portfolio &amp; Acquisitions</option>
                        <option value="Consulting &amp; Executive Services">High-Ticket Advisory &amp; Services</option>
                    </select>
                </div>

                <div class="p-3.5 rounded-2xl bg-[#f5f2e9] border border-[#e8e3d9] text-xs space-y-1.5 text-[#68716d]">
                    <div class="font-bold text-[#173d34] flex items-center gap-1.5">
                        <i data-lucide="users" class="w-3.5 h-3.5 text-[#b7843f]"></i>
                        <span>AI Executive Board Pre-Assigned:</span>
                    </div>
                    <p class="leading-relaxed">RuXt (Chief of Staff), Elena (CTO), Marcus (CMO), Julian (CFO), and Maya (COO) will immediately assemble under your new corporate masthead.</p>
                </div>

                <button type="submit" class="w-full py-3 bg-[#173d34] hover:bg-[#285c4e] text-[#fcfaf5] font-bold text-xs rounded-xl transition-all shadow-md flex items-center justify-center gap-1.5">
                    <span>Incorporate &amp; Initialize AI Board</span>
                    <i data-lucide="arrow-right" class="w-4 h-4 text-[#ffd580]"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-auto bg-[#f0ede4] border-t border-[#ddd8cc] py-6 text-center text-xs text-[#68716d]">
        <div class="max-w-7xl mx-auto px-4 flex flex-col sm:flex-row items-center justify-between gap-3">
            <span class="font-mono">RuXt Autonomous Enterprise OS · 100% Private Hardware</span>
            <div class="flex items-center space-x-4">
                <a href="index.php" class="hover:text-[#173d34] underline">Overview</a>
                <a href="workspaces.php" class="hover:text-[#173d34] underline">Workspaces</a>
                <a href="signin.php" class="hover:text-[#173d34] underline">Sign In Gateway</a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/hq.js"></script>
</body>
</html>
