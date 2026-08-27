<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('intelligence_events')) {
            Schema::create('intelligence_events', function (Blueprint $table) {
                $table->id();
                $table->string('event_type');
                $table->string('source_module');
                $table->text('event_payload')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('intelligence_events');
    }
};
