<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('purchase_intelligence_v2')) {
            Schema::create('purchase_intelligence_v2', function (Blueprint $table) {
                $table->id();
                $table->string('purchase_code')->default('PURCH-BZ-99420');
                $table->decimal('cost_savings_usd', 12, 2)->default(4280000.00);
                $table->string('approval_status')->default('AUTONOMOUSLY_APPROVED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('purchase_intelligence_v2');
    }
};
