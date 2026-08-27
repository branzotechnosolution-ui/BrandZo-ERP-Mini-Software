# BrandZo ERP — Technical Stack & Dependency Architecture

## 1. System Core & Runtime
- **PHP Version**: `^8.1` (Compatibility: PHP 8.1 - 8.3)
- **Framework**: `Laravel 10.x` (`laravel/framework ^10.0`)
- **Database Engine**: `MySQL / MariaDB` (InnoDB, UTF-8 MB4)
- **Modular Framework**: `nwidart/laravel-modules 10.0.6` (21 Addon Modules supported)
- **Asset Bundler / Build Tool**: `laravel-mix 6.0.28` / `webpack 5.23.0`

---

## 2. Frontend Technology Stack
- **Template Engine**: Laravel Blade (`.blade.php`)
- **CSS Framework**: Bootstrap `4.3.1` (Vanilla CSS Custom Theme, Glassmorphism, Rounded Cards)
- **UI Components & Icons**:
  - `bootstrap-icons ^1.5.0`
  - `font-awesome 5.x / 6.x`
  - `flag-icon-css ^4.1.7`
  - `@popperjs/core ^2.5.4`
- **JavaScript Core & Libraries**:
  - `jQuery 3.x`
  - `Axios ^0.21.1`
  - `Lodash ^4.17.21`
  - `Moment.js / Moment-Timezone ^0.5.37`
  - `SweetAlert2 ^10.12.0`
  - `bootstrap-select ^1.13.18`
- **Data Tables Engine**:
  - `Yajra DataTables Oracle ^10.8`
  - `Yajra DataTables Buttons ^10.0`
  - `Yajra DataTables HTML ^10.8`
- **Interactive UI Components**:
  - Rich Text Editor: `Quill ^1.3.7` (with `quill-emoji`, `quill-mention`, `quill-magic-url`)
  - File Uploads: `Dropify ^0.2.2` & `Cropper.js ^1.5.12`
  - E-Signature Pad: `Signature Pad ^3.0.0`
  - Charts & Analytics: `Frappe Charts ^1.6.2` & `Chart.js 2.x`
  - Realtime WebSockets: `Laravel Echo ^1.11.2` & `Pusher-JS ^7.0.3`

---

## 3. Backend Dependencies & Composer Packages
- **API & Authentication**:
  - `laravel/sanctum ^3.2`
  - `laravel/fortify ^1.7`
  - `laravel/socialite ^5.1`
  - `froiden/laravel-rest-api ^10.0`
- **PDF & Document Generation**:
  - `barryvdh/laravel-dompdf ^2.0.0` (`dompdf/dompdf 2.0.4`)
  - `webklex/laravel-pdfmerger ^1.3`
  - `setasign/fpdf ^1.8`
- **Excel & Data Processing**:
  - `maatwebsite/excel ^3.1`
  - `macellan/laravel-zip ^1.0`
- **Payment Gateways & Subscriptions**:
  - `stripe/stripe-php ^7.66` (`laravel/cashier ^14.5`)
  - `razorpay/razorpay ^2.5`
  - `paypal/rest-api-sdk-php`
  - `mollie/laravel-mollie ^2.0`
  - `authorizenet/authorizenet ^2.0`
  - `square/square 16.0.0`
  - `unicodeveloper/laravel-paystack ^1.0`
  - `billowapp/payfast ^0.6.2`
  - `kingflamez/laravelrave ^4.5` (Flutterwave)
- **Notification & Messaging Services**:
  - `twilio/sdk ^6.13` (`laravel-notification-channels/twilio ^3.3`)
  - `laravel-notification-channels/onesignal ^2.5`
  - `laravel-notification-channels/telegram ^4.0`
  - `craftsys/msg91-laravel-notification-channel ^0.7.0`
  - `edujugon/push-notification ^5.2`
  - `pusher/pusher-php-server ^7.2`
- **System Utilities & Extensions**:
  - `spatie/laravel-backup 8.*`
  - `opcodesio/log-viewer ^3.8`
  - `hisorange/browser-detect ^5.0`
  - `stevebauman/location ^7.2`
  - `macsidigital/laravel-zoom 8.0.1`
  - `quickbooks/v3-php-sdk ^6.1`
  - `google/apiclient ^2.10`

---

## 4. Key Integrations & APIs
1. **Payment Gateways**: Stripe, Razorpay, PayPal, Mollie, Authorize.Net, Square, Paystack, PayFast, Flutterwave.
2. **Communications**: Twilio SMS & WhatsApp, MSG91, Telegram Bot API, OneSignal Push Notifications, Pusher Realtime.
3. **Third-Party Services**: Google Calendar / Translate API, Zoom Meetings API, QuickBooks Accounting API, Mailchimp Marketing API, Sentry Monitoring.
