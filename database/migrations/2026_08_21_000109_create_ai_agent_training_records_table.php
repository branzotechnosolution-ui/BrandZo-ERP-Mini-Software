<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_agent_training_records')) {
            Schema::create('ai_agent_training_records', function (Blueprint $table) {
                $table->id();
                $table->string('agent_id');
                $table->string('training_source')->default('Knowledge Brain + Digital Twin Memory');
                $table->decimal('accuracy_boost_percentage', 5, 2)->default(99.40);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_agent_training_records');
    }
};
