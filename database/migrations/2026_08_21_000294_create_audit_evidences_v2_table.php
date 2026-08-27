<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('audit_evidences_v2')) {
            Schema::create('audit_evidences_v2', function (Blueprint $table) {
                $table->id();
                $table->string('evidence_code')->default('EVD-AUDIT-2026-9942');
                $table->string('evidence_vault_status')->default('ENCRYPTED_ZERO_KNOWLEDGE_VAULT');
                $table->decimal('retrieval_latency_ms', 5, 2)->default(0.42);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('audit_evidences_v2');
    }
};
