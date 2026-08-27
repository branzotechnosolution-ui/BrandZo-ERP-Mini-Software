========================================================================
BRANDZO ERP SOFTWARE - FULL PROJECT SOURCE CODE PACKAGE
========================================================================

Project Name: BrandZo ERP (Enterprise Resource Planning & CRM Suite)
Framework: Laravel 10 / PHP 8.2+
Package Date: 22 Aug 2026
Package Name: BrandZo_ERP_Full_Project.zip

------------------------------------------------------------------------
1. PROJECT OVERVIEW & STATUS
------------------------------------------------------------------------
This full source code package contains the complete BrandZo ERP codebase,
including:
 - Full CRM Suite (Leads, Deals, Pipelines, Contacts, Convert Deal to Client Flow)
 - Client Management Module (Zoho / HubSpot 360-degree CRM Profile with Vault)
 - HRMS Module Phase 167 (Attendance Session Flow, Quick Clock In/Out, Break System)
 - Financial & Invoicing Suite
 - Project & Task Management Systems
 - All Database Migrations & Seeders

------------------------------------------------------------------------
2. SYSTEM REQUIREMENTS
------------------------------------------------------------------------
 - PHP: 8.2.0 or higher
 - PHP Extensions: OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON, BCMath, GD, Fileinfo
 - Database: MySQL 8.0+ or MariaDB 10.5+
 - Composer: 2.x
 - Node.js: 18.x or 20.x
 - NPM: 9.x or 10.x

------------------------------------------------------------------------
3. INSTALLATION & SETUP INSTRUCTIONS
------------------------------------------------------------------------
Step 1: Extract Project Archive
   Unzip BrandZo_ERP_Full_Project.zip into your web server directory.

Step 2: Install PHP Dependencies
   Run the following command in terminal:
   $ composer install

Step 3: Install & Build Frontend Assets
   $ npm install
   $ npm run build

Step 4: Environment Configuration
   Copy .env.example to .env:
   $ cp .env.example .env

   Update database settings in .env:
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=brandzo_erp
     DB_USERNAME=root
     DB_PASSWORD=your_password

Step 5: Generate Application Key & Link Storage
   $ php artisan key:generate
   $ php artisan storage:link

Step 6: Run Database Migrations & Seeders
   $ php artisan migrate --seed

Step 7: Clear & Optimize Cache
   $ php artisan optimize:clear

Step 8: Start Local Development Server
   $ php artisan serve

   Access the application in your web browser at:
   http://127.0.0.1:8000

------------------------------------------------------------------------
4. KEY ENVIRONMENT VARIABLES (.env)
------------------------------------------------------------------------
 - APP_NAME="BrandZo ERP"
 - APP_ENV=local
 - APP_KEY=base64:...
 - APP_DEBUG=true
 - APP_URL=http://127.0.0.1:8000
 - HRMS_ATTENDANCE_TEST_MODE=true

------------------------------------------------------------------------
Copyright (c) 2026 BrandZo ERP. All Rights Reserved.
========================================================================
