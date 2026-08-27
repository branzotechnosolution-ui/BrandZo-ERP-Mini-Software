<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('integrations')) {
            Schema::create('integrations', function (Blueprint $table) {
                $table->id();
                $table->string('integration_name')->default('Salesforce / SAP / QuickBooks Sync');
                $table->string('category')->default('Enterprise CRM & ERP Connector');
                $table->string('status')->default('Connected & Live');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('integrations');
    }
};
