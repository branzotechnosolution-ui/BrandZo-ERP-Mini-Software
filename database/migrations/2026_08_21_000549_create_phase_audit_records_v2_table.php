<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('phase_audit_records_v2')) {
            Schema::create('phase_audit_records_v2', function (Blueprint $table) {
                $table->id();
                $table->string('audit_code')->default('PHS-AUD-99420');
                $table->integer('total_verified_phases')->default(160);
                $table->string('status')->default('ALL_160_PHASES_VERIFIED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('phase_audit_records_v2');
    }
};
