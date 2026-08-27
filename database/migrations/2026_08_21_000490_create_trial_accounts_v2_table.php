<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('trial_accounts_v2')) {
            Schema::create('trial_accounts_v2', function (Blueprint $table) {
                $table->id();
                $table->string('trial_code')->default('TRL-ACC-99420');
                $table->integer('active_trial_accounts_count')->default(4280);
                $table->integer('trial_duration_days')->default(14);
                $table->string('status')->default('TRIAL_SYSTEM_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('trial_accounts_v2');
    }
};
