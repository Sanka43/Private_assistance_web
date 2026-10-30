/**
 * RuXt Autonomous Digital Company Headquarters (HQ) Engine
 * Multi-Agent Deliberation, Executive Org Chart, Autonomous Kanban & Company Simulator
 */

// ============================================================================
// 1. Initial State & Executive Profiles
// ============================================================================

const DEFAULT_COMPANY_STATE = {
    name: "NovaScale AI Systems Ltd.",
    industry: "Autonomous Enterprise Software",
    foundedDate: "2026-01-15",
    mrr: 68400,
    valuation: 3200000,
    monthlyBurn: 12500,
    runwayMonths: 24,
    aiTeamCount: 6,
    activeTasksCount: 14,
    systemUptime: "99.98%",
    localMemoryDb: "SQLite Vault v4.2 (Encrypted)",
    voiceEnabled: false
};

const EXECUTIVE_TEAM = [
    {
        id: "ruxt",
        name: "RuXt",
        title: "Chief of Staff & Autonomous Orchestrator",
        roleCategory: "lead",
        badge: "Chief of Staff",
        avatar: "https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=160&auto=format&fit=crop&q=80",
        cognitiveLoad: 48,
        status: "Orchestrating Departments",
        voicePitch: 1.0,
        voiceRate: 1.05,
        responsibilities: [
            "Department coordination and cross-functional alignment",
            "Boardroom consensus synthesis and founder briefings",
            "Autonomous task allocation to executive pipelines",
            "Daily operational priority triage"
        ],
        recentLog: "Synchronized Q4 sprint deliverables between CTO Elena and CMO Marcus. All milestones on schedule."
    },
    {
        id: "elena",
        name: "Elena Rostova",
        title: "Chief Technology Officer (CTO)",
        roleCategory: "tech",
        badge: "Engineering Lead",
        avatar: "https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=160&auto=format&fit=crop&q=80",
        cognitiveLoad: 76,
        status: "Auditing SQLite Schema & APIs",
        voicePitch: 1.15,
        voiceRate: 1.0,
        responsibilities: [
            "Local-first architecture and private SQLite data vault",
            "Zero-latency multi-agent communication protocols",
            "Automated unit testing, security auditing & CI/CD",
            "Hardware performance optimization"
        ],
        recentLog: "Benchmarked local SQLite transactions at 0.4ms latency. Offline privacy boundary 100% verified."
    },
    {
        id: "marcus",
        name: "Marcus Vance",
        title: "Chief Marketing Officer (CMO)",
        roleCategory: "growth",
        badge: "Growth & Brand",
        avatar: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=160&auto=format&fit=crop&q=80",
        cognitiveLoad: 64,
        status: "Engineering Viral Funnel Copy",
        voicePitch: 0.95,
        voiceRate: 1.1,
        responsibilities: [
            "Go-to-Market positioning against recurring SaaS monopolies",
            "High-converting executive landing copy & case studies",
            "Organic distribution loops and developer community reach",
            "Customer acquisition cost (CAC) reduction"
        ],
        recentLog: "A/B test on lifetime private licensing copy indicates a 42% surge in founder conversion intent."
    },
    {
        id: "julian",
        name: "Julian Drake",
        title: "Chief Financial Officer (CFO)",
        roleCategory: "finance",
        badge: "Capital & Modeling",
        avatar: "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=160&auto=format&fit=crop&q=80",
        cognitiveLoad: 38,
        status: "Simulating Cash Flow & Cap Table",
        voicePitch: 0.85,
        voiceRate: 0.95,
        responsibilities: [
            "Zero-payroll economics and venture capital efficiency",
            "Lifetime vs recurring subscription financial modeling",
            "Runway projection and burn rate minimization",
            "Capital expenditure auditing"
        ],
        recentLog: "Gross profit margin maintained at 89.4%. Cash runway extended to 24+ months at current trajectory."
    },
    {
        id: "maya",
        name: "Maya Lin",
        title: "Chief Operating Officer (COO)",
        roleCategory: "ops",
        badge: "Execution & SOPs",
        avatar: "https://images.unsplash.com/photo-1580489944761-15a19d654956?w=160&auto=format&fit=crop&q=80",
        cognitiveLoad: 52,
        status: "Streamlining Task Pipeline",
        voicePitch: 1.2,
        voiceRate: 1.05,
        responsibilities: [
            "Standard Operating Procedures (SOPs) automation",
            "Cross-department task velocity and blocker resolution",
            "Customer concierge pipeline automation",
            "Operational risk management"
        ],
        recentLog: "Reduced sprint turnaround cycle time from 4 days to 6 hours through automated executive handoffs."
    },
    {
        id: "david",
        name: "David Sterling",
        title: "Head of Legal & Compliance",
        roleCategory: "legal",
        badge: "Governance & IP",
        avatar: "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=160&auto=format&fit=crop&q=80",
        cognitiveLoad: 31,
        status: "Reviewing Local License Terms",
        voicePitch: 0.9,
        voiceRate: 0.92,
        responsibilities: [
            "Private IP ownership and self-hosted license compliance",
            "GDPR / CCPA / HIPAA zero-cloud data compliance",
            "Enterprise procurement contracts",
            "Regulatory risk auditing"
        ],
        recentLog: "Self-hosted hardware deployment model verified 100% compliant with strict enterprise data privacy."
    }
];

const INITIAL_TASKS = [
    {
        id: "task-101",
        title: "Migrate client database to encrypted SQLite vault",
        department: "Engineering",
        assignedTo: "elena",
        priority: "High",
        status: "completed",
        eta: "Completed",
        deliverable: "Schema migration verified with 0 schema drift."
    },
    {
        id: "task-102",
        title: "Deploy Commercial Go-to-Market Landing Page",
        department: "Marketing",
        assignedTo: "marcus",
        priority: "High",
        status: "review",
        eta: "Pending Sign-Off",
        deliverable: "High-conversion landing page copy with interactive simulator integration."
    },
    {
        id: "task-103",
        title: "Runway & Lifetime Unit Economics Model",
        department: "Finance",
        assignedTo: "julian",
        priority: "Medium",
        status: "completed",
        eta: "Completed",
        deliverable: "3-year cash flow forecast showing 89% gross margins."
    },
    {
        id: "task-104",
        title: "Implement Multi-Agent Voice Speech Synthesis (TTS/STT)",
        department: "Engineering",
        assignedTo: "elena",
        priority: "High",
        status: "in_progress",
        eta: "2h remaining",
        deliverable: "Web Speech API integration with distinct voice personas for each executive."
    },
    {
        id: "task-105",
        title: "Automate Cross-Department Executive Handoff SOPs",
        department: "Operations",
        assignedTo: "maya",
        priority: "Medium",
        status: "in_progress",
        eta: "4h remaining",
        deliverable: "Automated trigger system moving boardroom resolutions into Kanban."
    },
    {
        id: "task-106",
        title: "Audit Enterprise Customer License Agreements",
        department: "Legal",
        assignedTo: "david",
        priority: "Low",
        status: "backlog",
        eta: "Scheduled Q4",
        deliverable: "Perpetual offline software license documentation."
    }
];

const DELIBERATION_SCENARIOS = {
    "q4-pricing": {
        topic: "Launch Enterprise Lifetime Private License & Retain 88% Margins",
        starter: "Founder: 'Board, our inbound leads want a perpetual enterprise license. How do we price and package this without compromising long-term company cash flow?'",
        dialogue: [
            {
                speaker: "ruxt",
                text: "Convening the Executive Board. Agenda: Lifetime Private Enterprise License packaging. Julian, present the unit economics first, followed by Elena on infrastructure isolation."
            },
            {
                speaker: "julian",
                text: "From a capital perspective, pricing at $299 for a perpetual 5-workspace license yields an instant payback period of 0 days with 0 cloud server cost. Our cash runway increases by 8 months on only 40 enterprise sales."
            },
            {
                speaker: "elena",
                text: "Technically, because our architecture runs on the client's private machine with local SQLite, our marginal hosting cost per user is literally $0.00. We don't incur recurring AWS or GPU server overhead."
            },
            {
                speaker: "marcus",
                text: "Marketing agrees 100%. SaaS fatigue is at an all-time peak. A headline emphasizing 'Own your AI company infrastructure forever — zero monthly subscriptions' will convert at 3x the industry benchmark."
            },
            {
                speaker: "maya",
                text: "Operationally, I will configure an automated concierge delivery pipeline: instantly generating download bundles and license credentials upon order receipt."
            },
            {
                speaker: "ruxt",
                text: "Consensus reached. Directive approved: 1) Elena packages the self-hosted installer bundle. 2) Marcus deploys the new lifetime offer copy. 3) Julian configures the revenue tracker. Adding 3 tasks to the Sprint pipeline now."
            }
        ],
        tasksCreated: [
            { title: "Package Self-Hosted Offline Bundle", assignedTo: "elena", department: "Engineering", priority: "High" },
            { title: "Deploy Lifetime License Sales Copy", assignedTo: "marcus", department: "Marketing", priority: "High" },
            { title: "Configure Revenue & Margin Tracker", assignedTo: "julian", department: "Finance", priority: "Medium" }
        ]
    },
    "zero-churn": {
        topic: "Automate Customer Onboarding to Reduce Churn Below 1%",
        starter: "Founder: 'We need seamless customer onboarding so clients experience the AI board's power within 60 seconds of install.'",
        dialogue: [
            {
                speaker: "ruxt",
                text: "Executive session initiated. Objective: Zero-friction client activation. Maya, walk us through the onboarding bottlenecks."
            },
            {
                speaker: "maya",
                text: "Currently, first-time users need guidance on how to convene their first boardroom deliberation. If we implement a 10-second interactive orientation video and automated preset templates, activation will surpass 94%."
            },
            {
                speaker: "elena",
                text: "I can build a pre-seeded SQLite database with 3 sample ventures and pre-configured executive memories. The client opens the dashboard and their entire company is already initialized."
            },
            {
                speaker: "marcus",
                text: "Brilliant. I'll script an interactive 'Found Your Digital Company' welcome tour guiding them through their first voice briefing."
            },
            {
                speaker: "ruxt",
                text: "Executive alignment confirmed. Maya leads the activation SOP, Elena pre-seeds the database vault, and Marcus polishes the orientation experience."
            }
        ],
        tasksCreated: [
            { title: "Build Pre-Seeded SQLite Company Template", assignedTo: "elena", department: "Engineering", priority: "High" },
            { title: "Script 60-Second Founder Orientation Tour", assignedTo: "marcus", department: "Marketing", priority: "Medium" }
        ]
    },
    "privacy-audit": {
        topic: "Guarantee 100% Offline Air-Gapped Data Privacy",
        starter: "Founder: 'Enterprise clients are asking for proof that their proprietary prompts and company finances never touch external cloud servers.'",
        dialogue: [
            {
                speaker: "ruxt",
                text: "Boardroom assembled. Agenda: Private offline architecture certification. David, outline the regulatory standards, followed by Elena's architectural proof."
            },
            {
                speaker: "david",
                text: "Under strict enterprise standards, data leaving the client perimeter violates confidentiality agreements. We must provide transparent proof that all SQLite records and embeddings reside purely on local storage."
            },
            {
                speaker: "elena",
                text: "Our entire stack runs on PHP/HTML5/SQLite with zero telemetry phone-home pings. I will implement a live 'Data Vault Isolation Monitor' in the HQ dashboard showing real-time network zero-outbound telemetry."
            },
            {
                speaker: "marcus",
                text: "We will publish an 'Enterprise Privacy Whitepaper' highlighting our air-gapped guarantees to win enterprise defense and healthcare accounts."
            },
            {
                speaker: "ruxt",
                text: "Action plan adopted. Elena implements the Privacy Telemetry monitor; David drafts the Enterprise Compliance Certificate."
            }
        ],
        tasksCreated: [
            { title: "Implement Live Data Vault Isolation Monitor", assignedTo: "elena", department: "Engineering", priority: "High" },
            { title: "Publish Enterprise Privacy Whitepaper", assignedTo: "david", department: "Legal", priority: "Medium" }
        ]
    }
};

// ============================================================================
// 2. Application Engine & State Controller
// ============================================================================

class RuxtCompanyHQ {
    constructor() {
        this.state = this.loadState();
        this.tasks = this.loadTasks();
        this.isDeliberating = false;
        this.deliberationTimeouts = [];
        this.currentView = "war-room"; // war-room, org-chart, kanban, departments, vault
        this.selectedExecutive = null;

        this.init();
    }

    loadState() {
        try {
            const saved = localStorage.getItem("ruxt_company_state");
            if (saved) return { ...DEFAULT_COMPANY_STATE, ...JSON.parse(saved) };
        } catch (e) {
            console.warn("Could not load saved state from localStorage:", e);
        }
        return { ...DEFAULT_COMPANY_STATE };
    }

    saveState() {
        try {
            localStorage.setItem("ruxt_company_state", JSON.stringify(this.state));
        } catch (e) {
            console.warn("Could not save state to localStorage:", e);
        }
    }

    loadTasks() {
        try {
            const saved = localStorage.getItem("ruxt_company_tasks");
            if (saved) return JSON.parse(saved);
        } catch (e) {
            console.warn("Could not load tasks from localStorage:", e);
        }
        return [...INITIAL_TASKS];
    }

    saveTasks() {
        try {
            localStorage.setItem("ruxt_company_tasks", JSON.stringify(this.tasks));
        } catch (e) {
            console.warn("Could not save tasks to localStorage:", e);
        }
    }

    init() {
        this.bindNavigation();
        this.renderCompanyPulse();
        this.renderOrgChart();
        this.renderKanban();
        this.bindKanbanMobileFilter();
        this.renderDepartments();
        this.bindWarRoom();
        this.bindModals();
        this.bindQuickActions();

        if (window.lucide) {
            window.lucide.createIcons();
        }
    }

    // ========================================================================
    // Navigation & View Switching
    // ========================================================================

    bindNavigation() {
        const navBtns = document.querySelectorAll(".hq-nav-btn");
        const views = document.querySelectorAll(".hq-view-panel");

        navBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                const targetView = btn.getAttribute("data-view");
                this.switchView(targetView);
            });
        });
    }

    switchView(viewName) {
        this.currentView = viewName;

        const navBtns = document.querySelectorAll(".hq-nav-btn");
        const views = document.querySelectorAll(".hq-view-panel");

        navBtns.forEach(b => {
            if (b.getAttribute("data-view") === viewName) {
                b.classList.add("bg-[#173d34]", "text-[#fcfaf5]", "shadow-sm");
                b.classList.remove("text-[#68716d]", "hover:text-[#173d34]", "hover:bg-[#f0ede4]");
            } else {
                b.classList.remove("bg-[#173d34]", "text-[#fcfaf5]", "shadow-sm");
                b.classList.add("text-[#68716d]", "hover:text-[#173d34]", "hover:bg-[#f0ede4]");
            }
        });

        views.forEach(v => {
            if (v.id === `view-${viewName}`) {
                v.classList.remove("hidden");
                v.classList.add("fade-in");
            } else {
                v.classList.add("hidden");
            }
        });

        if (window.lucide) window.lucide.createIcons();
    }

    // ========================================================================
    // Company Pulse Header
    // ========================================================================

    renderCompanyPulse() {
        const nameEl = document.getElementById("hqCompanyName");
        const industryEl = document.getElementById("hqCompanyIndustry");
        const mrrEl = document.getElementById("hqCompanyMrr");
        const valEl = document.getElementById("hqCompanyValuation");
        const runwayEl = document.getElementById("hqCompanyRunway");
        const staffEl = document.getElementById("hqCompanyStaff");
        const memoryEl = document.getElementById("hqCompanyMemory");
        const voiceToggleBtn = document.getElementById("toggleVoiceBtn");

        if (nameEl) nameEl.textContent = this.state.name;
        if (industryEl) industryEl.textContent = this.state.industry;
        if (mrrEl) mrrEl.textContent = `$${this.state.mrr.toLocaleString()}/mo`;
        if (valEl) valEl.textContent = `$${(this.state.valuation / 1000000).toFixed(1)}M`;
        if (runwayEl) runwayEl.textContent = `${this.state.runwayMonths} Mo`;
        if (staffEl) staffEl.textContent = `${this.state.aiTeamCount} Executives Active`;
        if (memoryEl) memoryEl.textContent = this.state.localMemoryDb;

        if (voiceToggleBtn) {
            this.updateVoiceToggleUI(voiceToggleBtn);
            voiceToggleBtn.onclick = () => {
                this.state.voiceEnabled = !this.state.voiceEnabled;
                this.saveState();
                this.updateVoiceToggleUI(voiceToggleBtn);
            };
        }
    }

    updateVoiceToggleUI(btn) {
        if (this.state.voiceEnabled) {
            btn.classList.add("bg-amber-100", "text-amber-900", "border-amber-300");
            btn.classList.remove("bg-[#f5f2e9]", "text-[#68716d]");
            btn.innerHTML = `<i data-lucide="volume-2" class="w-3.5 h-3.5 text-amber-700"></i><span class="text-xs font-bold">Voice: ON</span>`;
        } else {
            btn.classList.remove("bg-amber-100", "text-amber-900", "border-amber-300");
            btn.classList.add("bg-[#f5f2e9]", "text-[#68716d]");
            btn.innerHTML = `<i data-lucide="volume-x" class="w-3.5 h-3.5"></i><span class="text-xs font-bold">Voice: OFF</span>`;
        }
        if (window.lucide) window.lucide.createIcons();
    }

    // ========================================================================
    // Interactive Org Chart & Executive Profiles
    // ========================================================================

    renderOrgChart() {
        const container = document.getElementById("orgChartContainer");
        if (!container) return;

        let html = `
            <!-- Top Tier: Founder / CEO (The User) -->
            <div class="flex flex-col items-center">
                <div class="p-4 sm:p-5 rounded-2xl bg-gradient-to-br from-[#173d34] to-[#0f2620] text-[#fcfaf5] border border-[#285c4e] shadow-lg max-w-xs sm:max-w-sm w-full text-center relative">
                    <span class="absolute -top-3 left-1/2 -translate-x-1/2 px-3 py-0.5 rounded-full text-[10px] font-extrabold uppercase tracking-wider bg-[#b7843f] text-[#fcfaf5] shadow-sm whitespace-nowrap">
                        Executive Chairman &amp; Founder
                    </span>
                    <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-[#fcfaf5]/10 border-2 border-[#b7843f] mx-auto flex items-center justify-center text-lg sm:text-xl font-bold text-[#ffd580] mb-2">
                        👑
                    </div>
                    <h3 class="text-sm sm:text-base font-bold text-[#fcfaf5]">You (Founder &amp; CEO)</h3>
                    <p class="text-[11px] sm:text-xs text-[#a7f3d0] mt-0.5">${this.state.name}</p>
                    <div class="mt-3 pt-2.5 sm:pt-3 border-t border-[#285c4e]/50 flex items-center justify-around text-[10px] sm:text-[11px] text-[#fcfaf5]/80">
                        <span>Reports: <strong>1 (RuXt)</strong></span>
                        <span>Authority: <strong>Ultimate Veto</strong></span>
                    </div>
                </div>

                <!-- Connector Line to RuXt -->
                <div class="org-connector-vertical h-6 sm:h-8"></div>

                <!-- Tier 2: RuXt Chief of Staff -->
                <div class="org-card p-3.5 sm:p-4 rounded-2xl bg-[#ffffff] border-2 border-[#173d34] shadow-md max-w-xs sm:max-w-sm w-full text-center relative cursor-pointer" onclick="window.ruxtHq.openExecutiveDossier('ruxt')">
                    <span class="absolute -top-2.5 left-1/2 -translate-x-1/2 px-2.5 py-0.5 rounded-full text-[9px] font-bold uppercase tracking-wider badge-role-lead whitespace-nowrap">
                        Orchestration &amp; Direct Briefing
                    </span>
                    <div class="flex items-center space-x-3 text-left">
                        <img src="${EXECUTIVE_TEAM[0].avatar}" alt="RuXt" class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl object-cover border border-[#173d34] shadow-sm">
                        <div class="flex-1 min-w-0">
                            <h4 class="text-xs sm:text-sm font-bold text-[#173d34] flex items-center justify-between">
                                <span class="truncate">RuXt (Chief of Staff)</span>
                                <span class="w-2 h-2 rounded-full bg-emerald-500 live-pulse flex-shrink-0 ml-1"></span>
                            </h4>
                            <p class="text-[10px] sm:text-[11px] text-[#68716d] truncate">Direct Autonomous Orchestrator</p>
                            <div class="flex items-center gap-2 mt-1.5 text-[10px] text-[#202725]">
                                <span class="bg-[#f5f2e9] px-2 py-0.5 rounded font-mono">Load: ${EXECUTIVE_TEAM[0].cognitiveLoad}%</span>
                                <span class="text-emerald-700 font-semibold">Active</span>
                            </div>
                        </div>
                    </div>
                    <button class="w-full mt-3 py-1.5 rounded-xl bg-[#173d34] hover:bg-[#285c4e] text-[#fcfaf5] text-xs font-bold flex items-center justify-center gap-1.5 transition-colors touch-target">
                        <i data-lucide="message-square" class="w-3.5 h-3.5"></i> Convene 1-on-1 Consultation
                    </button>
                </div>

                <!-- Horizontal Connector Line to Department Heads -->
                <div class="org-connector-vertical h-6 sm:h-8"></div>
                <div class="w-full max-w-4xl org-connector-horizontal hidden md:block"></div>

                <!-- Tier 3: Department Executives (CTO, CMO, CFO, COO, Legal) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3 sm:gap-4 w-full mt-3 sm:mt-4">
        `;

        // Render remaining executives
        EXECUTIVE_TEAM.slice(1).forEach(exec => {
            const roleBadgeClass = `badge-role-${exec.roleCategory}`;
            html += `
                <div class="org-card p-4 rounded-2xl bg-[#ffffff] border border-[#ddd8cc] shadow-sm hover:border-[#173d34] transition-all cursor-pointer flex flex-col justify-between" onclick="window.ruxtHq.openExecutiveDossier('${exec.id}')">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[9px] font-bold px-2 py-0.5 rounded-md ${roleBadgeClass}">
                                ${exec.badge}
                            </span>
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        </div>
                        <div class="text-center">
                            <img src="${exec.avatar}" alt="${exec.name}" class="w-14 h-14 rounded-2xl object-cover mx-auto border border-[#ddd8cc] shadow-inner mb-2">
                            <h5 class="text-xs font-bold text-[#173d34]">${exec.name}</h5>
                            <p class="text-[10px] text-[#68716d] leading-tight mt-0.5">${exec.title}</p>
                        </div>
                        <div class="mt-3 pt-2.5 border-t border-[#f0ede4] text-[10px] space-y-1 text-[#68716d]">
                            <div class="flex justify-between">
                                <span>Cognitive Load:</span>
                                <span class="font-mono font-bold text-[#173d34]">${exec.cognitiveLoad}%</span>
                            </div>
                            <div class="truncate text-[9px] text-[#202725] font-medium" title="${exec.status}">
                                🟢 ${exec.status}
                            </div>
                        </div>
                    </div>
                    <button class="w-full mt-3 py-1.5 rounded-xl bg-[#f5f2e9] hover:bg-[#173d34] hover:text-[#fcfaf5] text-[#173d34] text-[11px] font-bold transition-all flex items-center justify-center gap-1">
                        <span>Dossier</span>
                        <i data-lucide="chevron-right" class="w-3 h-3"></i>
                    </button>
                </div>
            `;
        });

        html += `
                </div>
            </div>
        `;

        container.innerHTML = html;
        if (window.lucide) window.lucide.createIcons();
    }

    openExecutiveDossier(execId) {
        const exec = EXECUTIVE_TEAM.find(e => e.id === execId);
        if (!exec) return;

        this.selectedExecutive = exec;
        const modal = document.getElementById("executiveDossierModal");
        if (!modal) return;

        document.getElementById("dossierAvatar").src = exec.avatar;
        document.getElementById("dossierName").textContent = exec.name;
        document.getElementById("dossierTitle").textContent = exec.title;
        document.getElementById("dossierBadge").textContent = exec.badge;
        document.getElementById("dossierStatus").textContent = `🟢 ${exec.status}`;
        document.getElementById("dossierLoad").textContent = `${exec.cognitiveLoad}%`;
        document.getElementById("dossierLog").textContent = `"${exec.recentLog}"`;

        const respList = document.getElementById("dossierResponsibilities");
        respList.innerHTML = exec.responsibilities.map(r => `<li class="flex items-start gap-1.5"><i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-emerald-600 mt-0.5 flex-shrink-0"></i><span>${r}</span></li>`).join("");

        modal.classList.remove("hidden");
        if (window.lucide) window.lucide.createIcons();
    }

    // ========================================================================
    // Live Autonomous War Room (Deliberation Engine)
    // ========================================================================

    bindWarRoom() {
        const scenarioSelector = document.getElementById("warRoomScenario");
        const conveneBtn = document.getElementById("conveneBoardroomBtn");
        const customDirectiveInput = document.getElementById("customDirectiveInput");
        const sendDirectiveBtn = document.getElementById("sendDirectiveBtn");

        if (conveneBtn) {
            conveneBtn.addEventListener("click", () => {
                const scenarioKey = scenarioSelector ? scenarioSelector.value : "q4-pricing";
                this.runDeliberation(scenarioKey);
            });
        }

        if (sendDirectiveBtn && customDirectiveInput) {
            sendDirectiveBtn.addEventListener("click", () => {
                const text = customDirectiveInput.value.trim();
                if (text) {
                    this.runCustomDirective(text);
                    customDirectiveInput.value = "";
                }
            });
            customDirectiveInput.addEventListener("keydown", (e) => {
                if (e.key === "Enter") {
                    sendDirectiveBtn.click();
                }
            });
        }
    }

    runDeliberation(scenarioKey) {
        if (this.isDeliberating) return;

        const scenario = DELIBERATION_SCENARIOS[scenarioKey];
        if (!scenario) return;

        const transcriptContainer = document.getElementById("boardroomTranscript");
        if (!transcriptContainer) return;

        this.isDeliberating = true;
        this.clearDeliberationTimeouts();

        // Header update
        const statusBadge = document.getElementById("warRoomStatusBadge");
        if (statusBadge) {
            statusBadge.innerHTML = `<span class="w-2 h-2 rounded-full bg-amber-500 live-pulse"></span> Deliberation in Session`;
            statusBadge.className = "px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-900 flex items-center gap-1.5";
        }

        transcriptContainer.innerHTML = `
            <div class="p-3.5 rounded-2xl bg-[#173d34]/5 border border-[#173d34]/20 text-xs font-medium text-[#173d34] flex items-center justify-between">
                <div>
                    <span class="font-bold uppercase tracking-wider text-[10px] text-[#b7843f]">Topic on the Floor:</span>
                    <p class="font-bold text-sm mt-0.5">${scenario.topic}</p>
                </div>
                <span class="text-[10px] font-mono bg-[#ffffff] px-2.5 py-1 rounded-full border border-[#ddd8cc] text-[#68716d]">
                    5 Executives Present
                </span>
            </div>
            <div class="p-4 rounded-2xl bg-[#f5f2e9] text-xs max-w-[90%] ml-auto text-right border border-[#e8e3d9]">
                <span class="font-bold text-[#b7843f] block mb-1">Founder Executive Directive:</span>
                <p class="text-[#202725] font-medium leading-relaxed">${scenario.starter}</p>
            </div>
        `;

        let delay = 1200;

        scenario.dialogue.forEach((msg, idx) => {
            const timeout = setTimeout(() => {
                this.appendExecutiveSpeech(msg.speaker, msg.text, transcriptContainer);

                // If voice enabled, synthesize speech
                if (this.state.voiceEnabled) {
                    this.speakExecutiveLine(msg.speaker, msg.text);
                }

                // Scroll to bottom
                transcriptContainer.scrollTop = transcriptContainer.scrollHeight;

                // When last message completes
                if (idx === scenario.dialogue.length - 1) {
                    this.finishDeliberation(scenario.tasksCreated);
                }
            }, delay);

            this.deliberationTimeouts.push(timeout);
            delay += 2400; // Turn-taking delay between executives
        });
    }

    runCustomDirective(customText) {
        if (this.isDeliberating) return;

        const transcriptContainer = document.getElementById("boardroomTranscript");
        if (!transcriptContainer) return;

        this.isDeliberating = true;
        this.clearDeliberationTimeouts();

        const statusBadge = document.getElementById("warRoomStatusBadge");
        if (statusBadge) {
            statusBadge.innerHTML = `<span class="w-2 h-2 rounded-full bg-amber-500 live-pulse"></span> Deliberation in Session`;
            statusBadge.className = "px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-900 flex items-center gap-1.5";
        }

        transcriptContainer.innerHTML = `
            <div class="p-3.5 rounded-2xl bg-[#173d34]/5 border border-[#173d34]/20 text-xs font-medium text-[#173d34] flex items-center justify-between">
                <div>
                    <span class="font-bold uppercase tracking-wider text-[10px] text-[#b7843f]">Custom Founder Directive:</span>
                    <p class="font-bold text-sm mt-0.5">"${customText}"</p>
                </div>
                <span class="text-[10px] font-mono bg-[#ffffff] px-2.5 py-1 rounded-full border border-[#ddd8cc] text-[#68716d]">
                    Autonomous Deliberation
                </span>
            </div>
            <div class="p-4 rounded-2xl bg-[#f5f2e9] text-xs max-w-[90%] ml-auto text-right border border-[#e8e3d9]">
                <span class="font-bold text-[#b7843f] block mb-1">Founder (Direct Input):</span>
                <p class="text-[#202725] font-medium leading-relaxed">${customText}</p>
            </div>
        `;

        const customDialogue = [
            {
                speaker: "ruxt",
                text: `Acknowledging directive: "${customText}". Convening the board immediately. Elena, evaluate technical feasibility; Marcus and Julian, assess commercial viability.`
            },
            {
                speaker: "elena",
                text: "Reviewed the requirements against our private SQLite stack. We can architect this autonomously without adding external cloud dependencies. Development time: 3-5 days."
            },
            {
                speaker: "marcus",
                text: "From a market positioning standpoint, this reinforces our unique private AI value prop. I'll prepare a teaser campaign and documentation update."
            },
            {
                speaker: "julian",
                text: "The financial impact is favorable. Marginal implementation cost is near zero on local hardware, preserving our 24-month runway."
            },
            {
                speaker: "ruxt",
                text: "Board consensus is unanimous. Generating operational tasks for sprint execution and notifying the Founder for final review."
            }
        ];

        let delay = 1200;

        customDialogue.forEach((msg, idx) => {
            const timeout = setTimeout(() => {
                this.appendExecutiveSpeech(msg.speaker, msg.text, transcriptContainer);

                if (this.state.voiceEnabled) {
                    this.speakExecutiveLine(msg.speaker, msg.text);
                }

                transcriptContainer.scrollTop = transcriptContainer.scrollHeight;

                if (idx === customDialogue.length - 1) {
                    const generatedTasks = [
                        { title: `Execute Architecture: ${customText.substring(0, 35)}...`, assignedTo: "elena", department: "Engineering", priority: "High" },
                        { title: `Growth Campaign: ${customText.substring(0, 35)}...`, assignedTo: "marcus", department: "Marketing", priority: "Medium" }
                    ];
                    this.finishDeliberation(generatedTasks);
                }
            }, delay);

            this.deliberationTimeouts.push(timeout);
            delay += 2400;
        });
    }

    appendExecutiveSpeech(speakerId, text, container) {
        const exec = EXECUTIVE_TEAM.find(e => e.id === speakerId) || EXECUTIVE_TEAM[0];
        const bubbleClass = `speech-bubble-${speakerId}`;

        const div = document.createElement("div");
        div.className = `p-4 rounded-2xl ${bubbleClass} text-xs space-y-1.5 shadow-sm fade-in`;
        div.innerHTML = `
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <img src="${exec.avatar}" alt="${exec.name}" class="w-6 h-6 rounded-full object-cover border border-[#173d34]/20">
                    <span class="font-bold text-[#173d34]">${exec.name}</span>
                    <span class="text-[10px] text-[#68716d]">(${exec.title})</span>
                </div>
                <span class="text-[9px] font-mono text-[#68716d]">Deliberated Just Now</span>
            </div>
            <p class="text-[#202725] leading-relaxed pl-8">${text}</p>
        `;

        container.appendChild(div);
        if (window.lucide) window.lucide.createIcons();
    }

    finishDeliberation(newTasks = []) {
        this.isDeliberating = false;

        const statusBadge = document.getElementById("warRoomStatusBadge");
        if (statusBadge) {
            statusBadge.innerHTML = `<span class="w-2 h-2 rounded-full bg-emerald-500"></span> Deliberation Complete · Consensus Reached`;
            statusBadge.className = "px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-900 flex items-center gap-1.5";
        }

        // Add generated tasks to Kanban
        if (newTasks && newTasks.length > 0) {
            newTasks.forEach((t, i) => {
                this.tasks.unshift({
                    id: `task-gen-${Date.now()}-${i}`,
                    title: t.title,
                    department: t.department,
                    assignedTo: t.assignedTo,
                    priority: t.priority,
                    status: "in_progress",
                    eta: "1d remaining",
                    deliverable: "Generated automatically from Boardroom consensus."
                });
            });

            this.saveTasks();
            this.renderKanban();

            // Notify in transcript
            const transcriptContainer = document.getElementById("boardroomTranscript");
            if (transcriptContainer) {
                const notice = document.createElement("div");
                notice.className = "p-3 rounded-xl bg-emerald-50 text-emerald-900 border border-emerald-200 text-xs font-medium flex items-center justify-between";
                notice.innerHTML = `
                    <div class="flex items-center gap-2">
                        <i data-lucide="check-check" class="w-4 h-4 text-emerald-600"></i>
                        <span>🎉 <strong>${newTasks.length} Actionable Sprint Tasks</strong> dispatched to the Autonomous Pipeline.</span>
                    </div>
                    <button onclick="window.ruxtHq.switchView('kanban')" class="text-xs font-bold underline hover:text-emerald-700">View Kanban</button>
                `;
                transcriptContainer.appendChild(notice);
                if (window.lucide) window.lucide.createIcons();
                transcriptContainer.scrollTop = transcriptContainer.scrollHeight;
            }
        }
    }

    clearDeliberationTimeouts() {
        this.deliberationTimeouts.forEach(t => clearTimeout(t));
        this.deliberationTimeouts = [];
    }

    speakExecutiveLine(speakerId, text) {
        if (!("speechSynthesis" in window)) return;
        try {
            window.speechSynthesis.cancel();
            const utterance = new SpeechSynthesisUtterance(text);
            const exec = EXECUTIVE_TEAM.find(e => e.id === speakerId);
            if (exec) {
                utterance.pitch = exec.voicePitch;
                utterance.rate = exec.voiceRate;
            }
            window.speechSynthesis.speak(utterance);
        } catch (e) {
            console.warn("Speech synthesis error:", e);
        }
    }

    // ========================================================================
    // Autonomous Sprint Kanban Pipeline
    // ========================================================================

    renderKanban() {
        const backlogCol = document.getElementById("kanbanColBacklog");
        const progressCol = document.getElementById("kanbanColProgress");
        const reviewCol = document.getElementById("kanbanColReview");
        const doneCol = document.getElementById("kanbanColDone");

        if (!backlogCol || !progressCol || !reviewCol || !doneCol) return;

        backlogCol.innerHTML = "";
        progressCol.innerHTML = "";
        reviewCol.innerHTML = "";
        doneCol.innerHTML = "";

        const counts = { backlog: 0, in_progress: 0, review: 0, completed: 0 };

        this.tasks.forEach(task => {
            counts[task.status] = (counts[task.status] || 0) + 1;
            const exec = EXECUTIVE_TEAM.find(e => e.id === task.assignedTo) || EXECUTIVE_TEAM[0];
            const card = this.createTaskCard(task, exec);

            if (task.status === "backlog") backlogCol.appendChild(card);
            else if (task.status === "in_progress") progressCol.appendChild(card);
            else if (task.status === "review") reviewCol.appendChild(card);
            else if (task.status === "completed") doneCol.appendChild(card);
        });

        // Update column count badges (desktop & mobile)
        const countBacklog = document.getElementById("countBacklog");
        const countProgress = document.getElementById("countProgress");
        const countReview = document.getElementById("countReview");
        const countDone = document.getElementById("countDone");

        if (countBacklog) countBacklog.textContent = counts.backlog;
        if (countProgress) countProgress.textContent = counts.in_progress;
        if (countReview) countReview.textContent = counts.review;
        if (countDone) countDone.textContent = counts.completed;

        const mCountBacklog = document.getElementById("mCountBacklog");
        const mCountProgress = document.getElementById("mCountProgress");
        const mCountReview = document.getElementById("mCountReview");
        const mCountDone = document.getElementById("mCountDone");

        if (mCountBacklog) mCountBacklog.textContent = counts.backlog;
        if (mCountProgress) mCountProgress.textContent = counts.in_progress;
        if (mCountReview) mCountReview.textContent = counts.review;
        if (mCountDone) mCountDone.textContent = counts.completed;

        if (window.lucide) window.lucide.createIcons();
    }

    bindKanbanMobileFilter() {
        const filterBtns = document.querySelectorAll(".kanban-filter-btn");
        const wrappers = document.querySelectorAll(".kanban-col-wrapper");

        filterBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                const targetColId = btn.getAttribute("data-col");

                filterBtns.forEach(b => {
                    b.classList.remove("bg-[#173d34]", "text-[#fcfaf5]", "shadow-xs", "active");
                    b.classList.add("bg-[#ffffff]", "text-[#68716d]", "border", "border-[#ddd8cc]");
                });
                btn.classList.add("bg-[#173d34]", "text-[#fcfaf5]", "shadow-xs", "active");
                btn.classList.remove("bg-[#ffffff]", "text-[#68716d]", "border", "border-[#ddd8cc]");

                wrappers.forEach(wrapper => {
                    if (targetColId === "all" || wrapper.id === targetColId) {
                        wrapper.classList.remove("hidden");
                    } else {
                        wrapper.classList.add("hidden");
                    }
                });
            });
        });
    }

    createTaskCard(task, exec) {
        const card = document.createElement("div");
        card.className = "kanban-task-card p-3.5 rounded-2xl bg-[#ffffff] border border-[#ddd8cc] space-y-2.5 shadow-sm text-xs relative";

        let priorityColor = "text-amber-700 bg-amber-50 border-amber-200";
        if (task.priority === "High") priorityColor = "text-rose-700 bg-rose-50 border-rose-200";
        else if (task.priority === "Low") priorityColor = "text-emerald-700 bg-emerald-50 border-emerald-200";

        card.innerHTML = `
            <div class="flex items-center justify-between">
                <span class="text-[9px] font-bold px-2 py-0.5 rounded border ${priorityColor}">
                    ${task.priority} Priority
                </span>
                <span class="text-[10px] text-[#68716d] font-mono">${task.department}</span>
            </div>
            <h5 class="font-bold text-[#173d34] leading-snug">${task.title}</h5>
            <p class="text-[11px] text-[#68716d] line-clamp-2">${task.deliverable}</p>
            <div class="pt-2 border-t border-[#f0ede4] flex items-center justify-between text-[11px]">
                <div class="flex items-center space-x-1.5" title="Assigned to ${exec.name}">
                    <img src="${exec.avatar}" class="w-5 h-5 rounded-full object-cover border border-[#173d34]">
                    <span class="text-[#202725] font-semibold text-[10px]">${exec.name.split(" ")[0]}</span>
                </div>
                <div class="flex items-center gap-1">
                    ${this.getTaskActionButtons(task)}
                </div>
            </div>
        `;

        return card;
    }

    getTaskActionButtons(task) {
        if (task.status === "backlog") {
            return `<button onclick="window.ruxtHq.moveTask('${task.id}', 'in_progress')" class="p-1 rounded bg-[#f5f2e9] hover:bg-[#173d34] hover:text-white" title="Start Task"><i data-lucide="play" class="w-3 h-3"></i></button>`;
        } else if (task.status === "in_progress") {
            return `<button onclick="window.ruxtHq.moveTask('${task.id}', 'review')" class="p-1 rounded bg-amber-50 text-amber-800 hover:bg-amber-600 hover:text-white" title="Submit for Founder Review"><i data-lucide="send" class="w-3 h-3"></i></button>`;
        } else if (task.status === "review") {
            return `<button onclick="window.ruxtHq.moveTask('${task.id}', 'completed')" class="px-2 py-0.5 rounded bg-emerald-100 text-emerald-800 font-bold hover:bg-emerald-600 hover:text-white text-[10px]" title="Founder Sign-Off">Approve ✓</button>`;
        } else {
            return `<span class="text-[10px] text-emerald-700 font-bold flex items-center gap-0.5"><i data-lucide="check" class="w-3 h-3"></i> Shipped</span>`;
        }
    }

    moveTask(taskId, newStatus) {
        const task = this.tasks.find(t => t.id === taskId);
        if (task) {
            task.status = newStatus;
            this.saveTasks();
            this.renderKanban();
        }
    }

    // ========================================================================
    // Department Floors & Virtual Offices
    // ========================================================================

    renderDepartments() {
        const techFloor = document.getElementById("deptFloorTech");
        const growthFloor = document.getElementById("deptFloorGrowth");
        const financeFloor = document.getElementById("deptFloorFinance");
        const opsFloor = document.getElementById("deptFloorOps");

        if (techFloor) {
            techFloor.innerHTML = `
                <div class="flex items-center justify-between pb-3 border-b border-[#ddd8cc]">
                    <div class="flex items-center space-x-3">
                        <img src="${EXECUTIVE_TEAM[1].avatar}" class="w-10 h-10 rounded-xl object-cover border border-[#2563eb]">
                        <div>
                            <h4 class="text-sm font-bold text-[#173d34]">${EXECUTIVE_TEAM[1].name} · CTO</h4>
                            <p class="text-xs text-[#68716d]">Local Engineering &amp; Data Vault</p>
                        </div>
                    </div>
                    <span class="text-xs font-mono font-bold text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded-full">0 Vulnerabilities</span>
                </div>
                <div class="grid grid-cols-2 gap-3 text-xs">
                    <div class="p-3 rounded-xl bg-[#fcfaf5] border border-[#e8e3d9]">
                        <span class="text-[#68716d] text-[10px] block">Database Architecture</span>
                        <strong class="text-[#173d34]">SQLite WAL Mode (Local)</strong>
                    </div>
                    <div class="p-3 rounded-xl bg-[#fcfaf5] border border-[#e8e3d9]">
                        <span class="text-[#68716d] text-[10px] block">Average Query Latency</span>
                        <strong class="text-emerald-700 font-mono">0.38 ms</strong>
                    </div>
                </div>
                <div class="text-xs space-y-1.5">
                    <span class="font-bold text-[#173d34]">Active Technical Directives:</span>
                    <ul class="space-y-1 text-[#202725]">
                        <li class="flex items-center gap-1.5"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i> Zero-outbound telemetry air-gap enforced</li>
                        <li class="flex items-center gap-1.5"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i> Local speech STT/TTS models initialized</li>
                    </ul>
                </div>
            `;
        }

        if (growthFloor) {
            growthFloor.innerHTML = `
                <div class="flex items-center justify-between pb-3 border-b border-[#ddd8cc]">
                    <div class="flex items-center space-x-3">
                        <img src="${EXECUTIVE_TEAM[2].avatar}" class="w-10 h-10 rounded-xl object-cover border border-[#d97706]">
                        <div>
                            <h4 class="text-sm font-bold text-[#173d34]">${EXECUTIVE_TEAM[2].name} · CMO</h4>
                            <p class="text-xs text-[#68716d]">Growth Engine &amp; Distribution</p>
                        </div>
                    </div>
                    <span class="text-xs font-mono font-bold text-[#b7843f] bg-amber-50 px-2.5 py-1 rounded-full">Viral Coeff: 1.4x</span>
                </div>
                <div class="grid grid-cols-2 gap-3 text-xs">
                    <div class="p-3 rounded-xl bg-[#fcfaf5] border border-[#e8e3d9]">
                        <span class="text-[#68716d] text-[10px] block">Visitor to Trial Conversion</span>
                        <strong class="text-[#173d34]">14.8%</strong>
                    </div>
                    <div class="p-3 rounded-xl bg-[#fcfaf5] border border-[#e8e3d9]">
                        <span class="text-[#68716d] text-[10px] block">CAC (Blended)</span>
                        <strong class="text-emerald-700 font-mono">$0.00 (Organic)</strong>
                    </div>
                </div>
            `;
        }

        if (financeFloor) {
            financeFloor.innerHTML = `
                <div class="flex items-center justify-between pb-3 border-b border-[#ddd8cc]">
                    <div class="flex items-center space-x-3">
                        <img src="${EXECUTIVE_TEAM[3].avatar}" class="w-10 h-10 rounded-xl object-cover border border-[#059669]">
                        <div>
                            <h4 class="text-sm font-bold text-[#173d34]">${EXECUTIVE_TEAM[3].name} · CFO</h4>
                            <p class="text-xs text-[#68716d]">Capital &amp; Runway Intelligence</p>
                        </div>
                    </div>
                    <span class="text-xs font-mono font-bold text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded-full">Runway: 24+ Mo</span>
                </div>
                <div class="grid grid-cols-2 gap-3 text-xs">
                    <div class="p-3 rounded-xl bg-[#fcfaf5] border border-[#e8e3d9]">
                        <span class="text-[#68716d] text-[10px] block">Gross Profit Margin</span>
                        <strong class="text-emerald-700 font-mono">89.4%</strong>
                    </div>
                    <div class="p-3 rounded-xl bg-[#fcfaf5] border border-[#e8e3d9]">
                        <span class="text-[#68716d] text-[10px] block">Recurring SaaS Savings</span>
                        <strong class="text-[#173d34] font-mono">$18,400 / yr</strong>
                    </div>
                </div>
            `;
        }

        if (opsFloor) {
            opsFloor.innerHTML = `
                <div class="flex items-center justify-between pb-3 border-b border-[#ddd8cc]">
                    <div class="flex items-center space-x-3">
                        <img src="${EXECUTIVE_TEAM[4].avatar}" class="w-10 h-10 rounded-xl object-cover border border-[#7c3aed]">
                        <div>
                            <h4 class="text-sm font-bold text-[#173d34]">${EXECUTIVE_TEAM[4].name} · COO</h4>
                            <p class="text-xs text-[#68716d]">Process Automation &amp; Velocity</p>
                        </div>
                    </div>
                    <span class="text-xs font-mono font-bold text-purple-700 bg-purple-50 px-2.5 py-1 rounded-full">Automations: 28 Live</span>
                </div>
                <div class="grid grid-cols-2 gap-3 text-xs">
                    <div class="p-3 rounded-xl bg-[#fcfaf5] border border-[#e8e3d9]">
                        <span class="text-[#68716d] text-[10px] block">Task Turnaround Time</span>
                        <strong class="text-[#173d34]">5.4 Hours</strong>
                    </div>
                    <div class="p-3 rounded-xl bg-[#fcfaf5] border border-[#e8e3d9]">
                        <span class="text-[#68716d] text-[10px] block">SOP Adherence Rate</span>
                        <strong class="text-emerald-700 font-mono">99.2%</strong>
                    </div>
                </div>
            `;
        }

        if (window.lucide) window.lucide.createIcons();
    }

    // ========================================================================
    // Modals & Setup Wizard
    // ========================================================================

    bindModals() {
        // Executive Dossier Modal close
        const dossierModal = document.getElementById("executiveDossierModal");
        const closeDossierBtn = document.getElementById("closeDossierBtn");
        if (dossierModal && closeDossierBtn) {
            closeDossierBtn.addEventListener("click", () => dossierModal.classList.add("hidden"));
            dossierModal.addEventListener("click", (e) => {
                if (e.target === dossierModal) dossierModal.classList.add("hidden");
            });
        }

        // 1-on-1 Consultation Send in Dossier
        const send1on1Btn = document.getElementById("send1on1Btn");
        const input1on1 = document.getElementById("input1on1");
        const response1on1 = document.getElementById("response1on1");

        if (send1on1Btn && input1on1 && response1on1) {
            send1on1Btn.addEventListener("click", () => {
                const question = input1on1.value.trim();
                if (!question || !this.selectedExecutive) return;

                response1on1.classList.remove("hidden");
                response1on1.innerHTML = `
                    <div class="flex items-center gap-1.5 text-xs text-[#68716d] font-mono">
                        <i data-lucide="loader-2" class="w-3.5 h-3.5 animate-spin"></i>
                        <span>${this.selectedExecutive.name} is synthesizing counsel...</span>
                    </div>
                `;
                if (window.lucide) window.lucide.createIcons();

                setTimeout(() => {
                    response1on1.innerHTML = `
                        <div class="p-3 rounded-xl bg-[#173d34] text-[#fcfaf5] text-xs space-y-1">
                            <span class="text-[10px] text-[#ffd580] font-bold block">${this.selectedExecutive.name}'s Executive Counsel:</span>
                            <p class="leading-relaxed">"Regarding '${question}': Under our current ${this.state.name} strategy, I recommend prioritizing immediate execution without taking on external cloud debt. I have logged this into our private SQLite memory vault."</p>
                        </div>
                    `;
                    input1on1.value = "";
                }, 1000);
            });
        }

        // "Found Your Digital Company" Wizard
        const newCompanyBtn = document.getElementById("foundCompanyBtn");
        const companyWizardModal = document.getElementById("foundCompanyWizardModal");
        const closeWizardBtn = document.getElementById("closeWizardBtn");
        const wizardForm = document.getElementById("foundCompanyForm");

        if (newCompanyBtn && companyWizardModal) {
            newCompanyBtn.addEventListener("click", () => companyWizardModal.classList.remove("hidden"));
        }

        if (closeWizardBtn && companyWizardModal) {
            closeWizardBtn.addEventListener("click", () => companyWizardModal.classList.add("hidden"));
        }

        if (wizardForm && companyWizardModal) {
            wizardForm.addEventListener("submit", (e) => {
                e.preventDefault();
                const name = document.getElementById("newCompanyName").value.trim();
                const industry = document.getElementById("newCompanyIndustry").value.trim();

                if (name) {
                    this.state.name = name;
                    this.state.industry = industry || "Autonomous Digital Venture";
                    this.saveState();
                    this.renderCompanyPulse();
                    this.renderOrgChart();
                    companyWizardModal.classList.add("hidden");

                    alert(`🎉 Congratulations! ${name} has been incorporated into your private hardware. Your AI executive board is on standby!`);
                }
            });
        }
    }

    bindQuickActions() {
        const resetDemoBtn = document.getElementById("resetDemoStateBtn");
        if (resetDemoBtn) {
            resetDemoBtn.addEventListener("click", () => {
                if (confirm("Reset company state and tasks back to factory defaults?")) {
                    localStorage.removeItem("ruxt_company_state");
                    localStorage.removeItem("ruxt_company_tasks");
                    location.reload();
                }
            });
        }
    }
}

// Instantiate on DOM ready
document.addEventListener("DOMContentLoaded", () => {
    window.ruxtHq = new RuxtCompanyHQ();
});
