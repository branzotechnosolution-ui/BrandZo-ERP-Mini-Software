<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('support_tickets_v2')) {
            Schema::create('support_tickets_v2', function (Blueprint $table) {
                $table->id();
                $table->string('ticket_code')->default('TCK-SUP-130-9942');
                $table->string('customer_name')->default('Global Enterprise Alpha');
                $table->string('priority')->default('HIGH_PRIORITY_AUTO_RESOLVED');
                $table->string('status')->default('RESOLVED_AUTONOMOUSLY');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('support_tickets_v2');
    }
};
