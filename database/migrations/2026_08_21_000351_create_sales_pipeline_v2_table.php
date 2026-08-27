<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('sales_pipeline_v2')) {
            Schema::create('sales_pipeline_v2', function (Blueprint $table) {
                $table->id();
                $table->string('deal_code')->default('DEAL-PIPE-99420');
                $table->decimal('pipeline_value_usd', 12, 2)->default(28400000.00);
                $table->integer('active_deals')->default(1420);
                $table->string('stage')->default('QUALIFIED_DEAL_WINNING');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('sales_pipeline_v2');
    }
};
