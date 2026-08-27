<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_agents')) {
            Schema::create('ai_agents', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('company_id')->default(1);
                $table->string('name');
                $table->string('role');
                $table->text('description')->nullable();
                $table->boolean('status')->default(1);
                $table->integer('actions_performed')->default(0);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('partners')) {
            Schema::create('partners', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('company_id')->default(1);
                $table->unsignedBigInteger('user_id');
                $table->string('referral_code', 32)->unique();
                $table->decimal('commission_rate', 5, 2)->default(15.00);
                $table->decimal('total_earned', 12, 2)->default(0.00);
                $table->boolean('status')->default(1);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('partner_referrals')) {
            Schema::create('partner_referrals', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('partner_id');
                $table->unsignedBigInteger('referred_company_id');
                $table->decimal('revenue_share', 12, 2)->default(0.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_referrals');
        Schema::dropIfExists('partners');
        Schema::dropIfExists('ai_agents');
    }
};
