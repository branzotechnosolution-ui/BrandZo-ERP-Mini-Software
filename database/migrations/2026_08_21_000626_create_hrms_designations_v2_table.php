<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('hrms_designations_v2')) {
            Schema::create('hrms_designations_v2', function (Blueprint $table) {
                $table->id();
                $table->string('designation_code')->default('DSG-2026-9942');
                $table->string('title')->default('Lead Software Architect');
                $table->string('department')->default('Engineering & AI');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('hrms_designations_v2');
    }
};
