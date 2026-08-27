<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('launch_campaigns_v2')) {
            Schema::create('launch_campaigns_v2', function (Blueprint $table) {
                $table->id();
                $table->string('campaign_code')->default('LNC-CMP-99420');
                $table->integer('ai_submodules_count')->default(140);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_FINAL_GLOBAL_LAUNCH_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('launch_campaigns_v2');
    }
};
