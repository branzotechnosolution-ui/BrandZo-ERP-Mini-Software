<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('team_collaboration_v2')) {
            Schema::create('team_collaboration_v2', function (Blueprint $table) {
                $table->id();
                $table->string('collab_code')->default('COL-TEAM-99420');
                $table->decimal('collaboration_health_percent', 5, 2)->default(99.98);
                $table->string('status')->default('TEAM_HARMONY_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('team_collaboration_v2');
    }
};
