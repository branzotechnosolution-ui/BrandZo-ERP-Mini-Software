<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('action_items_v2')) {
            Schema::create('action_items_v2', function (Blueprint $table) {
                $table->id();
                $table->string('action_code')->default('ACT-ITEM-99420');
                $table->integer('pending_actions_unresolved')->default(0);
                $table->string('status')->default('AI_ENTERPRISE_COLLABORATION_COMMUNICATION_INTELLIGENCE_OS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('action_items_v2');
    }
};
