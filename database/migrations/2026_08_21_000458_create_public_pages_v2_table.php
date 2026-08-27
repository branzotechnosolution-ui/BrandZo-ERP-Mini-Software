<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('public_pages_v2')) {
            Schema::create('public_pages_v2', function (Blueprint $table) {
                $table->id();
                $table->string('page_code')->default('PAGE-PUB-146-9942');
                $table->string('title')->default('BrandZo AI Enterprise Operating System');
                $table->string('slug')->default('/');
                $table->string('status')->default('PUBLIC_PAGE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('public_pages_v2');
    }
};
