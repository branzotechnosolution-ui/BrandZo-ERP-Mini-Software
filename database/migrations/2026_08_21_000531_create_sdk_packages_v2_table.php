<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('sdk_packages_v2')) {
            Schema::create('sdk_packages_v2', function (Blueprint $table) {
                $table->id();
                $table->string('sdk_code')->default('SDK-PKG-99420');
                $table->string('supported_languages')->default('TypeScript, Python, PHP, Java, Go, Swift, Kotlin');
                $table->string('status')->default('SDK_MARKETPLACE_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('sdk_packages_v2');
    }
};
