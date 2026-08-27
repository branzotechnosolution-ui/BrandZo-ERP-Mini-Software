<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('executive_decisions')) {
            Schema::create('executive_decisions', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('category');
                $table->text('reasoning');
                $table->string('status')->default('Approved by CEO');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('executive_decisions');
    }
};
