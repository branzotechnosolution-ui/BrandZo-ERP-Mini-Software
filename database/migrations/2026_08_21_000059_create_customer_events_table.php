<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_events')) {
            Schema::create('customer_events', function (Blueprint $table) {
                $table->id();
                $table->string('customer_id');
                $table->string('event_name');
                $table->json('event_data')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_events');
    }
};
