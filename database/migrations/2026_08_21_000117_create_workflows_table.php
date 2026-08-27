<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('workflows')) {
            Schema::create('workflows', function (Blueprint $table) {
                $table->id();
                $table->string('workflow_title')->default('Autonomous Healthcare Invoice & Payroll Approval');
                $table->string('category')->default('Finance / Operations Automation');
                $table->integer('step_count')->default(8);
                $table->string('status')->default('Active & Autonomous');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('workflows');
    }
};
