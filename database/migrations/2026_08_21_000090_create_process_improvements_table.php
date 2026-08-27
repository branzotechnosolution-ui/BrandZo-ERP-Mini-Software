<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('process_improvements')) {
            Schema::create('process_improvements', function (Blueprint $table) {
                $table->id();
                $table->string('process_name')->default('Invoice Approval & Tax Reconciliation');
                $table->decimal('inefficiency_time_saved_hours', 8, 2)->default(14.50);
                $table->string('sop_generated_version')->default('SOP-v3.4-Auto');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('process_improvements');
    }
};
