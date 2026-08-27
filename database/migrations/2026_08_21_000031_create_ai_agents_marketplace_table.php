<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_agents_marketplace')) {
            Schema::create('ai_agents_marketplace', function (Blueprint $table) {
                $table->id();
                $table->string('agent_name');
                $table->string('category');
                $table->decimal('monthly_price', 10, 2)->default(999.00);
                $table->decimal('rating', 3, 2)->default(4.90);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_agents_marketplace');
    }
};
