<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('webhook_events')) {
            Schema::create('webhook_events', function (Blueprint $table) {
                $table->id();
                $table->string('event_type')->default('invoice.payment_succeeded');
                $table->string('target_url')->default('https://api.enterprise.com/webhooks');
                $table->integer('retry_count')->default(0);
                $table->string('delivery_status')->default('Delivered (200 OK)');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('webhook_events');
    }
};
