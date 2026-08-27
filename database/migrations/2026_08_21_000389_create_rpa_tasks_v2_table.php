<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('rpa_tasks_v2')) {
            Schema::create('rpa_tasks_v2', function (Blueprint $table) {
                $table->id();
                $table->string('rpa_code')->default('RPA-BOT-99420');
                $table->integer('active_task_bots')->default(1420);
                $table->string('time_saved_display')->default('3.84 Million Hours / Month');
                $table->string('status')->default('TASK_BOTS_OPERATING_AT_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('rpa_tasks_v2');
    }
};
