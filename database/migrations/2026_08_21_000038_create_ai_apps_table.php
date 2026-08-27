<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_apps')) {
            Schema::create('ai_apps', function (Blueprint $table) {
                $table->id();
                $table->string('app_name');
                $table->string('developer');
                $table->string('category');
                $table->decimal('price', 10, 2)->default(1999.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_apps');
    }
};
