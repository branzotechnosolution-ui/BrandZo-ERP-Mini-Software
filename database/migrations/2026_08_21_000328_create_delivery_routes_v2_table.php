<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('delivery_routes_v2')) {
            Schema::create('delivery_routes_v2', function (Blueprint $table) {
                $table->id();
                $table->string('route_code')->default('ROUTE-OPT-99420');
                $table->decimal('fuel_cost_reduction_percent', 5, 2)->default(38.40);
                $table->string('route_status')->default('DYNAMIC_ROUTE_OPTIMIZED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('delivery_routes_v2');
    }
};
