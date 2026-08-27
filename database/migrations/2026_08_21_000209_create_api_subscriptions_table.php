<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('api_subscriptions')) {
            Schema::create('api_subscriptions', function (Blueprint $table) {
                $table->id();
                $table->string('api_key_id')->default('KEY-PUB-84920');
                $table->string('tier')->default('ENTERPRISE_API_UNLIMITED');
                $table->bigInteger('daily_requests')->default(18400000);
                $table->string('status')->default('ACTIVE_SLA_ENFORCED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('api_subscriptions');
    }
};
