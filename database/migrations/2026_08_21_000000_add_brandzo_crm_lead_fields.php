<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('leads')) {
            Schema::table('leads', function (Blueprint $table) {
                if (!Schema::hasColumn('leads', 'service_required')) {
                    $table->string('service_required')->nullable()->after('client_requirement');
                }
                if (!Schema::hasColumn('leads', 'priority')) {
                    $table->enum('priority', ['low', 'medium', 'high', 'urgent'])->default('medium')->after('status_id');
                }
                if (!Schema::hasColumn('leads', 'call_history')) {
                    $table->json('call_history')->nullable()->after('note');
                }
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('leads')) {
            Schema::table('leads', function (Blueprint $table) {
                if (Schema::hasColumn('leads', 'service_required')) {
                    $table->dropColumn('service_required');
                }
                if (Schema::hasColumn('leads', 'priority')) {
                    $table->dropColumn('priority');
                }
                if (Schema::hasColumn('leads', 'call_history')) {
                    $table->dropColumn('call_history');
                }
            });
        }
    }
};
