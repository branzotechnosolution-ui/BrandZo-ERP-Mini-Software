<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('account_growth_scores')) {
            Schema::create('account_growth_scores', function (Blueprint $table) {
                $table->id();
                $table->string('tenant_slug');
                $table->integer('growth_score')->default(98);
                $table->decimal('adoption_rate_percentage', 5, 2)->default(94.20);
                $table->string('health_status')->default('Hyper-Growth Account');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('account_growth_scores');
    }
};
