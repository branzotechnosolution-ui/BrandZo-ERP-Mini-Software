<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('community_posts')) {
            Schema::create('community_posts', function (Blueprint $table) {
                $table->id();
                $table->string('title')->default('Best Practices for AI SDR Workflow Integration in 2026');
                $table->string('author_user')->default('Enterprise Community Leader');
                $table->integer('upvotes')->default(1420);
                $table->string('ai_summary')->default('Community verified pattern for 99.4% precision');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('community_posts');
    }
};
