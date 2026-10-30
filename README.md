# RuXt AI · Autonomous AI Executive Board & Private Chief of Staff

[![Deploy static content to Pages](https://github.com/Sanka43/Private_assistance_web/actions/workflows/deploy.yml/badge.svg)](https://github.com/Sanka43/Private_assistance_web/actions/workflows/deploy.yml)
[![GitHub Pages](https://img.shields.io/badge/Live%20Demo-GitHub%20Pages-2ea44f?style=flat&logo=github)](https://sanka43.github.io/Private_assistance_web/)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)

> **Deploy an autonomous AI Executive Board & Chief of Staff on your private machine.**  
> 100% private SQLite database, zero SaaS subscription fees, conversational voice AI ready.

---

## 🌐 Live Demo & Website
- **GitHub Pages Live Site**: [https://sanka43.github.io/Private_assistance_web/](https://sanka43.github.io/Private_assistance_web/)
- **Repository**: [https://github.com/Sanka43/Private_assistance_web](https://github.com/Sanka43/Private_assistance_web)

---

## ⚡ Highlights

- **Autonomous Digital Company HQ**: Standalone interactive headquarters (`hq.html` / `hq.php`) to command your own company with dedicated AI team members.
- **Executive War Room**: 6 AI specialists (Chief of Staff, CTO, CMO, CFO, COO, Legal Counsel) that coordinate, debate, and deliberate together in real time.
- **Interactive Org Chart**: Founder & CEO command hierarchy with real-time cognitive metrics and 1-on-1 private consultation channels.
- **Autonomous Sprint Kanban**: Task pipeline where boardroom resolutions automatically convert into actionable deliverables awaiting founder sign-off.
- **100% Private & Local-First**: Encrypted SQLite database stored on your hardware. Zero third-party telemetry, zero cloud lock-in.
- **Conversational Voice AI**: Sub-second speech recognition (STT) and natural audio executive speech synthesis (TTS).
- **Single-File Portable Architecture**: Clean HTML5/Tailwind/ES6 frontend + lightweight PHP/SQLite backend.

---

## 📂 Project Structure

```text
Private_assistance_web/
├── download.html              # Windows native binaries (.exe) download portal (GitHub Pages)
├── download.php               # Windows native binaries (.exe) download portal (Local PHP/XAMPP)
├── hq.html                    # Autonomous Digital Company Headquarters (GitHub Pages)
├── hq.php                     # Autonomous Digital Company Headquarters (Local PHP/XAMPP)
├── index.html                 # Main static enterprise landing page (GitHub Pages ready)
├── index.php                  # Local XAMPP/Apache production entry point
├── workspaces.html            # Multi-venture AI workspaces marketplace (GitHub Pages)
├── workspaces.php             # Multi-venture AI workspaces marketplace (Local PHP)
├── signin.html                # Standalone workspace orientation & sign-in gateway
├── signin.php                 # PHP workspace orientation & sign-in gateway
├── downloads/                 # Native Windows standalone executables & archives
│   ├── RuXt-Desktop.exe       # Native GUI & System Tray Companion (48 KB)
│   ├── ruxt-agent.exe         # Headless CLI background agent (45 KB)
│   ├── RuXt-Windows-Suite.zip # Complete suite package with README (43 KB)
│   └── README.txt             # Binary quickstart instructions
├── .htaccess                  # Apache server security headers & routing
├── robots.txt                 # SEO crawler rules
├── sitemap.xml                # SEO sitemap index
├── .gitignore                 # Git ignore rules for SQLite databases and logs
├── .github/
│   └── workflows/
│       └── deploy.yml         # Automated GitHub Pages CI/CD workflow
├── assets/
│   ├── css/
│   │   └── custom.css         # Glassmorphism, org chart lines, speech bubbles & animations
│   ├── js/
│   │   ├── hq.js              # Multi-agent deliberation engine, org chart, kanban & company state
│   │   └── main.js            # Interactive calculators, simulator, modals, and direct inquiries
│   ├── icons/                 # Brand SVG logos and PWA icons
│   └── video/                 # Introduction & onboarding video assets (intro.mp4)
└── api/
    ├── company.php            # Digital company state & sprint tasks SQLite persistence
    ├── inquiry.php            # Secure lead capture endpoint (PHP + SQLite)
    └── data/                  # SQLite storage directory (.gitkeep)
```

### 🔐 Sign In & Introduction Video Configuration
The "Sign In" button triggers an introductory video experience before auto-routing to your tool domain. Configure it in `assets/js/main.js`:
```javascript
const SIGN_IN_CONFIG = {
    targetUrl: 'https://app.ruxt.org/',   // Tool domain destination
    delaySeconds: 10,                     // Orientation video delay before auto-routing
    videoSrc: 'assets/video/intro.mp4'
};
```

---

## 🚀 How to Run Locally

### Option 1: Using XAMPP / Apache
1. Clone or place this repository into your XAMPP web root:
   ```bash
   cd c:\xampp\htdocs\
   git clone https://github.com/Sanka43/Private_assistance_web.git
   ```
2. Start Apache via the XAMPP Control Panel.
3. Open your browser and navigate to:
   ```text
   http://localhost/Private_assistance_web/
   ```

### Option 2: Using PHP Built-in Server
```bash
cd Private_assistance_web
php -S localhost:8000
```
Then visit `http://localhost:8000`.

---

## ⚙️ Enabling GitHub Pages

1. Go to your repository settings on GitHub:
   `https://github.com/Sanka43/Private_assistance_web/settings/pages`
2. Under **Build and deployment**:
   - **Source**: Select **GitHub Actions** (or select **Deploy from a branch** -> `main` / `root`).
3. Your page will be live at:
   `https://sanka43.github.io/Private_assistance_web/`

---

## 📄 License
This project is licensed under the MIT License.
