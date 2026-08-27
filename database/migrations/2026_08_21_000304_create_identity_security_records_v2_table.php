<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('identity_security_records_v2')) {
            Schema::create('identity_security_records_v2', function (Blueprint $table) {
                $table->id();
                $table->string('identity_code')->default('ID-SEC-99420');
                $table->decimal('verification_accuracy_percent', 5, 2)->default(100.00);
                $table->string('zero_trust_status')->default('100_PERCENT_ENFORCED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('identity_security_records_v2');
    }
};
