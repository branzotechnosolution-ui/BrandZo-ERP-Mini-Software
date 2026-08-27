<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('learning_paths_v2')) {
            Schema::create('learning_paths_v2', function (Blueprint $table) {
                $table->id();
                $table->string('path_code')->default('PATH-LRN-99420');
                $table->integer('active_learners_count')->default(520000);
                $table->string('status')->default('LEARNING_PATH_PERSONALIZED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('learning_paths_v2');
    }
};
