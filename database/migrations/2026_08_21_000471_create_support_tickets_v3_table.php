<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('support_tickets_v3')) {
            Schema::create('support_tickets_v3', function (Blueprint $table) {
                $table->id();
                $table->string('ticket_code')->default('TCK-SUP-99420');
                $table->integer('active_tickets_count')->default(14200);
                $table->decimal('self_service_resolution_rate', 5, 2)->default(94.80);
                $table->string('status')->default('TICKET_MANAGEMENT_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('support_tickets_v3');
    }
};
