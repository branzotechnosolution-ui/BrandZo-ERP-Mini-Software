<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('legal_counsel_records_v2')) {
            Schema::create('legal_counsel_records_v2', function (Blueprint $table) {
                $table->id();
                $table->string('counsel_code')->default('LGL-CNSL-118-9942');
                $table->decimal('policy_alignment_percent', 5, 2)->default(100.00);
                $table->integer('unverified_agreements_count')->default(0);
                $table->string('status')->default('AUTONOMOUS_LEGAL_BRAIN_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('legal_counsel_records_v2');
    }
};
