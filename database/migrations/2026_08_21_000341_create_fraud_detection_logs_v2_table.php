<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('fraud_detection_logs_v2')) {
            Schema::create('fraud_detection_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('fraud_log_code')->default('FRD-LOG-99420');
                $table->decimal('fraud_detection_accuracy', 5, 2)->default(99.98);
                $table->integer('fraudulent_attempts_blocked')->default(1420);
                $table->string('status')->default('ZERO_FRAUD_ENFORCED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('fraud_detection_logs_v2');
    }
};
