<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('autonomous_workflows')) {
            Schema::create('autonomous_workflows', function (Blueprint $table) {
                $table->id();
                $table->string('workflow_title');
                $table->string('trigger_event');
                $table->json('action_chain')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('autonomous_workflows');
    }
};
