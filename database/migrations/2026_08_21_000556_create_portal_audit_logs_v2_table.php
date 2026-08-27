<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('portal_audit_logs_v2')) {
            Schema::create('portal_audit_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('portal_code')->default('PTL-AUD-99420');
                $table->string('portals')->default('Admin, Employee, Customer, Partner, Developer, Mobile');
                $table->string('status')->default('PORTAL_AUDIT_EXCELLENT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('portal_audit_logs_v2');
    }
};
