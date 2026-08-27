<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('demo_conversions_v2')) {
            Schema::create('demo_conversions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('demo_code')->default('DEMO-CNV-99420');
                $table->decimal('demo_conversion_rate', 5, 2)->default(48.20);
                $table->string('status')->default('DEMO_CONVERSION_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('demo_conversions_v2');
    }
};
