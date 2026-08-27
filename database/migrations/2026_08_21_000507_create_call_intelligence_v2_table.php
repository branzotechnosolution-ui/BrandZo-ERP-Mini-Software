<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('call_intelligence_v2')) {
            Schema::create('call_intelligence_v2', function (Blueprint $table) {
                $table->id();
                $table->string('call_code')->default('CALL-INT-99420');
                $table->integer('analyzed_calls_count')->default(14200);
                $table->string('status')->default('CALL_INTELLIGENCE_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('call_intelligence_v2');
    }
};
