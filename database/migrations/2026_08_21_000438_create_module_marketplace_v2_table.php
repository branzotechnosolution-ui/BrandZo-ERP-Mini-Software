<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('module_marketplace_v2')) {
            Schema::create('module_marketplace_v2', function (Blueprint $table) {
                $table->id();
                $table->string('module_code')->default('MKT-MOD-2026-9942');
                $table->integer('marketplace_modules_count')->default(140);
                $table->string('status')->default('MODULE_MARKETPLACE_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('module_marketplace_v2');
    }
};
