<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('partner_networks_v2')) {
            Schema::create('partner_networks_v2', function (Blueprint $table) {
                $table->id();
                $table->string('network_name')->default('Global Enterprise SaaS Network');
                $table->integer('active_connectors')->default(38400);
                $table->decimal('sync_latency_ms', 5, 2)->default(1.42);
                $table->string('status')->default('OPERATIONAL_SYNCING');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_networks_v2');
    }
};
