<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('infrastructure_alerts_v2')) {
            Schema::create('infrastructure_alerts_v2', function (Blueprint $table) {
                $table->id();
                $table->string('alert_code')->default('ALT-INFRA-99420');
                $table->integer('active_alerts_count')->default(0);
                $table->string('severity')->default('NORMAL_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('infrastructure_alerts_v2');
    }
};
