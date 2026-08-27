<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('sales_copilot_sessions_v2')) {
            Schema::create('sales_copilot_sessions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('copilot_code')->default('COPILOT-154-9942');
                $table->integer('active_copilots_count')->default(384);
                $table->string('status')->default('SALES_COPILOT_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('sales_copilot_sessions_v2');
    }
};
