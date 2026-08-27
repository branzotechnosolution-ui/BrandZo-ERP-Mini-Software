<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('api_documentation_v2')) {
            Schema::create('api_documentation_v2', function (Blueprint $table) {
                $table->id();
                $table->string('api_doc_code')->default('API-DOC-99420');
                $table->string('spec_version')->default('OpenAPI 3.1 Multimodal');
                $table->string('status')->default('API_DOCUMENTATION_LIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('api_documentation_v2');
    }
};
