<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('conversion_funnels')) {
            Schema::create('conversion_funnels', function (Blueprint $table) {
                $table->id();
                $table->string('stage_name')->default('Lead -> Demo -> Proposal -> Closed');
                $table->integer('total_visitors')->default(184000);
                $table->integer('total_leads')->default(18400);
                $table->integer('deals_closed')->default(1420);
                $table->decimal('conversion_rate_percentage', 5, 2)->default(7.72);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('conversion_funnels');
    }
};
