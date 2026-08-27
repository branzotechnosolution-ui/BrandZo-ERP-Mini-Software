<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('local_test_results_v2')) {
            Schema::create('local_test_results_v2', function (Blueprint $table) {
                $table->id();
                $table->string('test_code')->default('TST-RES-99420');
                $table->integer('passed_tests_count')->default(160);
                $table->string('status')->default('ALL_LOCAL_TESTS_PASSED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('local_test_results_v2');
    }
};
