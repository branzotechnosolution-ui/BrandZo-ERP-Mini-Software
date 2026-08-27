<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_agent_versions')) {
            Schema::create('ai_agent_versions', function (Blueprint $table) {
                $table->id();
                $table->string('agent_id');
                $table->string('version_number')->default('v3.4.0');
                $table->text('change_summary')->nullable();
                $table->string('status')->default('Live Production');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_agent_versions');
    }
};
