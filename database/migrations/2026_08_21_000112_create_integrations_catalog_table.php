<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('integrations_catalog')) {
            Schema::create('integrations_catalog', function (Blueprint $table) {
                $table->id();
                $table->string('name')->default('Salesforce CRM / SAP ERP Sync');
                $table->string('category')->default('Enterprise CRM / ERP');
                $table->string('auth_type')->default('OAuth2 / API Key');
                $table->string('status')->default('Verified & Ready');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('integrations_catalog');
    }
};
