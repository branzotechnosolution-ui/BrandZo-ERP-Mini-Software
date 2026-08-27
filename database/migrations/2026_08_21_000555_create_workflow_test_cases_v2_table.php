<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('workflow_test_cases_v2')) {
            Schema::create('workflow_test_cases_v2', function (Blueprint $table) {
                $table->id();
                $table->string('case_code')->default('WFK-CAS-99420');
                $table->integer('total_test_cases_count')->default(160);
                $table->string('status')->default('ALL_TEST_CASES_PASSED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('workflow_test_cases_v2');
    }
};
