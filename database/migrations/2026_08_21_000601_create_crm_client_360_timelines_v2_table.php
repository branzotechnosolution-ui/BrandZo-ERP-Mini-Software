<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_client_360_timelines_v2')) {
            Schema::create('crm_client_360_timelines_v2', function (Blueprint $table) {
                $table->id();
                $table->string('timeline_code')->default('TLN-360-99420');
                $table->string('client_code')->default('CLI-2026-9942');
                $table->string('event_stage')->default('Lead Created -> Deal Won -> Client Active');
                $table->text('activity_description')->default('Client activated with ,000 enterprise subscription.');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_client_360_timelines_v2');
    }
};
