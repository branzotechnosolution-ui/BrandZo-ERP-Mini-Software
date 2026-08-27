<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('marketplace_orders_v2')) {
            Schema::create('marketplace_orders_v2', function (Blueprint $table) {
                $table->id();
                $table->string('order_code')->default('ORD-COMM-99420');
                $table->decimal('gmv_usd', 12, 2)->default(14200000.00);
                $table->string('fulfillment_status')->default('AUTONOMOUSLY_FULFILLED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('marketplace_orders_v2');
    }
};
