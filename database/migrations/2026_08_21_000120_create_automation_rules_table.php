<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('automation_rules')) {
            Schema::create('automation_rules', function (Blueprint $table) {
                $table->id();
                $table->string('rule_name')->default('Auto-Approve Invoices < ,000');
                $table->string('condition_json')->default('{"amount": {"less_than": 5000}}');
                $table->string('compliance_status')->default('PASSED_REGULATORY_CHECK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('automation_rules');
    }
};
