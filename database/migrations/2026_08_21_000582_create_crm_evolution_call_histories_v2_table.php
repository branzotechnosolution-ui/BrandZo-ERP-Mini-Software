<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_evolution_call_histories_v2')) {
            Schema::create('crm_evolution_call_histories_v2', function (Blueprint $table) {
                $table->id();
                $table->string('call_code')->default('CLL-HIS-99420');
                $table->unsignedBigInteger('lead_id')->nullable();
                $table->unsignedBigInteger('deal_id')->nullable();
                $table->unsignedBigInteger('client_id')->nullable();
                $table->string('caller')->default('Senior Sales Executive');
                $table->string('recipient')->default('John Doe');
                $table->integer('duration_seconds')->default(480);
                $table->text('summary')->default('Discussed enterprise requirements, SLA terms, and pricing proposal.');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_evolution_call_histories_v2');
    }
};
