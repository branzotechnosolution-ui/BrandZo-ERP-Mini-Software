<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_vip_routing_settings_v2')) {
            Schema::create('crm_vip_routing_settings_v2', function (Blueprint $table) {
                $table->id();
                $table->string('setting_code')->default('VIP-SET-99420');
                $table->decimal('min_vip_budget', 15, 2)->default(50000.00);
                $table->string('target_user_role')->default('Senior Sales Users');
                $table->boolean('auto_bypass_queue')->default(true);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_vip_routing_settings_v2');
    }
};
