<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('partner_certifications_v2')) {
            Schema::create('partner_certifications_v2', function (Blueprint $table) {
                $table->id();
                $table->string('certification_code')->default('CERT-BZ-PARTNER-9942');
                $table->string('certification_name')->default('Certified BrandZo AI Solutions Architect');
                $table->integer('certified_partners_count')->default(10000);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_certifications_v2');
    }
};
