<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('regional_configurations')) {
            Schema::create('regional_configurations', function (Blueprint $table) {
                $table->id();
                $table->string('country_code')->default('US');
                $table->string('currency')->default('USD ($)');
                $table->string('tax_rate_policy')->default('Automated US State Sales Tax / VAT');
                $table->string('localization_locale')->default('en-US');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('regional_configurations');
    }
};
