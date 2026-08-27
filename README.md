# BrandZo ERP — Mini Software Package Setup Guide

## Package Summary
- **Package Name**: `BrandZo_ERP_Mini_Software`
- **Location**: `/Users/macbook/Downloads/BrandZo_ERP_Mini_Software`
- **Total Source Files**: `14,878`
- **Package Size**: `~154 MB` (Excludes `vendor/`, `node_modules/`, `.git/`, `.env` secrets)

---

## 1. Prerequisites
- **PHP**: `^8.1` (PHP 8.1 / 8.2 / 8.3)
- **Composer**: `^2.x`
- **Node.js**: `^16.x` or `^18.x` & NPM
- **Database**: MySQL / MariaDB (Database: `u579956562_branzo`)

---

## 2. Local Installation & Run Steps

### Step 1: Navigate to Project Folder
```bash
cd /Users/macbook/Downloads/BrandZo_ERP_Mini_Software
```

### Step 2: Configure Environment
```bash
cp .env.example .env
```

### Step 3: Install PHP Dependencies
```bash
composer install
```

### Step 4: Install Node Frontend Dependencies
```bash
npm install
npm run dev
```

### Step 5: Generate Application Key & Run Migrations
```bash
php artisan key:generate
php artisan migrate --seed
```

### Step 6: Clear Cache & Start Local Server
```bash
php artisan optimize:clear
php artisan serve --port=8000
```

Access the application in browser: **`http://127.0.0.1:8000`**

Admin Credentials:
- **Email**: `admin@brandzo.in`
- **Password**: `123456`
