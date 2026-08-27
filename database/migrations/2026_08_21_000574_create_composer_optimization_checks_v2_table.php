<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('composer_optimization_checks_v2')) {
            Schema::create('composer_optimization_checks_v2', function (Blueprint $table) {
                $table->id();
                $table->string('composer_code')->default('CMP-OPT-99420');
                $table->string('status')->default('COMPOSER_OPTIMIZE_AUTOLOAD_VERIFIED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('composer_optimization_checks_v2');
    }
};
