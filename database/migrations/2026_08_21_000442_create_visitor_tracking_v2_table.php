<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('visitor_tracking_v2')) {
            Schema::create('visitor_tracking_v2', function (Blueprint $table) {
                $table->id();
                $table->string('visitor_code')->default('VIS-TRACK-99420');
                $table->integer('daily_tracked_visitors')->default(520000);
                $table->decimal('visitor_intent_score', 5, 2)->default(99.80);
                $table->string('status')->default('VISITOR_INTENT_PREDICTED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('visitor_tracking_v2');
    }
};
