<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_import_duplicate_logs_v2')) {
            Schema::create('crm_import_duplicate_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('dup_code')->default('DUP-LOG-99420');
                $table->unsignedBigInteger('import_id')->nullable();
                $table->string('match_field')->default('email'); // email, phone, company_name
                $table->string('matched_value')->default('john@acmeglobal.com');
                $table->string('action_taken')->default('SKIPPED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_import_duplicate_logs_v2');
    }
};
