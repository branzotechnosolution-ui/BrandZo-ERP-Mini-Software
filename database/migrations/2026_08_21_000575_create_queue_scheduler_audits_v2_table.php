<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('queue_scheduler_audits_v2')) {
            Schema::create('queue_scheduler_audits_v2', function (Blueprint $table) {
                $table->id();
                $table->string('queue_code')->default('QU-SCH-99420');
                $table->string('status')->default('QUEUE_WORKER_AND_CRON_SCHEDULER_READY');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('queue_scheduler_audits_v2');
    }
};
