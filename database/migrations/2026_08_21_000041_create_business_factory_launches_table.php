<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('business_factory_launches')) {
            Schema::create('business_factory_launches', function (Blueprint $table) {
                $table->id();
                $table->string('business_name');
                $table->string('industry')->default('Healthcare SaaS');
                $table->string('launch_status')->default('100% Fully Launched');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('business_factory_launches');
    }
};
