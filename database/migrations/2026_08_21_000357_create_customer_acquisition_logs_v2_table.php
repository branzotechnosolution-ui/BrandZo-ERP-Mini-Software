<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_acquisition_logs_v2')) {
            Schema::create('customer_acquisition_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('acq_code')->default('ACQ-LOG-99420');
                $table->decimal('cac_inr', 10, 2)->default(3840.00);
                $table->decimal('cac_reduction_percent', 5, 2)->default(42.80);
                $table->string('status')->default('ULTRA_LOW_CAC_ACHIEVED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_acquisition_logs_v2');
    }
};
