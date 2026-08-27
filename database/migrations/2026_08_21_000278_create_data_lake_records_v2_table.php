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
                $table->string('lake_code')->default('LAKE-BZ-116-9942');
                $table->decimal('processed_petabytes', 8, 2)->default(14.20);
                $table->string('storage_tier')->default('MULTI_REGION_HOT_COLD_HYBRID');
                $table->string('status')->default('REALTIME_INDEXED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('data_lake_records_v2');
    }
};
