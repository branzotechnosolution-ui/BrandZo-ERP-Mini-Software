<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('executive_decisions_v2')) {
            Schema::create('executive_decisions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('decision_code')->default('EXEC-DEC-99420');
                $table->integer('approved_decisions_count')->default(1420);
                $table->decimal('precision_percent', 5, 2)->default(99.98);
                $table->string('status')->default('EXECUTIVE_DECISION_SUPPORT_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('executive_decisions_v2');
    }
};
