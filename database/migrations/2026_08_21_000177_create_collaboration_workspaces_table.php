<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('collaboration_workspaces')) {
            Schema::create('collaboration_workspaces', function (Blueprint $table) {
                $table->id();
                $table->string('workspace_name')->default('Global Engineering & Product Room');
                $table->string('department')->default('Global R&D / AI Product Engineering');
                $table->integer('members_count')->default(384);
                $table->string('status')->default('ACTIVE_REALTIME_SYNC');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('collaboration_workspaces');
    }
};
