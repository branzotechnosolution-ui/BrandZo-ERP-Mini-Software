<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('marketplace_apps_v4')) {
            Schema::create('marketplace_apps_v4', function (Blueprint $table) {
                $table->id();
                $table->string('app_name')->default('Healthcare AI Integration Suite 4.0');
                $table->string('category')->default('Enterprise Health & AI');
                $table->decimal('rating', 3, 2)->default(4.98);
                $table->integer('install_count')->default(14200);
                $table->string('status')->default('PUBLISHED_LIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('marketplace_apps_v4');
    }
};
