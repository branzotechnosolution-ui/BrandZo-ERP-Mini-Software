# Phase 161: BrandZo AI Enterprise OS Local Deployment Guide 💻🏠

## 1. Overview
This guide provides step-by-step instructions for initializing, hosting, and executing **BrandZo AI Enterprise OS** in a local development & testing environment without pushing changes to production servers.

## 2. Prerequisites
- **PHP**: 8.2+ with memory_limit=512M
- **MySQL**: 8.0+ running on 127.0.0.1:3306 (Database: u579956562_branzo)
- **Composer**: 2.x
- **Python**: 3.9+ (for testing automation scripts)

## 3. Local Installation & Startup Steps
1. Access active directory: /Users/macbook/Documents/BrandZo_ERP
2. Configure .env for local testing sandbox mode:
   APP_ENV=local
   APP_DEBUG=true
   APP_URL=http://127.0.0.1:8000
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=u579956562_branzo
   STRIPE_SANDBOX_MODE=true
   RAZORPAY_SANDBOX_MODE=true

3. Execute Database Migrations:
   php -d memory_limit=512M artisan migrate --force

4. Clear & Warm Application Caches:
   php -d memory_limit=512M artisan optimize:clear

5. Launch Local Artisan Development Server:
   php -d memory_limit=512M artisan serve --host=127.0.0.1 --port=8000

6. Access Local System Dashboard: http://127.0.0.1:8000/signin or http://127.0.0.1:8000/account/local-testing/dashboard
