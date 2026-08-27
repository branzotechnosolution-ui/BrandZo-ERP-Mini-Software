<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_growth_v2')) {
            Schema::create('enterprise_growth_v2', function (Blueprint $table) {
                $table->id();
                $table->string('growth_code')->default('ENT-GRW-99420');
                $table->decimal('arr_usd', 12, 2)->default(148500000.00);
                $table->integer('enterprise_customers_count')->default(18400);
                $table->string('status')->default('ENTERPRISE_GROWTH_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_growth_v2');
    }
};
