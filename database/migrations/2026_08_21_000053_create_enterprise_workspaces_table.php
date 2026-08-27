<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_workspaces')) {
            Schema::create('enterprise_workspaces', function (Blueprint $table) {
                $table->id();
                $table->string('workspace_slug');
                $table->string('company_name');
                $table->string('database_schema')->default('tenant_schema_001');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_workspaces');
    }
};
