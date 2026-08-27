<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('agent_training_logs_v2')) {
            Schema::create('agent_training_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('training_code')->default('TRN-LOG-99420');
                $table->decimal('training_accuracy_percent', 5, 2)->default(99.80);
                $table->string('status')->default('AGENT_TRAINING_ENGINE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('agent_training_logs_v2');
    }
};
