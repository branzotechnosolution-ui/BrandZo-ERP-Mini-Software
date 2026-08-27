<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('data_lake_records_v2')) {
            Schema::create('data_lake_records_v2', function (Blueprint $table) {
                $table->id();
                $table->string('lake_record_code')->default('LAKE-ENT-136-9942');
                $table->string('data_lake_size')->default('14.2 Petabytes');
                $table->integer('connected_systems_count')->default(136);
                $table->string('status')->default('DATA_LAKE_BRAIN_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('data_lake_records_v2');
    }
};
