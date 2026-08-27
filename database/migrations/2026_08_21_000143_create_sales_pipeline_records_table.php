<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('sales_pipeline_records')) {
            Schema::create('sales_pipeline_records', function (Blueprint $table) {
                $table->id();
                $table->string('deal_name')->default('Global Healthcare Cloud License');
                $table->string('stage')->default('AI Proposal Delivered');
                $table->decimal('deal_value_usd', 12, 2)->default(480000.00);
                $table->decimal('win_probability', 5, 2)->default(94.20);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('sales_pipeline_records');
    }
};
