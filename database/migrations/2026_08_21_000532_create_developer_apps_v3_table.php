<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('developer_apps_v3')) {
            Schema::create('developer_apps_v3', function (Blueprint $table) {
                $table->id();
                $table->string('app_code')->default('DEV-APP-99420');
                $table->integer('published_plugins_count')->default(1280);
                $table->string('status')->default('PLUGIN_MARKETPLACE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('developer_apps_v3');
    }
};
