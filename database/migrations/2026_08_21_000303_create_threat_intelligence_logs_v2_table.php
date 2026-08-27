<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('threat_intelligence_logs_v2')) {
            Schema::create('threat_intelligence_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('log_code')->default('THREAT-LOG-99420');
                $table->bigInteger('monitored_events_daily')->default(18400000);
                $table->integer('unknown_threats_count')->default(0);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('threat_intelligence_logs_v2');
    }
};
