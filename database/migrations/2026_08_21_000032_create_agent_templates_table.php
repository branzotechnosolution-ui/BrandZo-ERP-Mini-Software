<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('agent_templates')) {
            Schema::create('agent_templates', function (Blueprint $table) {
                $table->id();
                $table->string('template_name');
                $table->string('role');
                $table->json('tools_access')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('agent_templates');
    }
};
