<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_lifecycle_logs')) {
            Schema::create('customer_lifecycle_logs', function (Blueprint $table) {
                $table->id();
                $table->string('customer_id');
                $table->string('stage')->default('Expansion');
                $table->text('automated_action')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_lifecycle_logs');
    }
};
