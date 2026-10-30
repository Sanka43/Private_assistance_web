<?php
// RuXt AI - Dedicated Private Multi-Venture Workspaces Marketplace
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>RuXt AI Workspaces · Private Autonomous Multi-Venture Marketplace</title>
    <meta name="title" content="RuXt AI Workspaces · Private Autonomous Multi-Venture Marketplace">
    <meta name="description" content="Deploy dedicated, isolated AI workspaces for your ventures. Pre-built niche workspaces (E-Commerce, SaaS, Agency, Real Estate) and capacity packs with 100% private SQLite isolation and lifetime ownership.">
    <meta name="keywords" content="AI workspaces, multi-venture AI, private AI workspace, local SQLite AI, autonomous AI boardroom, e-commerce AI workspace, agency AI workspace, SaaS AI workspace">
    <meta name="author" content="RuXt AI Systems">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="http://localhost/Private_assistance_web/workspaces.php">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="http://localhost/Private_assistance_web/workspaces.php">
    <meta property="og:title" content="RuXt AI Workspaces · Dedicated Private Multi-Venture Marketplace">
    <meta property="og:description" content="Deploy isolated AI workspaces for every business you run. Zero monthly SaaS subscriptions, 100% private SQLite databases, lifetime license.">
    <meta property="og:image" content="http://localhost/Private_assistance_web/assets/icons/og-preview.svg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="http://localhost/Private_assistance_web/workspaces.php">
    <meta name="twitter:title" content="RuXt AI Workspaces · Dedicated Private Multi-Venture Marketplace">
    <meta name="twitter:description" content="Deploy isolated AI workspaces for every business you run. Zero monthly SaaS subscriptions, 100% private SQLite databases, lifetime license.">
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
      "@graph": [
        {
          "@type": "SoftwareApplication",
          "@id": "http://localhost/Private_assistance_web/workspaces.php#software",
          "name": "RuXt AI Workspaces Marketplace",
          "operatingSystem": "Cross-Platform (Windows, macOS, Linux, Private VPS)",
          "applicationCategory": "BusinessApplication",
          "offers": {
            "@type": "AggregateOffer",
            "priceCurrency": "USD",
            "lowPrice": "49",
            "highPrice": "299"
          }
        },
        {
          "@type": "BreadcrumbList",
          "@id": "http://localhost/Private_assistance_web/workspaces.php#breadcrumbs",
          "itemListElement": [
            {
              "@type": "ListItem",
              "position": 1,
              "name": "Home",
              "item": "http://localhost/Private_assistance_web/index.php"
            },
            {
              "@type": "ListItem",
              "position": 2,
              "name": "Workspaces",
              "item": "http://localhost/Private_assistance_web/workspaces.php"
            }
          ]
        }
      ]
    }
    </script>
</head>
<body class="bg-[#fcfaf5] text-[#202725] selection:bg-[#b7843f] selection:text-[#fcfaf5] relative overflow-x-hidden font-sans">

    <!-- Subtle Ambient Glow -->
    <div class="hero-glow top-10 left-1/2 -translate-x-1/2 opacity-30"></div>
    <div class="hero-glow top-[1400px] right-0 opacity-20"></div>

    <!-- Top Announcement Ribbon -->
    <div class="w-full bg-[#173d34] text-[#fcfaf5] py-2 px-4 text-xs font-medium border-b border-[#285c4e] flex items-center justify-center gap-2">
        <span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded-full bg-[#b7843f]/25 text-[#ffd580] text-[10px] font-bold uppercase tracking-wider">
            <i data-lucide="sparkles" class="w-3 h-3"></i>
            NEW FEATURE
        </span>
        <span>Independent SQLite Database Isolation for Every Venture. Zero cross-contamination.</span>
        <a href="#marketplace" class="hidden sm:inline-flex items-center gap-1 text-[#ffd580] hover:underline font-bold ml-2">
            <span>Explore Workspaces</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
        </a>
    </div>

    <!-- Navigation Header -->
    <header class="sticky top-0 z-50 bg-[#fcfaf5]/90 backdrop-blur-md border-b border-[#ddd8cc] transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="index.php" class="flex items-center space-x-3 group" title="RuXt AI - Return to Home">
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
                        <span class="text-[9px] bg-[#173d34]/10 text-[#173d34] border border-[#173d34]/20 px-2 py-0.5 rounded-full font-bold uppercase tracking-wider">AI WORKSPACES</span>
                    </div>
                    <p class="text-[11px] text-[#68716d] font-medium hidden sm:block">Private Autonomous Executive Board</p>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden lg:flex items-center space-x-7 text-sm font-semibold text-[#68716d]">
                <a href="index.php" class="hover:text-[#173d34] transition-colors">Home</a>
                <a href="#marketplace" class="text-[#173d34] font-bold flex items-center gap-1.5">
                    <span>Workspaces</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-[#b7843f]"></span>
                </a>
                <a href="#packs" class="hover:text-[#173d34] transition-colors">Capacity Packs</a>
                <a href="#roi-calculator" class="hover:text-[#173d34] transition-colors">ROI Calculator</a>
                <a href="#architecture" class="hover:text-[#173d34] transition-colors">Isolation Architecture</a>
                <a href="#faq" class="hover:text-[#173d34] transition-colors">FAQ</a>
            </nav>

            <!-- Right CTA Actions -->
            <div class="hidden sm:flex items-center space-x-4">
                <a href="#marketplace" class="text-xs font-bold text-[#173d34] hover:text-[#285c4e] px-3.5 py-2 rounded-xl border border-[#ddd8cc] hover:bg-[#f5f2e9] transition-all flex items-center gap-1.5">
                    <i data-lucide="layers" class="w-4 h-4 text-[#b7843f]"></i>
                    <span>Browse Workspaces</span>
                </a>
                <a href="signin.php" class="sign-in-btn btn-shimmer text-xs font-bold bg-[#173d34] hover:bg-[#285c4e] text-[#fcfaf5] px-5 py-2.5 rounded-full shadow-lg shadow-[#173d34]/20 transition-all flex items-center gap-1.5 active:scale-95" title="Sign In to RuXt AI Workspace">
                    <i data-lucide="log-in" class="w-4 h-4"></i>
                    <span>Sign In</span>
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button id="mobileMenuBtn" aria-label="Open Navigation Menu" class="lg:hidden text-[#173d34] p-2 rounded-xl hover:bg-[#ede8dc] transition-colors">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobileMenu" class="hidden lg:hidden fixed inset-0 z-50 bg-[#202725]/60 backdrop-blur-sm">
            <div class="w-4/5 max-w-sm bg-[#fcfaf5] h-full shadow-2xl p-6 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between pb-6 border-b border-[#ddd8cc]">
                        <div class="flex items-center space-x-2">
                            <span class="text-lg font-extrabold text-[#173d34]">RuXt Workspaces</span>
                        </div>
                        <button id="closeMobileMenuBtn" aria-label="Close Menu" class="text-[#68716d] p-2 rounded-lg hover:bg-[#ede8dc]">
                            <i data-lucide="x" class="w-5 h-5"></i>
                        </button>
                    </div>

                    <nav class="mt-6 flex flex-col space-y-4 text-base font-bold text-[#202725]">
                        <a href="index.php" class="mobile-nav-link hover:text-[#173d34]">Home</a>
                        <a href="#marketplace" class="mobile-nav-link text-[#173d34]">Workspaces Marketplace</a>
                        <a href="#packs" class="mobile-nav-link hover:text-[#173d34]">Capacity License Packs</a>
                        <a href="#roi-calculator" class="mobile-nav-link hover:text-[#173d34]">ROI &amp; Cost Calculator</a>
                        <a href="#architecture" class="mobile-nav-link hover:text-[#173d34]">Isolation Architecture</a>
                        <a href="#faq" class="mobile-nav-link hover:text-[#173d34]">FAQ</a>
                    </nav>
                </div>

                <div class="pt-6 border-t border-[#ddd8cc] space-y-3">
                    <a href="signin.php" class="sign-in-btn mobile-nav-link w-full py-3 bg-[#173d34] text-[#fcfaf5] font-bold rounded-xl flex items-center justify-center space-x-2 shadow-lg" title="Sign In to RuXt AI Workspace">
                        <i data-lucide="log-in" class="w-4 h-4"></i>
                        <span>Sign In to Workspace</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="relative pt-12 sm:pt-20 pb-16 sm:pb-24 border-b border-[#ddd8cc] overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
                <!-- Eyebrow Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold bg-[#173d34]/10 text-[#173d34] border border-[#173d34]/20 mb-6 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 live-pulse"></span>
                    <span>MULTI-VENTURE WORKSPACE MARKETPLACE</span>
                    <span class="text-[#b7843f] font-bold">· ZERO MONTHLY SAAS FEES</span>
                </div>

                <!-- Headline -->
                <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight text-[#173d34] max-w-4xl mx-auto leading-[1.15]">
                    Deploy Dedicated AI Workspaces for <span class="text-[#b7843f] italic underline decoration-[#173d34]/20 decoration-wavy">Every Venture</span> You Run.
                </h1>

                <!-- Subtitle -->
                <p class="text-base sm:text-lg text-[#68716d] max-w-2xl mx-auto mt-6 leading-relaxed">
                    Eliminate context confusion. Segment distinct companies, agencies, and client silos into <strong>100% private SQLite-isolated workspaces</strong> with dedicated AI executive boards, memory vaults, and automated task pipelines.
                </p>

                <!-- Value Pillar Pills -->
                <div class="flex flex-wrap items-center justify-center gap-2.5 sm:gap-3 mt-8 max-w-3xl mx-auto">
                    <span class="px-3.5 py-1.5 rounded-full text-xs font-bold bg-[#ffffff] border border-[#ddd8cc] text-[#173d34] shadow-sm flex items-center gap-1.5">
                        <i data-lucide="database" class="w-3.5 h-3.5 text-emerald-600"></i>
                        <span>100% Private SQLite Isolation</span>
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full text-xs font-bold bg-[#ffffff] border border-[#ddd8cc] text-[#173d34] shadow-sm flex items-center gap-1.5">
                        <i data-lucide="zap" class="w-3.5 h-3.5 text-[#b7843f]"></i>
                        <span>&lt; 50ms Hot Switching</span>
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full text-xs font-bold bg-[#ffffff] border border-[#ddd8cc] text-[#173d34] shadow-sm flex items-center gap-1.5">
                        <i data-lucide="users" class="w-3.5 h-3.5 text-blue-600"></i>
                        <span>Dedicated Specialist Boardrooms</span>
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full text-xs font-bold bg-[#ffffff] border border-[#ddd8cc] text-[#173d34] shadow-sm flex items-center gap-1.5">
                        <i data-lucide="shield-check" class="w-3.5 h-3.5 text-emerald-600"></i>
                        <span>Lifetime Ownership · Zero SaaS Rent</span>
                    </span>
                </div>

                <!-- Hero CTA Buttons -->
                <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#marketplace" class="w-full sm:w-auto px-8 py-3.5 rounded-full bg-[#173d34] hover:bg-[#285c4e] text-[#fcfaf5] text-sm font-extrabold shadow-xl shadow-[#173d34]/20 transition-all flex items-center justify-center gap-2 active:scale-95">
                        <i data-lucide="shopping-bag" class="w-4 h-4 text-[#ffd580]"></i>
                        <span>Browse Pre-Built Workspaces</span>
                    </a>
                    <a href="#packs" class="w-full sm:w-auto px-8 py-3.5 rounded-full bg-[#ffffff] hover:bg-[#f5f2e9] text-[#173d34] border border-[#ddd8cc] text-sm font-bold shadow-sm transition-all flex items-center justify-center gap-2">
                        <i data-lucide="package" class="w-4 h-4 text-[#b7843f]"></i>
                        <span>Buy Workspace License Packs</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Marketplace Section -->
        <section id="marketplace" class="py-16 sm:py-24 bg-[#f5f2e9]/50 border-b border-[#ddd8cc]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
                    <div>
                        <div class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-[#b7843f] mb-2">
                            <i data-lucide="sparkles" class="w-3.5 h-3.5"></i>
                            <span>Turnkey AI Boardrooms</span>
                        </div>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-[#173d34] tracking-tight">
                            Specialized Niche Workspaces
                        </h2>
                        <p class="text-sm sm:text-base text-[#68716d] mt-2 max-w-xl">
                            Each workspace comes pre-configured with industry-calibrated AI agents, specialized database schemas, tailored prompts, and domain sprint boards.
                        </p>
                    </div>

                    <!-- Category Filter Buttons -->
                    <div class="flex items-center gap-2 overflow-x-auto pb-2 scrollbar-none">
                        <button class="workspace-filter-btn active" data-filter="all">All Workspaces (<span id="workspaceCountDisplay">6</span>)</button>
                        <button class="workspace-filter-btn" data-filter="ecom">E-Commerce</button>
                        <button class="workspace-filter-btn" data-filter="saas">SaaS &amp; Tech</button>
                        <button class="workspace-filter-btn" data-filter="agency">Agency Pods</button>
                        <button class="workspace-filter-btn" data-filter="realestate">Real Estate</button>
                        <button class="workspace-filter-btn" data-filter="media">Media &amp; Content</button>
                    </div>
                </div>

                <!-- Workspace Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    <!-- Workspace 1: E-Commerce & DTC Brand Engine -->
                    <article class="workspace-card bg-[#ffffff] rounded-3xl border border-[#ddd8cc] p-7 flex flex-col justify-between shadow-sm relative overflow-hidden" data-category="ecom">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-amber-500/10 rounded-bl-full pointer-events-none"></div>
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="workspace-tag workspace-tag--ecom">
                                    <i data-lucide="shopping-cart" class="w-3 h-3"></i>
                                    <span>E-Commerce &amp; DTC</span>
                                </span>
                                <div class="text-right">
                                    <span class="text-2xl font-black text-[#173d34]">$79</span>
                                    <span class="text-[10px] text-[#68716d] block font-bold uppercase">One-Time</span>
                                </div>
                            </div>

                            <h3 class="text-xl font-bold text-[#173d34] mb-2">E-Commerce Scale Engine</h3>
                            <p class="text-xs text-[#68716d] leading-relaxed mb-6">
                                Autonomous workspace designed for Shopify, Amazon, and WooCommerce operators seeking higher ad ROAS and inventory turnover.
                            </p>

                            <!-- Board Specialists Included -->
                            <div class="mb-5 p-3.5 rounded-2xl bg-[#fcfaf5] border border-[#ddd8cc]/70">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-[#b7843f] block mb-2">Dedicated Board Agents</span>
                                <ul class="space-y-1.5 text-xs font-medium text-[#202725]">
                                    <li class="flex items-center gap-1.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                                        <span><strong>DTC CMO</strong>: Meta &amp; TikTok Ad Creative Director</span>
                                    </li>
                                    <li class="flex items-center gap-1.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                                        <span><strong>E-Com CFO</strong>: SKU margin &amp; re-order cashflow</span>
                                    </li>
                                    <li class="flex items-center gap-1.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                                        <span><strong>Chief of Staff</strong>: Supplier negotiation &amp; returns</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Built-in SQLite Schemas -->
                            <div class="space-y-2 mb-6 text-xs text-[#68716d]">
                                <div class="flex items-center gap-2">
                                    <i data-lucide="database" class="w-3.5 h-3.5 text-[#173d34]"></i>
                                    <span>Pre-built tables: <code>skus</code>, <code>ad_campaigns</code>, <code>supplier_logs</code></span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i data-lucide="sliders" class="w-3.5 h-3.5 text-[#173d34]"></i>
                                    <span>Includes 14 ROAS &amp; copywriting prompt prompts</span>
                                </div>
                            </div>
                        </div>

                        <button class="open-order-btn w-full py-3 rounded-xl bg-[#173d34] hover:bg-[#285c4e] text-[#fcfaf5] text-xs font-extrabold transition-all shadow-md flex items-center justify-center gap-2 active:scale-95" data-plan="E-Commerce Scale Engine Workspace" data-price="$79">
                            <span>Deploy E-Com Workspace</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </article>

                    <!-- Workspace 2: SaaS & Tech Startup Suite -->
                    <article class="workspace-card bg-[#ffffff] rounded-3xl border border-[#ddd8cc] p-7 flex flex-col justify-between shadow-sm relative overflow-hidden" data-category="saas">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-blue-500/10 rounded-bl-full pointer-events-none"></div>
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="workspace-tag workspace-tag--saas">
                                    <i data-lucide="code-2" class="w-3 h-3"></i>
                                    <span>SaaS &amp; Tech</span>
                                </span>
                                <div class="text-right">
                                    <span class="text-2xl font-black text-[#173d34]">$99</span>
                                    <span class="text-[10px] text-[#68716d] block font-bold uppercase">One-Time</span>
                                </div>
                            </div>

                            <h3 class="text-xl font-bold text-[#173d34] mb-2">SaaS Founder Command Center</h3>
                            <p class="text-xs text-[#68716d] leading-relaxed mb-6">
                                Full software product development cockpit for micro-SaaS builders, CTOs, and technical solo-founders shipping fast.
                            </p>

                            <!-- Board Specialists Included -->
                            <div class="mb-5 p-3.5 rounded-2xl bg-[#fcfaf5] border border-[#ddd8cc]/70">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-[#b7843f] block mb-2">Dedicated Board Agents</span>
                                <ul class="space-y-1.5 text-xs font-medium text-[#202725]">
                                    <li class="flex items-center gap-1.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                                        <span><strong>AI CTO</strong>: Architecture reviews, tech debt &amp; PR review</span>
                                    </li>
                                    <li class="flex items-center gap-1.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                                        <span><strong>PLG CMO</strong>: Product Hunt launch &amp; programmatic SEO</span>
                                    </li>
                                    <li class="flex items-center gap-1.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                                        <span><strong>SaaS CFO</strong>: MRR churn, LTV/CAC &amp; runway alerts</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Built-in SQLite Schemas -->
                            <div class="space-y-2 mb-6 text-xs text-[#68716d]">
                                <div class="flex items-center gap-2">
                                    <i data-lucide="database" class="w-3.5 h-3.5 text-[#173d34]"></i>
                                    <span>Pre-built tables: <code>sprints</code>, <code>bug_backlog</code>, <code>api_docs</code></span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i data-lucide="git-branch" class="w-3.5 h-3.5 text-[#173d34]"></i>
                                    <span>Sprint Kanban with automatic feature prioritization</span>
                                </div>
                            </div>
                        </div>

                        <button class="open-order-btn w-full py-3 rounded-xl bg-[#173d34] hover:bg-[#285c4e] text-[#fcfaf5] text-xs font-extrabold transition-all shadow-md flex items-center justify-center gap-2 active:scale-95" data-plan="SaaS Founder Command Center Workspace" data-price="$99">
                            <span>Deploy SaaS Workspace</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </article>

                    <!-- Workspace 3: Digital Agency Client Pod -->
                    <article class="workspace-card bg-[#ffffff] rounded-3xl border border-[#ddd8cc] p-7 flex flex-col justify-between shadow-sm relative overflow-hidden" data-category="agency">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-emerald-500/10 rounded-bl-full pointer-events-none"></div>
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="workspace-tag workspace-tag--agency">
                                    <i data-lucide="briefcase" class="w-3 h-3"></i>
                                    <span>Agency Client Pod</span>
                                </span>
                                <div class="text-right">
                                    <span class="text-2xl font-black text-[#173d34]">$119</span>
                                    <span class="text-[10px] text-[#68716d] block font-bold uppercase">One-Time</span>
                                </div>
                            </div>

                            <h3 class="text-xl font-bold text-[#173d34] mb-2">Agency Client Delivery Pod</h3>
                            <p class="text-xs text-[#68716d] leading-relaxed mb-6">
                                Built for marketing agencies, software consultancies, and growth studios needing compartmentalized client vaults.
                            </p>

                            <!-- Board Specialists Included -->
                            <div class="mb-5 p-3.5 rounded-2xl bg-[#fcfaf5] border border-[#ddd8cc]/70">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-[#b7843f] block mb-2">Dedicated Board Agents</span>
                                <ul class="space-y-1.5 text-xs font-medium text-[#202725]">
                                    <li class="flex items-center gap-1.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                                        <span><strong>Client Account Lead</strong>: Scope &amp; milestone tracker</span>
                                    </li>
                                    <li class="flex items-center gap-1.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                                        <span><strong>Creative Director</strong>: Campaign copy, pitch deck review</span>
                                    </li>
                                    <li class="flex items-center gap-1.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                                        <span><strong>Finance Controller</strong>: Retainer hours &amp; billing summaries</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Built-in SQLite Schemas -->
                            <div class="space-y-2 mb-6 text-xs text-[#68716d]">
                                <div class="flex items-center gap-2">
                                    <i data-lucide="database" class="w-3.5 h-3.5 text-[#173d34]"></i>
                                    <span>Pre-built tables: <code>client_briefs</code>, <code>deliverables</code>, <code>invoices</code></span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i data-lucide="file-check" class="w-3.5 h-3.5 text-[#173d34]"></i>
                                    <span>Automated weekly client report generation engine</span>
                                </div>
                            </div>
                        </div>

                        <button class="open-order-btn w-full py-3 rounded-xl bg-[#173d34] hover:bg-[#285c4e] text-[#fcfaf5] text-xs font-extrabold transition-all shadow-md flex items-center justify-center gap-2 active:scale-95" data-plan="Agency Client Delivery Pod Workspace" data-price="$119">
                            <span>Deploy Agency Pod</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </article>

                    <!-- Workspace 4: Real Estate & Property Investor -->
                    <article class="workspace-card bg-[#ffffff] rounded-3xl border border-[#ddd8cc] p-7 flex flex-col justify-between shadow-sm relative overflow-hidden" data-category="realestate">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-purple-500/10 rounded-bl-full pointer-events-none"></div>
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="workspace-tag workspace-tag--realestate">
                                    <i data-lucide="building-2" class="w-3 h-3"></i>
                                    <span>Real Estate</span>
                                </span>
                                <div class="text-right">
                                    <span class="text-2xl font-black text-[#173d34]">$89</span>
                                    <span class="text-[10px] text-[#68716d] block font-bold uppercase">One-Time</span>
                                </div>
                            </div>

                            <h3 class="text-xl font-bold text-[#173d34] mb-2">Real Estate Deal Underwriter</h3>
                            <p class="text-xs text-[#68716d] leading-relaxed mb-6">
                                Specialized workspace for property investors, syndicators, and realtors assessing cap rates, cash-on-cash returns, and leases.
                            </p>

                            <!-- Board Specialists Included -->
                            <div class="mb-5 p-3.5 rounded-2xl bg-[#fcfaf5] border border-[#ddd8cc]/70">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-[#b7843f] block mb-2">Dedicated Board Agents</span>
                                <ul class="space-y-1.5 text-xs font-medium text-[#202725]">
                                    <li class="flex items-center gap-1.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                                        <span><strong>Underwriting CFO</strong>: NOI, cap rate &amp; debt service coverage</span>
                                    </li>
                                    <li class="flex items-center gap-1.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                                        <span><strong>Zoning &amp; Market Analyst</strong>: Suburb trends &amp; tenant demand</span>
                                    </li>
                                    <li class="flex items-center gap-1.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                                        <span><strong>Property Operations Lead</strong>: Contractor &amp; lease renewals</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Built-in SQLite Schemas -->
                            <div class="space-y-2 mb-6 text-xs text-[#68716d]">
                                <div class="flex items-center gap-2">
                                    <i data-lucide="database" class="w-3.5 h-3.5 text-[#173d34]"></i>
                                    <span>Pre-built tables: <code>properties</code>, <code>cashflows</code>, <code>contractors</code></span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i data-lucide="calculator" class="w-3.5 h-3.5 text-[#173d34]"></i>
                                    <span>Instant ROI formula models for BRRRR &amp; fix-and-flips</span>
                                </div>
                            </div>
                        </div>

                        <button class="open-order-btn w-full py-3 rounded-xl bg-[#173d34] hover:bg-[#285c4e] text-[#fcfaf5] text-xs font-extrabold transition-all shadow-md flex items-center justify-center gap-2 active:scale-95" data-plan="Real Estate Deal Underwriter Workspace" data-price="$89">
                            <span>Deploy Real Estate Workspace</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </article>

                    <!-- Workspace 5: Content Creation & Media Studio -->
                    <article class="workspace-card bg-[#ffffff] rounded-3xl border border-[#ddd8cc] p-7 flex flex-col justify-between shadow-sm relative overflow-hidden" data-category="media">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-pink-500/10 rounded-bl-full pointer-events-none"></div>
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="workspace-tag workspace-tag--media">
                                    <i data-lucide="video" class="w-3 h-3"></i>
                                    <span>Media &amp; Studio</span>
                                </span>
                                <div class="text-right">
                                    <span class="text-2xl font-black text-[#173d34]">$69</span>
                                    <span class="text-[10px] text-[#68716d] block font-bold uppercase">One-Time</span>
                                </div>
                            </div>

                            <h3 class="text-xl font-bold text-[#173d34] mb-2">Content Studio &amp; Creator Lab</h3>
                            <p class="text-xs text-[#68716d] leading-relaxed mb-6">
                                Turn your content operations into an autonomous editorial boardroom. Viral scriptwriting, sponsorship pipeline, and schedule tracking.
                            </p>

                            <!-- Board Specialists Included -->
                            <div class="mb-5 p-3.5 rounded-2xl bg-[#fcfaf5] border border-[#ddd8cc]/70">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-[#b7843f] block mb-2">Dedicated Board Agents</span>
                                <ul class="space-y-1.5 text-xs font-medium text-[#202725]">
                                    <li class="flex items-center gap-1.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                                        <span><strong>Scriptwriter &amp; Hook Architect</strong>: YouTube/Reels retention</span>
                                    </li>
                                    <li class="flex items-center gap-1.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                                        <span><strong>Sponsorship Dealmaker</strong>: Rate cards, inbound outreach</span>
                                    </li>
                                    <li class="flex items-center gap-1.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                                        <span><strong>Editorial Director</strong>: Multi-channel calendar &amp; assets</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Built-in SQLite Schemas -->
                            <div class="space-y-2 mb-6 text-xs text-[#68716d]">
                                <div class="flex items-center gap-2">
                                    <i data-lucide="database" class="w-3.5 h-3.5 text-[#173d34]"></i>
                                    <span>Pre-built tables: <code>scripts</code>, <code>sponsors</code>, <code>content_calendar</code></span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i data-lucide="sparkles" class="w-3.5 h-3.5 text-[#173d34]"></i>
                                    <span>Built-in YouTube thumbnail &amp; title A/B brainstorm prompt engine</span>
                                </div>
                            </div>
                        </div>

                        <button class="open-order-btn w-full py-3 rounded-xl bg-[#173d34] hover:bg-[#285c4e] text-[#fcfaf5] text-xs font-extrabold transition-all shadow-md flex items-center justify-center gap-2 active:scale-95" data-plan="Content Studio & Creator Lab Workspace" data-price="$69">
                            <span>Deploy Media Workspace</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </article>

                    <!-- Workspace 6: Master Holding Company Suite -->
                    <article class="workspace-card bg-[#ffffff] rounded-3xl border-2 border-[#b7843f]/40 p-7 flex flex-col justify-between shadow-md relative overflow-hidden" data-category="agency">
                        <div class="absolute top-0 right-0 bg-[#b7843f] text-[#fcfaf5] text-[10px] font-extrabold px-3 py-1 rounded-bl-xl tracking-wider uppercase">
                            FLAGSHIP
                        </div>
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="workspace-tag workspace-tag--holding">
                                    <i data-lucide="crown" class="w-3 h-3 text-[#b7843f]"></i>
                                    <span>Holding Company</span>
                                </span>
                                <div class="text-right">
                                    <span class="text-2xl font-black text-[#173d34]">$149</span>
                                    <span class="text-[10px] text-[#68716d] block font-bold uppercase">One-Time</span>
                                </div>
                            </div>

                            <h3 class="text-xl font-bold text-[#173d34] mb-2">Master Holding Company Suite</h3>
                            <p class="text-xs text-[#68716d] leading-relaxed mb-6">
                                The ultimate umbrella workspace for serial entrepreneurs who control multiple subsidiary ventures and require cross-portfolio analytics.
                            </p>

                            <!-- Board Specialists Included -->
                            <div class="mb-5 p-3.5 rounded-2xl bg-[#fcfaf5] border border-[#ddd8cc]/70">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-[#b7843f] block mb-2">Dedicated Board Agents</span>
                                <ul class="space-y-1.5 text-xs font-medium text-[#202725]">
                                    <li class="flex items-center gap-1.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                                        <span><strong>Executive Chairman AI</strong>: Portfolio resource allocation</span>
                                    </li>
                                    <li class="flex items-center gap-1.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                                        <span><strong>Group CFO</strong>: Consolidated P&amp;L across all ventures</span>
                                    </li>
                                    <li class="flex items-center gap-1.5">
                                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i>
                                        <span><strong>M&amp;A Strategist</strong>: Due diligence &amp; valuation simulator</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Built-in SQLite Schemas -->
                            <div class="space-y-2 mb-6 text-xs text-[#68716d]">
                                <div class="flex items-center gap-2">
                                    <i data-lucide="database" class="w-3.5 h-3.5 text-[#173d34]"></i>
                                    <span>Pre-built tables: <code>subsidiaries</code>, <code>portfolio_equity</code>, <code>dividends</code></span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i data-lucide="git-merge" class="w-3.5 h-3.5 text-[#173d34]"></i>
                                    <span>Cross-workspace summary dashboard integration ready</span>
                                </div>
                            </div>
                        </div>

                        <button class="open-order-btn w-full py-3 rounded-xl bg-[#b7843f] hover:bg-[#8c5b1b] text-[#fcfaf5] text-xs font-extrabold transition-all shadow-md flex items-center justify-center gap-2 active:scale-95" data-plan="Master Holding Company Suite Workspace" data-price="$149">
                            <span>Deploy Holding Suite</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </article>

                </div>
            </div>
        </section>

        <!-- Capacity License Packs Section -->
        <section id="packs" class="py-16 sm:py-24 border-b border-[#ddd8cc]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-[#173d34]/10 text-[#173d34] border border-[#173d34]/20 mb-3">
                        <i data-lucide="layers" class="w-3.5 h-3.5 text-[#b7843f]"></i>
                        <span>EXPAND YOUR RUXT AI INSTANCE</span>
                    </span>
                    <h2 class="text-3xl sm:text-5xl font-extrabold text-[#173d34] tracking-tight">
                        Workspace Capacity Packs
                    </h2>
                    <p class="text-base text-[#68716d] mt-3">
                        Already have RuXt AI or setting up a fresh install? Choose how many isolated venture workspaces you need. All packs include lifetime license ownership.
                    </p>
                </div>

                <!-- 3 Capacity Tiers -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <!-- Pack 1: Single Workspace Add-On -->
                    <div class="bg-[#ffffff] rounded-3xl border border-[#ddd8cc] p-8 flex flex-col justify-between shadow-sm hover:shadow-md transition-all">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-bold text-[#173d34]">Single Venture Slot</h3>
                                <span class="text-[10px] font-bold bg-[#173d34]/10 text-[#173d34] px-2.5 py-1 rounded-full uppercase">Add-On</span>
                            </div>
                            <p class="text-xs text-[#68716d] mb-6">
                                Ideal for adding one dedicated new company, client silo, or confidential project to your existing instance.
                            </p>
                            <div class="mb-6">
                                <span class="text-3xl sm:text-4xl font-black text-[#173d34]">$49</span>
                                <span class="text-xs font-bold text-[#68716d]">/ lifetime single license</span>
                            </div>

                            <ul class="space-y-3 text-xs text-[#202725] mb-8">
                                <li class="flex items-center gap-2">
                                    <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                                    <span>+1 Isolated SQLite Database Silo</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                                    <span>Independent Board Persona Configuration</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                                    <span>Dedicated Sprint Kanban &amp; Memory Vault</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                                    <span>Instant JSON Workspace Export/Import</span>
                                </li>
                                <li class="flex items-center gap-2 text-[#9ca3af]">
                                    <i data-lucide="minus" class="w-4 h-4 flex-shrink-0"></i>
                                    <span class="line-through">Commercial Resale Rights</span>
                                </li>
                            </ul>
                        </div>

                        <button class="open-order-btn w-full py-3 rounded-full border border-[#173d34] text-[#173d34] hover:bg-[#173d34] hover:text-[#fcfaf5] text-xs font-bold transition-all shadow-sm" data-plan="Single Venture Slot Pack" data-price="$49">
                            Get Single Slot ($49)
                        </button>
                    </div>

                    <!-- Pack 2: Venture Growth 5-Pack (Featured) -->
                    <div class="bg-[#ffffff] rounded-3xl border-2 border-[#173d34] p-8 flex flex-col justify-between shadow-xl relative overflow-hidden transform md:-translate-y-2">
                        <div class="absolute top-0 right-0 bg-[#173d34] text-[#ffd580] text-[10px] font-black px-4 py-1.5 rounded-bl-xl tracking-wider uppercase flex items-center gap-1">
                            <i data-lucide="sparkles" class="w-3 h-3"></i>
                            <span>POPULAR · SAVE $116</span>
                        </div>
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-bold text-[#173d34]">Venture Growth 5-Pack</h3>
                                <span class="text-[10px] font-bold bg-[#b7843f]/20 text-[#b7843f] px-2.5 py-1 rounded-full uppercase">Best Value</span>
                            </div>
                            <p class="text-xs text-[#68716d] mb-6">
                                Perfect for serial entrepreneurs, boutique agencies, and founders running multiple revenue streams.
                            </p>
                            <div class="mb-6">
                                <span class="text-3xl sm:text-4xl font-black text-[#173d34]">$129</span>
                                <span class="text-xs font-bold text-[#68716d]">/ lifetime pack ($25.80/workspace)</span>
                            </div>

                            <ul class="space-y-3 text-xs text-[#202725] mb-8 font-medium">
                                <li class="flex items-center gap-2">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                                    <span><strong>5 Isolated SQLite Database Silos</strong></span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                                    <span><strong>Any 2 Pre-Built Niche Workspaces Included</strong></span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                                    <span>Cross-Venture Fast Switcher Bar</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                                    <span>Priority Concierge Email Deployment Setup</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                                    <span>Lifetime RuXt Core Engine Updates</span>
                                </li>
                            </ul>
                        </div>

                        <button class="open-order-btn btn-shimmer w-full py-3.5 rounded-full bg-[#173d34] hover:bg-[#285c4e] text-[#fcfaf5] text-xs font-extrabold transition-all shadow-lg active:scale-95 flex items-center justify-center gap-2" data-plan="Venture Growth 5-Pack" data-price="$129">
                            <span>Get Growth 5-Pack ($129)</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </div>

                    <!-- Pack 3: Enterprise Unlimited Suite -->
                    <div class="bg-[#ffffff] rounded-3xl border border-[#ddd8cc] p-8 flex flex-col justify-between shadow-sm hover:shadow-md transition-all">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-bold text-[#173d34]">Enterprise Unlimited</h3>
                                <span class="text-[10px] font-bold bg-[#b7843f]/10 text-[#b7843f] px-2.5 py-1 rounded-full uppercase">Unrestricted</span>
                            </div>
                            <p class="text-xs text-[#68716d] mb-6">
                                For large agencies, holding company directors, and consultants building white-label client installations.
                            </p>
                            <div class="mb-6">
                                <span class="text-3xl sm:text-4xl font-black text-[#173d34]">$299</span>
                                <span class="text-xs font-bold text-[#68716d]">/ lifetime unlimited license</span>
                            </div>

                            <ul class="space-y-3 text-xs text-[#202725] mb-8">
                                <li class="flex items-center gap-2">
                                    <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                                    <span><strong>Unlimited Venture Workspaces</strong></span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                                    <span><strong>All 6 Niche Workspaces Included</strong></span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                                    <span>Commercial Resale &amp; Client Deploy Rights</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                                    <span>1-on-1 Private Installation &amp; Custom Prompt Tuning</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                                    <span>Direct WhatsApp VIP Engineer Support</span>
                                </li>
                            </ul>
                        </div>

                        <button class="open-order-btn w-full py-3 rounded-full border border-[#173d34] text-[#173d34] hover:bg-[#173d34] hover:text-[#fcfaf5] text-xs font-bold transition-all shadow-sm" data-plan="Enterprise Unlimited Suite" data-price="$299">
                            Get Enterprise Unlimited ($299)
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Interactive ROI & Cost Calculator -->
        <section id="roi-calculator" class="py-16 sm:py-24 bg-[#173d34] text-[#fcfaf5] relative overflow-hidden">
            <div class="hero-glow top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-25"></div>
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-[#fcfaf5]/10 text-[#ffd580] border border-[#ffd580]/20 mb-3">
                        <i data-lucide="calculator" class="w-3.5 h-3.5"></i>
                        <span>INTERACTIVE COST COMPARISON</span>
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">
                        See What You Save vs. Cloud AI SaaS
                    </h2>
                    <p class="text-xs sm:text-sm text-[#fcfaf5]/80 mt-2">
                        Recurring cloud subscriptions (ChatGPT Team, Notion AI, Linear/Monday) bleed cash every month per venture. RuXt AI is one single purchase with zero monthly rent.
                    </p>
                </div>

                <!-- Calculator Container Card -->
                <div class="bg-[#0f2620]/90 backdrop-blur-xl border border-[#799a87]/30 rounded-3xl p-6 sm:p-10 shadow-2xl">
                    <div class="space-y-6">
                        <!-- Slider Control -->
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <label for="workspaceCountSlider" class="text-xs sm:text-sm font-bold text-[#fcfaf5]">
                                    How many separate ventures / businesses / clients do you manage?
                                </label>
                                <span class="px-3.5 py-1 rounded-xl bg-[#b7843f] text-[#fcfaf5] text-sm font-extrabold" id="sliderWorkspaceNum">3</span>
                            </div>
                            <input type="range" id="workspaceCountSlider" min="1" max="15" value="3" class="roi-slider-track">
                            <div class="flex justify-between text-[10px] text-[#799a87] mt-1 font-mono">
                                <span>1 Venture</span>
                                <span>5 Ventures</span>
                                <span>10 Ventures</span>
                                <span>15+ Ventures</span>
                            </div>
                        </div>

                        <!-- Results Breakdown -->
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 pt-6 border-t border-[#799a87]/20 text-center">
                            <div class="p-4 rounded-2xl bg-[#173d34]/60 border border-[#799a87]/20">
                                <span class="text-[10px] font-bold text-[#799a87] uppercase tracking-wider block mb-1">Traditional SaaS / Month</span>
                                <span id="monthlySaasCost" class="text-xl sm:text-2xl font-black text-rose-300">$237/mo</span>
                            </div>
                            <div class="p-4 rounded-2xl bg-[#173d34]/60 border border-[#799a87]/20">
                                <span class="text-[10px] font-bold text-[#799a87] uppercase tracking-wider block mb-1">Traditional SaaS / Year</span>
                                <span id="yearlySaasCost" class="text-xl sm:text-2xl font-black text-rose-300">$2,844/yr</span>
                            </div>
                            <div class="p-4 rounded-2xl bg-[#173d34]/60 border border-[#799a87]/20">
                                <span class="text-[10px] font-bold text-[#ffd580] uppercase tracking-wider block mb-1">RuXt AI Lifetime Cost</span>
                                <span id="ruxtLifetimeCost" class="text-xl sm:text-2xl font-black text-emerald-300">$129 (Lifetime)</span>
                            </div>
                            <div class="p-4 rounded-2xl bg-[#b7843f]/20 border border-[#b7843f]/40">
                                <span class="text-[10px] font-bold text-[#ffd580] uppercase tracking-wider block mb-1">3-Year Cash Saved</span>
                                <span id="threeYearSavings" class="text-xl sm:text-2xl font-black text-[#ffd580]">$8,403</span>
                            </div>
                        </div>

                        <div class="text-center pt-2">
                            <button class="open-order-btn px-8 py-3 rounded-full bg-[#ffd580] hover:bg-[#ffd580]/90 text-[#0f2620] text-xs font-extrabold shadow-lg transition-all active:scale-95 inline-flex items-center gap-2" data-plan="Venture Growth 5-Pack" data-price="$129">
                                <span>Lock In Lifetime Savings Now</span>
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Isolation Architecture Deep Dive -->
        <section id="architecture" class="py-16 sm:py-24 border-b border-[#ddd8cc]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-[#173d34]/10 text-[#173d34] border border-[#173d34]/20 mb-3">
                        <i data-lucide="shield" class="w-3.5 h-3.5 text-emerald-600"></i>
                        <span>TECHNICAL UNDERPINNINGS</span>
                    </span>
                    <h2 class="text-3xl sm:text-5xl font-extrabold text-[#173d34] tracking-tight">
                        Zero Data Leakage Architecture
                    </h2>
                    <p class="text-base text-[#68716d] mt-3">
                        How RuXt AI guarantees that client secrets, financial ledgers, and proprietary trade strategies never mix.
                    </p>
                </div>

                <!-- 4 Architecture Pillars -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Pillar 1 -->
                    <div class="bg-[#ffffff] rounded-2xl border border-[#ddd8cc] p-6 shadow-sm">
                        <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center mb-4">
                            <i data-lucide="database" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-base font-bold text-[#173d34] mb-2">Discrete SQLite Files</h3>
                        <p class="text-xs text-[#68716d] leading-relaxed">
                            Each workspace maintains its own standalone <code>.sqlite</code> file stored securely on your local disk. No shared relational foreign keys.
                        </p>
                    </div>

                    <!-- Pillar 2 -->
                    <div class="bg-[#ffffff] rounded-2xl border border-[#ddd8cc] p-6 shadow-sm">
                        <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-800 flex items-center justify-center mb-4">
                            <i data-lucide="cpu" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-base font-bold text-[#173d34] mb-2">Strict Context Silos</h3>
                        <p class="text-xs text-[#68716d] leading-relaxed">
                            AI prompts and vector memories are scoped strictly to the active workspace. Company A's documents can never appear in Company B's suggestions.
                        </p>
                    </div>

                    <!-- Pillar 3 -->
                    <div class="bg-[#ffffff] rounded-2xl border border-[#ddd8cc] p-6 shadow-sm">
                        <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center mb-4">
                            <i data-lucide="zap" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-base font-bold text-[#173d34] mb-2">&lt; 50ms Hot-Switching</h3>
                        <p class="text-xs text-[#68716d] leading-relaxed">
                            Switch between an e-commerce brand and a SaaS project with one click. Memory buffers disconnect and reconnect instantly without restarting.
                        </p>
                    </div>

                    <!-- Pillar 4 -->
                    <div class="bg-[#ffffff] rounded-2xl border border-[#ddd8cc] p-6 shadow-sm">
                        <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-800 flex items-center justify-center mb-4">
                            <i data-lucide="file-archive" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-base font-bold text-[#173d34] mb-2">1-Click Air-Gapped Backups</h3>
                        <p class="text-xs text-[#68716d] leading-relaxed">
                            Export any workspace as a self-contained ZIP archive. Move between computers, restore snapshots, or archive closed clients with total simplicity.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bespoke Custom Engineering Banner -->
        <section class="py-14 bg-[#f5f2e9] border-b border-[#ddd8cc]">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-[#ffffff] rounded-3xl border border-[#ddd8cc] p-8 sm:p-10 shadow-sm flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="space-y-3 max-w-xl">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-[#b7843f] bg-[#b7843f]/10 px-3 py-1 rounded-full inline-block">
                            CUSTOM WORKSPACE ENGINEERING
                        </span>
                        <h3 class="text-2xl sm:text-3xl font-extrabold text-[#173d34]">
                            Need a Tailored AI Boardroom for Your Exact Workflow?
                        </h3>
                        <p class="text-xs sm:text-sm text-[#68716d] leading-relaxed">
                            Our core development team builds bespoke workspace bundles with custom SQLite schemas, API connectors to your internal ERP/CRM, and proprietary board specialists.
                        </p>
                    </div>
                    <button class="open-order-btn px-6 py-3.5 rounded-2xl bg-[#173d34] hover:bg-[#285c4e] text-[#fcfaf5] text-xs font-extrabold shadow-md transition-all flex-shrink-0 flex items-center gap-2" data-plan="Custom Bespoke Workspace Engineering" data-price="Custom Quote">
                        <i data-lucide="wrench" class="w-4 h-4 text-[#ffd580]"></i>
                        <span>Request Custom Setup</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section id="faq" class="py-16 sm:py-24">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-[#173d34]/10 text-[#173d34] border border-[#173d34]/20 mb-3">
                        <i data-lucide="help-circle" class="w-3.5 h-3.5 text-[#b7843f]"></i>
                        <span>QUESTIONS &amp; ANSWERS</span>
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-[#173d34] tracking-tight">
                        Workspace Licensing &amp; Deployment FAQ
                    </h2>
                </div>

                <div class="space-y-4">
                    <!-- Q1 -->
                    <div class="faq-item bg-[#ffffff] rounded-2xl border border-[#ddd8cc] p-6 shadow-sm cursor-pointer">
                        <div class="flex items-center justify-between">
                            <h3 class="text-sm sm:text-base font-bold text-[#173d34]">What exactly is a "Venture Workspace" in RuXt AI?</h3>
                            <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-[#68716d] transition-transform"></i>
                        </div>
                        <div class="faq-content text-xs sm:text-sm text-[#68716d] pt-3 leading-relaxed">
                            A Venture Workspace is a self-contained operational environment with its own dedicated SQLite database, board agent memories, sprint Kanban boards, and task history. If you run multiple businesses (e.g., an e-commerce brand and a software agency), each workspace keeps their data completely segregated with zero crossover.
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="faq-item bg-[#ffffff] rounded-2xl border border-[#ddd8cc] p-6 shadow-sm cursor-pointer">
                        <div class="flex items-center justify-between">
                            <h3 class="text-sm sm:text-base font-bold text-[#173d34]">Are there any recurring monthly charges after purchase?</h3>
                            <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-[#68716d] transition-transform"></i>
                        </div>
                        <div class="faq-content text-xs sm:text-sm text-[#68716d] pt-3 leading-relaxed">
                            No. All workspace packages and capacity packs are 100% lifetime licenses. You pay once and own the software files. You run them on your own computer or server with zero SaaS subscriptions.
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="faq-item bg-[#ffffff] rounded-2xl border border-[#ddd8cc] p-6 shadow-sm cursor-pointer">
                        <div class="flex items-center justify-between">
                            <h3 class="text-sm sm:text-base font-bold text-[#173d34]">Can I move workspaces between different computers?</h3>
                            <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-[#68716d] transition-transform"></i>
                        </div>
                        <div class="faq-content text-xs sm:text-sm text-[#68716d] pt-3 leading-relaxed">
                            Yes. Every workspace is completely portable. You can simply copy the corresponding SQLite file or use the built-in one-click JSON export/import tool to transfer it between your laptop, desktop, or private VPS.
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="faq-item bg-[#ffffff] rounded-2xl border border-[#ddd8cc] p-6 shadow-sm cursor-pointer">
                        <div class="flex items-center justify-between">
                            <h3 class="text-sm sm:text-base font-bold text-[#173d34]">How do I receive the workspace files after ordering?</h3>
                            <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-[#68716d] transition-transform"></i>
                        </div>
                        <div class="faq-content text-xs sm:text-sm text-[#68716d] pt-3 leading-relaxed">
                            Upon submitting your order inquiry, our concierge team immediately generates your private license keys and sends the download repository links and setup instructions directly to your email within 15 minutes.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-[#173d34] text-[#fcfaf5] pt-14 pb-10 border-t border-[#285c4e]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 pb-8 border-b border-[#285c4e]/60">
                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-xl bg-[#fcfaf5] text-[#173d34] flex items-center justify-center font-black">
                        R
                    </div>
                    <div>
                        <span class="text-base font-extrabold text-[#fcfaf5]">RuXt AI Systems</span>
                        <p class="text-[11px] text-[#799a87]">Private Autonomous AI Boardroom &amp; Chief of Staff</p>
                    </div>
                </div>

                <div class="flex items-center space-x-6 text-xs text-[#799a87]">
                    <a href="index.php" class="hover:text-[#fcfaf5] transition-colors">Home</a>
                    <a href="index.php#boardroom" class="hover:text-[#fcfaf5] transition-colors">War Room Simulator</a>
                    <a href="#marketplace" class="hover:text-[#fcfaf5] transition-colors">Workspaces</a>
                    <a href="signin.php" class="hover:text-[#fcfaf5] transition-colors">Sign In</a>
                </div>
            </div>

            <div class="pt-6 flex flex-col sm:flex-row items-center justify-between text-[11px] text-[#799a87] gap-3">
                <p>&copy; 2026 RuXt AI Systems. All rights reserved. 100% Private, Local-First Architecture.</p>
                <p>Designed for self-hosted SQLite deployments.</p>
            </div>
        </div>
    </footer>

    <!-- Universal Order & Deployment Modal -->
    <div id="orderModal" class="hidden fixed inset-0 z-50 bg-[#0f2620]/75 backdrop-blur-md flex items-center justify-center p-4">
        <div class="bg-[#ffffff] rounded-3xl border border-[#ddd8cc] max-w-lg w-full p-6 sm:p-8 shadow-2xl relative overflow-hidden animate-in fade-in zoom-in duration-200">
            <!-- Modal Header -->
            <div class="flex items-center justify-between pb-4 border-b border-[#ddd8cc]">
                <div>
                    <span class="text-[10px] font-bold uppercase tracking-wider text-[#b7843f]">Workspace Deployment Request</span>
                    <h4 id="orderPlanName" class="text-xl font-bold text-[#173d34]">Venture Growth 5-Pack</h4>
                    <p id="orderPlanPrice" class="text-xs font-semibold text-emerald-700 mt-0.5">$129 · Lifetime Private License</p>
                </div>
                <button id="closeOrderModalBtn" aria-label="Close Order Modal" class="text-[#68716d] hover:text-[#173d34] p-2 rounded-xl hover:bg-[#f5f2e9] transition-colors">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <!-- Order Submission Form -->
            <form id="orderForm" class="mt-5 space-y-4">
                <input type="hidden" id="selectedPlanInput" name="plan" value="Venture Growth 5-Pack">

                <div>
                    <label for="buyerName" class="block text-xs font-bold text-[#173d34] mb-1">Your Full Name *</label>
                    <input type="text" id="buyerName" required placeholder="e.g. Alex Morgan" class="w-full px-3.5 py-2.5 rounded-xl border border-[#ddd8cc] text-xs focus:ring-2 focus:ring-[#173d34] focus:outline-none bg-[#fcfaf5]">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label for="buyerEmail" class="block text-xs font-bold text-[#173d34] mb-1">Email Address *</label>
                        <input type="email" id="buyerEmail" required placeholder="alex@example.com" class="w-full px-3.5 py-2.5 rounded-xl border border-[#ddd8cc] text-xs focus:ring-2 focus:ring-[#173d34] focus:outline-none bg-[#fcfaf5]">
                    </div>
                    <div>
                        <label for="buyerPhone" class="block text-xs font-bold text-[#173d34] mb-1">WhatsApp / Phone (Optional)</label>
                        <input type="tel" id="buyerPhone" placeholder="+1 (555) 019-2834" class="w-full px-3.5 py-2.5 rounded-xl border border-[#ddd8cc] text-xs focus:ring-2 focus:ring-[#173d34] focus:outline-none bg-[#fcfaf5]">
                    </div>
                </div>

                <div>
                    <label for="buyerNote" class="block text-xs font-bold text-[#173d34] mb-1">Venture Details / Special Requirements (Optional)</label>
                    <textarea id="buyerNote" rows="2" placeholder="Tell us which ventures you run or any custom setup instructions..." class="w-full px-3.5 py-2 rounded-xl border border-[#ddd8cc] text-xs focus:ring-2 focus:ring-[#173d34] focus:outline-none bg-[#fcfaf5]"></textarea>
                </div>

                <div id="orderStatusMsg" class="hidden"></div>

                <button type="submit" id="submitOrderBtn" class="w-full py-3 bg-[#173d34] hover:bg-[#285c4e] text-[#fcfaf5] font-bold text-xs rounded-xl transition-all shadow-md flex items-center justify-center gap-1.5 active:scale-95">
                    <span>Submit Workspace Deployment Request</span>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/main.js"></script>
    <script>
        // Initialize Lucide icons
        if (window.lucide) {
            window.lucide.createIcons();
        }
    </script>
</body>
</html>
