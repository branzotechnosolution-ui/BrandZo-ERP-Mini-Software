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
        if (Schema::hasTable('purchase_settings')) {
Schema::table('purchase_settings', function (Blueprint $table) use ('purchase_settings') {
            $table->text('purchase_terms')->nullable(); }

        }); }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('purchase_setting', function (Blueprint $table) {
            $table->dropColumn('purchase_terms'); }
        }); }
    }
};
