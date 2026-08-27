<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('tenant_subscriptions')) {
            Schema::create('tenant_subscriptions', function (Blueprint $table) {
                $table->id();
                $table->string('tenant_name')->default('Global Healthcare Enterprise Ltd.');
                $table->string('plan_tier')->default('ENTERPRISE_UNLIMITED_SLA');
                $table->string('tenant_isolation_mode')->default('SCHEMA_ISOLATED_ENCRYPTED');
                $table->bigInteger('monthly_api_limit')->default(100000000);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('tenant_subscriptions');
    }
};
