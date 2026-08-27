<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_workflow_actions_v2')) {
            Schema::create('crm_workflow_actions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('action_code')->default('ACT-WKF-99420');
                $table->string('action_type')->default('Send Email & WhatsApp');
                $table->integer('executed_count')->default(348);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_workflow_actions_v2');
    }
};
