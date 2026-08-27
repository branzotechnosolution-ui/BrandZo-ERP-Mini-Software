<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ecosystem_connectors_v2')) {
            Schema::create('ecosystem_connectors_v2', function (Blueprint $table) {
                $table->id();
                $table->string('connector_name')->default('SAP & Salesforce Enterprise Connector Hub');
                $table->string('integration_suite')->default('Salesforce, SAP, Oracle, Microsoft, Google Workspace, HubSpot');
                $table->integer('active_connectors_count')->default(38400);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ecosystem_connectors_v2');
    }
};
