<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('mobile_releases_v2')) {
            Schema::create('mobile_releases_v2', function (Blueprint $table) {
                $table->id();
                $table->string('release_code')->default('MOB-REL-157-9942');
                $table->string('app_version')->default('v3.4.0');
                $table->string('status')->default('MOBILE_RELEASE_READY');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('mobile_releases_v2');
    }
};
