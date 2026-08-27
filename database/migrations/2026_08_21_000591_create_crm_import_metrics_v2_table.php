<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_import_metrics_v2')) {
            Schema::create('crm_import_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('MTR-IMP-99420');
                $table->integer('total_imports_count')->default(18);
                $table->integer('total_imported_leads')->default(8450);
                $table->decimal('import_success_rate', 5, 2)->default(98.40);
                $table->string('status')->default('BULK_IMPORT_ENGINE_EXCELLENT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_import_metrics_v2');
    }
};
