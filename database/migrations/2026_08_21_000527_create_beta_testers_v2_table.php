<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('beta_testers_v2')) {
            Schema::create('beta_testers_v2', function (Blueprint $table) {
                $table->id();
                $table->string('beta_code')->default('BETA-TST-99420');
                $table->integer('active_beta_testers_count')->default(4800);
                $table->string('status')->default('TESTFLIGHT_PLAY_BETA_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('beta_testers_v2');
    }
};
