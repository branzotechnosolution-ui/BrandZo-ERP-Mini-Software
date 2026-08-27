<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('document_intelligence_v2')) {
            Schema::create('document_intelligence_v2', function (Blueprint $table) {
                $table->id();
                $table->string('intel_code')->default('DOC-INTEL-99420');
                $table->integer('documents_indexed')->default(384000);
                $table->decimal('extraction_accuracy_percent', 5, 2)->default(99.98);
                $table->string('status')->default('PDF_DOC_ANALYSIS_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('document_intelligence_v2');
    }
};
