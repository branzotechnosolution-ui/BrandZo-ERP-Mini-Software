<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('lead_attributions')) {
            Schema::create('lead_attributions', function (Blueprint $table) {
                $table->id();
                $table->string('lead_email');
                $table->string('utm_source')->default('google_search');
                $table->string('utm_medium')->default('cpc');
                $table->string('utm_campaign')->default('enterprise_erp_launch');
                $table->integer('qualification_score')->default(94);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('lead_attributions');
    }
};
