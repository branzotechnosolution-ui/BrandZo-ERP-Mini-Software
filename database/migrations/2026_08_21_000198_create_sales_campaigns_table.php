<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('sales_campaigns')) {
            Schema::create('sales_campaigns', function (Blueprint $table) {
                $table->id();
                $table->string('campaign_title')->default('APAC Healthcare AI SDR Launch Q3');
                $table->string('channels')->default('LinkedIn Outreach + Email + SEO Intelligence');
                $table->integer('impressions')->default(1840000);
                $table->integer('leads_generated')->default(18400);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('sales_campaigns');
    }
};
