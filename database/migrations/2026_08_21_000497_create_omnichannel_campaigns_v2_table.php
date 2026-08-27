<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('omnichannel_campaigns_v2')) {
            Schema::create('omnichannel_campaigns_v2', function (Blueprint $table) {
                $table->id();
                $table->string('campaign_code')->default('OMNI-CMP-99420');
                $table->string('channels')->default('WhatsApp Business API, Email Sequence');
                $table->string('status')->default('OMNICHANNEL_MARKETING_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('omnichannel_campaigns_v2');
    }
};
