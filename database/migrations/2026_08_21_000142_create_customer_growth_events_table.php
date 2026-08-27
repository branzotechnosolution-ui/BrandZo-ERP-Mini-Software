<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_growth_events')) {
            Schema::create('customer_growth_events', function (Blueprint $table) {
                $table->id();
                $table->string('event_type')->default('ENTERPRISE_LEAD_QUALIFIED');
                $table->string('lead_id')->default('LEAD-99420');
                $table->decimal('qualification_score', 5, 2)->default(96.50);
                $table->string('assigned_ai_sdr')->default('AI SDR Agent #01');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_growth_events');
    }
};
