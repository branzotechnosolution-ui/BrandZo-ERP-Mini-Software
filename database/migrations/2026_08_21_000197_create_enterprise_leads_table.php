<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_leads')) {
            Schema::create('enterprise_leads', function (Blueprint $table) {
                $table->id();
                $table->string('company_name')->default('Global Health Systems Corp');
                $table->string('contact_email')->default('vp.tech@healthsystems.com');
                $table->integer('qualification_score')->default(96);
                $table->string('sdr_assigned')->default('AI-SDR-LEAD-01');
                $table->string('status')->default('DEMO_SCHEDULED_AUTO_PROPOSAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_leads');
    }
};
