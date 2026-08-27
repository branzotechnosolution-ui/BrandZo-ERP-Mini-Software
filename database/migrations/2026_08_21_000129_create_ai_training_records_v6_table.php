<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_training_records_v6')) {
            Schema::create('ai_training_records_v6', function (Blueprint $table) {
                $table->id();
                $table->string('ai_employee_id');
                $table->string('sop_module')->default('SOP-v4.2 Enterprise Deal Negotiation');
                $table->decimal('skill_accuracy_boost', 5, 2)->default(99.40);
                $table->string('retraining_status')->default('Retrained & Certified');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_training_records_v6');
    }
};
