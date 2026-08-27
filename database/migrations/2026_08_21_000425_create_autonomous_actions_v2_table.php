<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('autonomous_actions_v2')) {
            Schema::create('autonomous_actions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('action_code')->default('AUTO-ACT-99420');
                $table->integer('daily_autonomous_actions')->default(18400000);
                $table->string('status')->default('AUTONOMOUS_AUTOMATION_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('autonomous_actions_v2');
    }
};
