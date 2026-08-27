<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_evolution_documents_v2')) {
            Schema::create('crm_evolution_documents_v2', function (Blueprint $table) {
                $table->id();
                $table->string('doc_code')->default('DOC-CRM-99420');
                $table->unsignedBigInteger('lead_id')->nullable();
                $table->unsignedBigInteger('deal_id')->nullable();
                $table->unsignedBigInteger('client_id')->nullable();
                $table->string('document_title')->default('Acme Enterprise Proposal & Contract.pdf');
                $table->string('file_path')->default('uploads/crm/proposal_acme_2026.pdf');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_evolution_documents_v2');
    }
};
