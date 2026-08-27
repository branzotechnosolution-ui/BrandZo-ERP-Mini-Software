<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('partner_campaigns')) {
            Schema::create('partner_campaigns', function (Blueprint $table) {
                $table->id();
                $table->string('partner_id');
                $table->string('campaign_title')->default('Co-Marketing Joint Enterprise Launch');
                $table->decimal('partner_revenue_share_earned', 12, 2)->default(38400.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_campaigns');
    }
};
