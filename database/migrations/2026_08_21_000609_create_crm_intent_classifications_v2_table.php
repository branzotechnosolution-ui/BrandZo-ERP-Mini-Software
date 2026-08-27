<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_intent_classifications_v2')) {
            Schema::create('crm_intent_classifications_v2', function (Blueprint $table) {
                $table->id();
                $table->string('intent_code')->default('INT-2026-9942');
                $table->integer('hot_leads_count')->default(42);
                $table->integer('warm_leads_count')->default(68);
                $table->integer('cold_leads_count')->default(32);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_intent_classifications_v2');
    }
};
