<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('agent_usage_logs')) {
            Schema::create('agent_usage_logs', function (Blueprint $table) {
                $table->id();
                $table->string('company_tenant');
                $table->integer('tasks_completed')->default(1420);
                $table->bigInteger('tokens_consumed')->default(1840000);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('agent_usage_logs');
    }
};
