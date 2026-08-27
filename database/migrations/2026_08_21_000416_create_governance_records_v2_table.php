<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('governance_records_v2')) {
            Schema::create('governance_records_v2', function (Blueprint $table) {
                $table->id();
                $table->string('governance_record_code')->default('GOV-REC-139-9942');
                $table->decimal('governance_score', 5, 2)->default(100.00);
                $table->string('status')->default('GOVERNANCE_BRAIN_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('governance_records_v2');
    }
};
