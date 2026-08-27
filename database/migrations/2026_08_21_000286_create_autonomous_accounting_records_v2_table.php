<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('autonomous_accounting_records_v2')) {
            Schema::create('autonomous_accounting_records_v2', function (Blueprint $table) {
                $table->id();
                $table->string('record_code')->default('ACC-AUTO-99420');
                $table->decimal('reconciliation_accuracy_percent', 5, 2)->default(99.98);
                $table->integer('reconciled_transactions_count')->default(1840000);
                $table->string('human_intervention_required')->default('NONE (0 Manual Edits)');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('autonomous_accounting_records_v2');
    }
};
