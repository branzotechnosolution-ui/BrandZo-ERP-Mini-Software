# BrandZo ERP — Comprehensive Software File Structure Map

```
BrandZo_ERP 2/
├── app/
│   ├── Actions/                    # Reusable Business Logic Actions (Fortify, Auth)
│   ├── Console/                    # Artisan Commands & Scheduled Jobs
│   ├── DataTables/                 # 76 Yajra DataTable Classes for Grid Views
│   ├── Enums/                      # Application Domain Enums (Status, Types)
│   ├── Events/                     # 95 Domain Event Classes
│   ├── Exceptions/                 # Custom Exception Handlers
│   ├── Exports/                    # Excel/CSV Export Classes (Maatwebsite)
│   ├── Helper/                     # Global Helper Functions (start.php, reply.php)
│   ├── Http/
│   │   ├── Controllers/            # 405 Core Controllers (Dashboard, CRM, HR, Finance)
│   │   ├── Middleware/             # Auth, Role, Tenant & Permission Middleware
│   │   └── Requests/               # Form Validation Request Classes
│   ├── Imports/                    # Excel Data Ingestion Handlers
│   ├── Jobs/                       # Queueable Background Processing Jobs
│   ├── Listeners/                  # 87 Event Listener Handlers
│   ├── Mail/                       # Mailables & Transactional Email Templates
│   ├── Models/                     # 244 Eloquent Domain Models
│   ├── Notifications/              # 138 Multi-Channel Notification Classes
│   ├── Observers/                  # 159 Model Observers (Audit Trail, Triggers)
│   ├── Providers/                  # Service Providers & Event Registrations
│   ├── Scopes/                     # Global Query Scopes (ActiveScope, CompanyScope)
│   ├── Services/                   # 665 Service Layer Implementations
│   └── Traits/                     # Reusable Model & Controller Traits
│
├── config/                         # 45+ Application Configuration Files
├── database/
│   ├── factories/                  # Model Factories for Testing
│   ├── migrations/                 # 915 Migration Files (1035 DB Tables)
│   └── seeders/                    # Database Seeders & Initial Data
│
├── Modules/                        # 21 Addon Modular Package Sub-systems
│   ├── Affiliate/                  # Partner Affiliate Management System
│   ├── Asset/                      # Fixed Asset Tracking & Inventory
│   ├── Biolinks/                   # Social Biolinks & Landing Page Builder
│   ├── Biometric/                  # Biometric Attendance Device Integrations
│   ├── CyberSecurity/              # Security Audit, IP Blacklist & Hardening
│   ├── EInvoice/                   # E-Invoicing & GST Tax System
│   ├── LanguagePack/               # Multi-Language Translation Packs
│   ├── Letter/                     # HR Offer & Relieving Letter Generator
│   ├── Payroll/                    # Salary Processing & Payslip Generator
│   ├── Performance/                # Employee KRA & Performance Review
│   ├── ProjectRoadmap/             # Project Milestones & Gantt Chart Roadmap
│   ├── Purchase/                   # Purchase Orders & Vendor Management
│   ├── QRCode/                     # Contact QR Code Generator
│   ├── Recruit/                    # Recruitment, Job Board & Applicant Tracking
│   ├── RestAPI/                    # External REST API Gateway
│   ├── ServerManager/              # Cloud Infrastructure & Server Control
│   ├── Sms/                        # SMS Gateway Integrations (Twilio, MSG91)
│   ├── Subdomain/                  # Multi-tenant Subdomain Routing
│   ├── UniversalBundle/            # Master Modular Bundle License Handler
│   ├── Webhooks/                   # Webhooks Gateway Engine
│   └── Zoom/                       # Zoom Video Meetings Integration
│
├── public/                         # Public Assets (CSS, JS, Fonts, Images, Vendor)
│   ├── user-uploads/               # Client Documents, Avatars, Invoice Logos
│   └── vendor/                     # Compiled Frontend Libraries
│
├── resources/
│   ├── css/                        # Custom SCSS / Stylesheet Source
│   ├── js/                         # JavaScript Core App Scripts
│   ├── lang/                       # Multi-Language Translation Files
│   └── views/                      # 1,200+ Blade Template Views
│       ├── clients/                # Client Profile, DataTables & Sub-Tabs
│       ├── dashboard/              # Role-specific CRM Dashboards
│       ├── deals/                  # Sales Pipeline Board & Deal Cards
│       ├── employees/              # Employee Profiles & HR Views
│       ├── estimates/              # Quote Generator & PDF Views
│       ├── invoices/               # Invoicing & Payment Gateway Views
│       ├── leads/                  # Lead Management & Kanban Board
│       ├── projects/               # Project Board, Milestones & Timelogs
│       ├── reports/                # Executive Reports & Financial Analytics
│       └── tickets/                # Helpdesk Ticket System Views
│
├── routes/
│   ├── api.php                     # REST API Endpoints
│   ├── channels.php                # Broadcast Channels (WebSockets)
│   ├── web.php                     # Core Web Application Routes (200KB+)
│   ├── web-public.php              # Client Portal & Public Forms
│   └── web-settings.php            # Admin System Settings Routes
│
├── storage/                        # Application Logs, Upload Cache & Templates
├── artisan                         # Laravel CLI Utility
├── composer.json                   # PHP Dependencies Specification
├── package.json                    # Node/NPM Dependencies Specification
└── webpack.mix.js                  # Laravel Mix Build Pipeline Config
```
