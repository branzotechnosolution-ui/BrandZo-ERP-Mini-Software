<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('revenue_expansion_events')) {
            Schema::create('revenue_expansion_events', function (Blueprint $table) {
                $table->id();
                $table->string('account_id')->default('ACCT-ENTERPRISE-9942');
                $table->string('expansion_type')->default('AI_WORKFORCE_EXPANSION_UPSELL');
                $table->decimal('arr_expansion_usd', 12, 2)->default(142000.00);
                $table->decimal('nrr_percent', 5, 2)->default(138.40);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('revenue_expansion_events');
    }
};
