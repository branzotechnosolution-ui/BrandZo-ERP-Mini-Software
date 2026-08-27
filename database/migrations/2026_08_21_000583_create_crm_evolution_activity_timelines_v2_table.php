<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_evolution_activity_timelines_v2')) {
            Schema::create('crm_evolution_activity_timelines_v2', function (Blueprint $table) {
                $table->id();
                $table->string('activity_code')->default('ACT-TLN-99420');
                $table->unsignedBigInteger('lead_id')->nullable();
                $table->unsignedBigInteger('deal_id')->nullable();
                $table->unsignedBigInteger('client_id')->nullable();
                $table->string('event_type')->default('STAGE_CHANGE');
                $table->text('description')->default('Lead created and qualified into active enterprise deal pipeline.');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_evolution_activity_timelines_v2');
    }
};
