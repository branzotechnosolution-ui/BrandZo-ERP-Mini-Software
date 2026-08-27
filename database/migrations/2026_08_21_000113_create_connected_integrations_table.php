<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('connected_integrations')) {
            Schema::create('connected_integrations', function (Blueprint $table) {
                $table->id();
                $table->string('integration_id');
                $table->string('tenant_slug')->default('brandzo-global');
                $table->string('connection_status')->default('Connected & Real-Time Syncing');
                $table->timestamp('last_sync_at')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('connected_integrations');
    }
};
