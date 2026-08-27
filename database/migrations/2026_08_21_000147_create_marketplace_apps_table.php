<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('marketplace_apps')) {
            Schema::create('marketplace_apps', function (Blueprint $table) {
                $table->id();
                $table->string('app_name')->default('Healthcare Telemedicine Connector Pack');
                $table->string('category')->default('Industry Solution Pack');
                $table->decimal('monthly_price_usd', 10, 2)->default(299.00);
                $table->decimal('rating_score', 3, 2)->default(4.98);
                $table->integer('active_installs')->default(14200);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('marketplace_apps');
    }
};
