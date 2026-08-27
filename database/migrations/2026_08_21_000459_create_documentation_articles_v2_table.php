<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('documentation_articles_v2')) {
            Schema::create('documentation_articles_v2', function (Blueprint $table) {
                $table->id();
                $table->string('article_code')->default('DOC-ART-99420');
                $table->integer('articles_count')->default(14200);
                $table->string('status')->default('DOCUMENTATION_ARTICLE_PUBLISHED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('documentation_articles_v2');
    }
};
