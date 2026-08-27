<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('certifications_v2')) {
            Schema::create('certifications_v2', function (Blueprint $table) {
                $table->id();
                $table->string('cert_code')->default('CERT-DIG-99420');
                $table->integer('issued_certificates_count')->default(184000);
                $table->string('verification_status')->default('CRYPTOGRAPHIC_VERIFIED');
                $table->string('status')->default('CERTIFICATION_SYSTEM_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('certifications_v2');
    }
};
