<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('partner_leads')) {
            Schema::create('partner_leads', function (Blueprint $table) {
                $table->id();
                $table->string('partner_id');
                $table->string('lead_name');
                $table->string('deal_stage')->default('Proposal Sent');
                $table->decimal('estimated_deal_value', 12, 2)->default(184000.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_leads');
    }
};
