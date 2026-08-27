<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('prospect_database_v2')) {
            Schema::create('prospect_database_v2', function (Blueprint $table) {
                $table->id();
                $table->string('prospect_code')->default('PRS-DB-152-9942');
                $table->integer('verified_prospects_count')->default(52000);
                $table->string('status')->default('PROSPECT_DATABASE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('prospect_database_v2');
    }
};
