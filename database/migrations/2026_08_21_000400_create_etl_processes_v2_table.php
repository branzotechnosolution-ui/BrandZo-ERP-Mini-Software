<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('etl_processes_v2')) {
            Schema::create('etl_processes_v2', function (Blueprint $table) {
                $table->id();
                $table->string('etl_code')->default('ETL-PROC-99420');
                $table->integer('daily_records_ingested')->default(18400000);
                $table->decimal('etl_accuracy_percent', 5, 2)->default(99.98);
                $table->string('status')->default('ETL_AUTOMATION_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('etl_processes_v2');
    }
};
