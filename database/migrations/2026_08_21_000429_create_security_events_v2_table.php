<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('security_events_v2')) {
            Schema::create('security_events_v2', function (Blueprint $table) {
                $table->id();
                $table->string('security_event_code')->default('SEC-EVT-99420');
                $table->integer('anomalies_detected')->default(0);
                $table->decimal('security_score', 5, 2)->default(100.00);
                $table->string('status')->default('SECURITY_ZERO_TRUST_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('security_events_v2');
    }
};
