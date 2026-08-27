<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_meeting_records')) {
            Schema::create('ai_meeting_records', function (Blueprint $table) {
                $table->id();
                $table->string('meeting_title')->default('Executive Strategy Standup #984');
                $table->text('summary')->default('Summarized 45 min meeting: Approved .2M APAC Expansion, zero bottlenecks detected.');
                $table->integer('action_items_count')->default(6);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_meeting_records');
    }
};
