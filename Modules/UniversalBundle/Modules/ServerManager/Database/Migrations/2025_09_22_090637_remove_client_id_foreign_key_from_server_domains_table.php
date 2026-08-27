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
        if (Schema::hasTable('server_domains')) {
Schema::table('server_domains', function (Blueprint $table) use ('server_domains') {
            $table->dropForeign(['client_id']); }
        }); }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('server_domains')) {
Schema::table('server_domains', function (Blueprint $table) use ('server_domains') {
            $table->foreign('client_id')->references('id')->on('client_details')->onDelete('set null'); }
        }); }
    }
};