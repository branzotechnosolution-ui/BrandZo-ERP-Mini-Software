<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('sync_jobs')) {
            Schema::create('sync_jobs', function (Blueprint $table) {
                $table->id();
                $table->string('job_id')->default('SYNC-JOB-84920');
                $table->string('integration_name')->default('QuickBooks Accounting Sync');
                $table->integer('records_processed')->default(14200);
                $table->string('status')->default('Completed (0 Conflicts)');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('sync_jobs');
    }
};
