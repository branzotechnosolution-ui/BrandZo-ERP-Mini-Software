<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('rnd_projects_v2')) {
            Schema::create('rnd_projects_v2', function (Blueprint $table) {
                $table->id();
                $table->string('project_code')->default('RND-PROJ-99420');
                $table->string('name')->default('Next-Gen Zero-Latency Vector Memory Graph');
                $table->integer('active_initiatives_count')->default(384);
                $table->string('stage')->default('ACTIVE_RND_SPRINT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('rnd_projects_v2');
    }
};
