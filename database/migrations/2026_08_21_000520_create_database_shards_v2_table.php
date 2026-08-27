<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('database_shards_v2')) {
            Schema::create('database_shards_v2', function (Blueprint $table) {
                $table->id();
                $table->string('shard_code')->default('SHD-DB-99420');
                $table->integer('active_shards_count')->default(64);
                $table->string('status')->default('DATABASE_SHARDING_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('database_shards_v2');
    }
};
