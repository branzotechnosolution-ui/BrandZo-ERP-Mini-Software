<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('access_governance_logs_v2')) {
            Schema::create('access_governance_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('governance_code')->default('GOV-LOG-99420');
                $table->integer('unauthorized_escalations')->default(0);
                $table->string('least_privilege_enforcement')->default('STRICT_LEAST_PRIVILEGE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('access_governance_logs_v2');
    }
};
