<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('tenant_provisioning_logs')) {
            Schema::create('tenant_provisioning_logs', function (Blueprint $table) {
                $table->id();
                $table->string('tenant_slug');
                $table->string('schema_name');
                $table->string('provision_status')->default('Fully Provisioned');
                $table->decimal('duration_seconds', 6, 2)->default(1.84);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('tenant_provisioning_logs');
    }
};
