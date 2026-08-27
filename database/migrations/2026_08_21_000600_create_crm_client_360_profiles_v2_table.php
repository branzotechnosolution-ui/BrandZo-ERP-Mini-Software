<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_client_360_profiles_v2')) {
            Schema::create('crm_client_360_profiles_v2', function (Blueprint $table) {
                $table->id();
                $table->string('client_code')->unique()->default('CLI-2026-9942');
                $table->string('company_name')->default('Acme Global Enterprises');
                $table->string('contact_persons')->default('John Doe (CEO), Jane Smith (CTO)');
                $table->string('phone')->default('+1-555-0199');
                $table->string('email')->default('john@acmeglobal.com');
                $table->string('website')->default('https://acmeglobal.com');
                $table->string('industry')->default('Enterprise Software & Technology');
                $table->text('address')->default('100 Silicon Valley Blvd, Suite 400, CA');
                $table->string('assigned_account_manager')->default('Senior Account Executive');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_client_360_profiles_v2');
    }
};
