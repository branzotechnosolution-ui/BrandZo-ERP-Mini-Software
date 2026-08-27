<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('due_diligence_records')) {
            Schema::create('due_diligence_records', function (Blueprint $table) {
                $table->id();
                $table->string('data_room_code')->default('VDR-BRANDZO-SERIES-B');
                $table->decimal('compliance_score', 5, 2)->default(100.00);
                $table->string('audit_status')->default('CLEAN_AUDIT_PASSED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('due_diligence_records');
    }
};
