<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('developer_analytics_v2')) {
            Schema::create('developer_analytics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('analytics_code')->default('DEV-ANL-99420');
                $table->decimal('monthly_api_calls_millions', 8, 2)->default(1480.00);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_DEVELOPER_ECOSYSTEM_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('developer_analytics_v2');
    }
};
