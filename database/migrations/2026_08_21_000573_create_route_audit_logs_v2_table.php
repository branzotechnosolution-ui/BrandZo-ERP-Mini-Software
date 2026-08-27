<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('route_audit_logs_v2')) {
            Schema::create('route_audit_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('route_code')->default('RTE-AUD-99420');
                $table->string('status')->default('ALL_ROUTES_AUDITED_AND_VERIFIED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('route_audit_logs_v2');
    }
};
