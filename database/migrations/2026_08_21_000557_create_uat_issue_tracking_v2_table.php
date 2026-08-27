<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('uat_issue_tracking_v2')) {
            Schema::create('uat_issue_tracking_v2', function (Blueprint $table) {
                $table->id();
                $table->string('issue_code')->default('ISS-TRK-99420');
                $table->integer('open_issues_count')->default(0);
                $table->string('status')->default('ZERO_OPEN_UAT_ISSUES');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('uat_issue_tracking_v2');
    }
};
