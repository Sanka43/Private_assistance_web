# RuXt AI · Autonomous AI Executive Board & Private Chief of Staff

[![Deploy static content to Pages](https://github.com/Sanka43/Private_assistance_web/actions/workflows/deploy.yml/badge.svg)](https://github.com/Sanka43/Private_assistance_web/actions/workflows/deploy.yml)
[![GitHub Pages](https://img.shields.io/badge/Live%20Demo-GitHub%20Pages-2ea44f?style=flat&logo=github)](https://sanka43.github.io/Private_assistance_web/)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)

> **Deploy an autonomous AI Executive Board & Chief of Staff on your private machine.**  
> 100% private SQLite database, zero SaaS subscription fees, Sinhala & English voice ready.

---

## 🌐 Live Demo & Website
- **GitHub Pages Live Site**: [https://sanka43.github.io/Private_assistance_web/](https://sanka43.github.io/Private_assistance_web/)
- **Repository**: [https://github.com/Sanka43/Private_assistance_web](https://github.com/Sanka43/Private_assistance_web)

---

## ⚡ Highlights

- **Executive War Room**: 4 AI roles (Chief of Staff, CMO, CTO, CFO) that coordinate and deliberate together.
- **100% Private & Local-First**: SQLite database stored on your hardware. Zero third-party telemetry.
- **Bi-Lingual Voice Support**: Fluent Sinhala and English voice command recognition and audio playback.
- **Single-File Portable Architecture**: Clean HTML5/Tailwind/ES6 frontend + lightweight PHP/SQLite lead collection.
- **Interactive Calculator & Live Simulator**: Real-time ROI and operational savings estimator.

---

## 📂 Project Structure

```text
Private_assistance_web/
├── index.html                 # Main static landing page (GitHub Pages ready)
├── index.php                  # Local XAMPP/Apache production entry point
├── .htaccess                  # Apache server security headers & routing
├── robots.txt                 # SEO crawler rules
├── sitemap.xml                # SEO sitemap index
├── .gitignore                 # Git ignore rules for SQLite databases and logs
├── .github/
│   └── workflows/
│       └── deploy.yml         # Automated GitHub Pages CI/CD workflow
├── assets/
│   ├── css/
│   │   └── custom.css         # Glassmorphism, animations, and custom styling
│   ├── js/
│   │   └── main.js            # Interactive calculators, simulator, modals, WhatsApp integration
│   └── icons/                 # Brand SVG logos and PWA icons
└── api/
    ├── inquiry.php            # Secure lead capture endpoint (PHP + SQLite)
    └── data/                  # SQLite storage directory (.gitkeep)
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
