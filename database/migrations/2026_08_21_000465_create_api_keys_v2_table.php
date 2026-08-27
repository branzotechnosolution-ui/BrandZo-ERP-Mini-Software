<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('api_keys_v2')) {
            Schema::create('api_keys_v2', function (Blueprint $table) {
                $table->id();
                $table->string('key_code')->default('KEY-API-99420');
                $table->integer('active_keys_count')->default(14200);
                $table->string('status')->default('API_KEY_MANAGEMENT_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('api_keys_v2');
    }
};
