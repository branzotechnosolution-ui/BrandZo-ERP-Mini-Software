<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('renewal_records_v2')) {
            Schema::create('renewal_records_v2', function (Blueprint $table) {
                $table->id();
                $table->string('renewal_code')->default('RNW-REC-99420');
                $table->decimal('contract_renewal_rate_percent', 5, 2)->default(98.40);
                $table->string('status')->default('RENEWAL_INTELLIGENCE_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('renewal_records_v2');
    }
};
