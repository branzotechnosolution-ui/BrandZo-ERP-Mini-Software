<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_smart_drip_campaigns_v2')) {
            Schema::create('crm_smart_drip_campaigns_v2', function (Blueprint $table) {
                $table->id();
                $table->string('campaign_code')->default('CMP-2026-9942');
                $table->string('campaign_name')->default('HOT Lead Multi-Touch Acceleration');
                $table->string('target_intent')->default('HOT LEAD'); // HOT LEAD, WARM LEAD, COLD LEAD
                $table->integer('enrolled_leads_count')->default(42);
                $table->integer('messages_sent_count')->default(348);
                $table->integer('replies_received_count')->default(134);
                $table->boolean('is_active')->default(true);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_smart_drip_campaigns_v2');
    }
};
