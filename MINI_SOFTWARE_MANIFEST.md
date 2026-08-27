# BrandZo ERP — Mini Software Package Manifest

## 1. Package Metadata
- **Creation Date**: `2026-08-25`
- **Source Project Name**: `BrandZo_ERP 2`
- **Mini Package Name**: `BrandZo_ERP_Mini_Software`
- **Archive Name**: `BrandZo_ERP_Mini_Software.zip`
- **Primary ZIP Location**: `/Users/macbook/Downloads/BrandZo_ERP_Mini_Software.zip`
- **Total Files**: `14,879`
- **Approximate Uncompressed Size**: `~154 MB`
- **Approximate ZIP Archive Size**: `~34 MB`

---

## 2. Included Core & Addon Modules
- **Core ERP Modules**: Dashboard, Leads, Deals, Clients, Projects, Invoices, Estimates, Credit Notes, Payments, Contacts, Documents Vault, Notes Timeline, Helpdesk Tickets, Orders, HRMS (Employees, Attendance, Leaves), Finance, Calendar, Event Management, Messages, Settings, Roles & Permissions.
- **21 Addon Modules (`Modules/`)**: Recruit, Payroll, Purchase, Asset, Zoom, EInvoice, Biolinks, Biometric, CyberSecurity, Performance, ProjectRoadmap, Letter, Sms, ServerManager, Subdomain, UniversalBundle, Webhooks, QRCode, LanguagePack, RestAPI, Affiliate.

---

## 3. Included Directories & Root Files
- `app/` (Controllers, Models, DataTables, Actions, Events, Observers, Services)
- `config/` (45+ application configuration files)
- `database/migrations/` (915 migration files) & `database/seeders/`
- `resources/views/` (1,200+ Blade views including `clients/show.blade.php`)
- `resources/js/` & `resources/css/`
- `routes/` (`web.php`, `api.php`, `web-public.php`, `web-settings.php`, `channels.php`)
- `Modules/` (All 21 Addon Sub-systems)
- `public/` (Required static assets & asset structure)
- `composer.json`, `package.json`, `webpack.mix.js`, `artisan`
- `.env.example` (Sanitized environment template)
- `README.md` (Setup instructions)
- `SOFTWARE_MODULE_INVENTORY.md`
- `SOFTWARE_FILE_STRUCTURE.md`
- `SOFTWARE_TECH_STACK.md`
- `MINI_SOFTWARE_MANIFEST.md`

---

## 4. Intentionally Excluded Folders & Secrets
- `vendor/` (PHP Composer Vendor Directory — Install via `composer install`)
- `node_modules/` (NPM Node Modules Directory — Install via `npm install`)
- `.git/` (Git Repository History)
- `.env` (Production Environment Credentials & API Secrets)
- `storage/logs/*.log` (Runtime Execution Logs)
- `storage/framework/cache/*` (Application Caches)

---

## 5. System Requirements & Local Setup
- **PHP Version**: `^8.1` (PHP 8.1 - 8.3 compatible)
- **Laravel Framework**: `Laravel 10.x`
- **Node/NPM**: Node.js `^16.x` / `^18.x` & NPM
- **Database Engine**: MySQL / MariaDB (Database: `u579956562_branzo`)

### Setup Command Sequence
```bash
cd /Users/macbook/Downloads/BrandZo_ERP_Mini_Software
cp .env.example .env
composer install
npm install
npm run dev
php artisan key:generate
php artisan migrate --seed
php artisan optimize:clear
php artisan serve --port=8000
```
