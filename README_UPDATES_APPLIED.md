# BrandZo ERP — Full Project (Parts 2, 3 & 4 Applied)

This is your uploaded project with all delivered changes already applied
directly into the file tree — no manual copy-paste needed. `vendor/` was
stripped out to keep the zip small; run `composer install` after
extracting.

## ✅ Part 3 — Document Delete Permission
- `app/Http/Requests/EmployeeDocs/DeleteRequest.php` → only admins can delete.
- `resources/views/employees/ajax/documents.blade.php` → delete icon hidden for non-admins.

## ✅ Part 2 — Notice Period Automation
- `database/migrations/..._add_default_notice_period_months_to_companies_table.php` (NEW)
- `resources/views/company-settings/index.blade.php` → Company Address + Default Notice Period fields.
- `app/Http/Requests/Settings/UpdateOrganisationSettings.php` → validation.
- `app/Http/Controllers/SettingsController.php` → saves the two fields.
- `app/Observers/EmployeeDetailsObserver.php` → auto-fills notice_period_end_date, notifies admins.
- `app/Notifications/NoticePeriodStarted.php` (NEW)
- `resources/lang/en/modules.php` → new lang keys.

## ✅ Part 4 — Offer Letter Annual CTC + PDF + Email (this session)
- `database/migrations/..._add_signature_image_to_companies_table.php` (NEW) — signature_image column + default office address.
- `Modules/Recruit/Database/Migrations/..._add_annual_ctc_to_recruit_job_offer_letter_table.php` (NEW) — annual_ctc column.
- `app/Models/Company.php` → `signature_url` accessor.
- `Modules/Recruit/Http/Requests/OfferLetter/StoreOfferLetter.php` → `annual_ctc` validation rule.
- `Modules/Recruit/Http/Controllers/JobOfferLetterController.php` → saves `annual_ctc` in `store()` and `update()`.
- `Modules/Recruit/Resources/views/jobs/ajax/createOfferLetter.blade.php` + `editOfferLetter.blade.php` → new `annual_ctc` input field.
- `Modules/Recruit/Resources/views/jobs/offer-letter/offer-letter-pdf.blade.php` →
  - CTC breakdown table (Basic / HRA / Take-home / Annual CTC), shown ONLY when `annual_ctc` is set. Existing `$salaryStructure` block untouched.
  - Footer row with `$company->address` and `$company->signature_url`, separate from the candidate's own signature block.

  ⚠️ **Confirm the % split before going live.** Current formula (from your notes):
  Basic = 50% of monthly CTC, HRA = 50% of Basic, Take-home = remainder.
  Tell me the real numbers if Karthik wants something different — it's a
  one-spot change in the `@php` block at the top of that section.

- `Modules/Recruit/Notifications/SendOfferLetter.php` → now attaches the
  offer letter PDF (same `dompdf` pattern as `Modules/Payroll/Notifications/SalaryStatusEmail.php`),
  wrapped in try/catch so a PDF failure never blocks the email.
- `Modules/Recruit/Resources/lang/eng/modules.php` → new lang keys: `annualCtc`, `ctcBreakdown`, `hra`, `takeHomeMonthly`.

## Still needed from you
- **Logo**: already working via `$company->logo_url` — nothing to do.
- **Signature image**: upload the signature photo through Company Settings →
  "Authorized Signature" field once deployed (manual UI step, not code).
- Confirm the Basic/HRA % split above.

## After extracting
```bash
composer install
php artisan migrate
php artisan view:clear
```
