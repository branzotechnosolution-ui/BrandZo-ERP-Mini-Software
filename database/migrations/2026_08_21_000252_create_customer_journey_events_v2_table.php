<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_journey_events_v2')) {
            Schema::create('customer_journey_events_v2', function (Blueprint $table) {
                $table->id();
                $table->string('stage')->default('EXPANSION');
                $table->string('lifecycle_flow')->default('Lead -> Demo -> Purchase -> Onboarding -> Usage -> Renewal -> Expansion');
                $table->string('predicted_action')->default('LIKELY_TO_UPGRADE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_journey_events_v2');
    }
};
