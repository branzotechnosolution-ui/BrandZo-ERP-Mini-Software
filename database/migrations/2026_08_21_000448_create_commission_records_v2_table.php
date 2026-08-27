<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('commission_records_v2')) {
            Schema::create('commission_records_v2', function (Blueprint $table) {
                $table->id();
                $table->string('commission_code')->default('CMSN-REC-99420');
                $table->decimal('total_commission_paid_usd', 12, 2)->default(4820000.00);
                $table->decimal('revenue_share_percent', 5, 2)->default(25.00);
                $table->string('status')->default('COMMISSION_CALCULATED_AUTOMATED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('commission_records_v2');
    }
};
