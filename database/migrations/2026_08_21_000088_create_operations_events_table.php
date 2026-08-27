<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('operations_events')) {
            Schema::create('operations_events', function (Blueprint $table) {
                $table->id();
                $table->string('event_type')->default('SLA_BOTTLENECK_DETECTED');
                $table->string('module')->default('CRM / Projects / HRMS / Finance');
                $table->string('severity')->default('HIGH');
                $table->string('auto_resolved_status')->default('Resolved Automatically');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('operations_events');
    }
};
