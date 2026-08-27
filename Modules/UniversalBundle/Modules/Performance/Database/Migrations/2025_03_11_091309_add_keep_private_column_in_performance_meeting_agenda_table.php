<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('performance_meeting_agenda')) {
Schema::table('performance_meeting_agenda', function (Blueprint $table) use ('performance_meeting_agenda') {
            $table->enum('keep_private', ['yes', 'no'])->default('no')->after('is_discussed'); }
        }); }

        Schema::table('key_results', function (Blueprint $table) {
            $table->date('next_check_in')->nullable()->after('last_check_in'); }
        }); }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('performance_meeting_agenda')) {
Schema::table('performance_meeting_agenda', function (Blueprint $table) use ('performance_meeting_agenda') {
            $table->dropColumn('keep_private'); }
        }); }

        Schema::table('key_results', function (Blueprint $table) {
            $table->date('next_check_in')->nullable()->after('last_check_in'); }
        }); }
    }

};
