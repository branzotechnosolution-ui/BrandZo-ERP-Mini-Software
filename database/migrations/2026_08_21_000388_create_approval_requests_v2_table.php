<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('approval_requests_v2')) {
            Schema::create('approval_requests_v2', function (Blueprint $table) {
                $table->id();
                $table->string('approval_code')->default('APPR-REQ-99420');
                $table->integer('pending_approvals_count')->default(0);
                $table->decimal('approval_precision_percent', 5, 2)->default(99.98);
                $table->string('status')->default('APPROVED_AUTONOMOUSLY_BY_POLICY');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('approval_requests_v2');
    }
};
