<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_datawarehouse_v2')) {
            Schema::create('enterprise_datawarehouse_v2', function (Blueprint $table) {
                $table->id();
                $table->string('edw_code')->default('EDW-SYS-99420');
                $table->integer('ai_recommendations_count')->default(384);
                $table->string('status')->default('AI_ENTERPRISE_DATA_WAREHOUSE_DATA_LAKE_INTELLIGENCE_OS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_datawarehouse_v2');
    }
};
