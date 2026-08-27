<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('partner_performance')) {
            Schema::create('partner_performance', function (Blueprint $table) {
                $table->id();
                $table->string('partner_id');
                $table->integer('deals_closed')->default(42);
                $table->decimal('total_revenue_generated', 15, 2)->default(1840000.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_performance');
    }
};
