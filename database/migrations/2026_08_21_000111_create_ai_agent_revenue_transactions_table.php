<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_agent_revenue_transactions')) {
            Schema::create('ai_agent_revenue_transactions', function (Blueprint $table) {
                $table->id();
                $table->string('developer_id');
                $table->string('agent_id');
                $table->decimal('gross_revenue_usd', 10, 2)->default(14200.00);
                $table->decimal('developer_payout_usd', 10, 2)->default(9940.00);
                $table->decimal('brandzo_commission_usd', 10, 2)->default(4260.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_agent_revenue_transactions');
    }
};
