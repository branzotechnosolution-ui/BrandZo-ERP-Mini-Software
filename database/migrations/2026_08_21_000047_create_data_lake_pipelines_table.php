<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('data_lake_pipelines')) {
            Schema::create('data_lake_pipelines', function (Blueprint $table) {
                $table->id();
                $table->string('pipeline_name');
                $table->string('source_type')->default('CRM & ERP & Finance');
                $table->string('status')->default('Real-Time ETL Active');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('data_lake_pipelines');
    }
};
