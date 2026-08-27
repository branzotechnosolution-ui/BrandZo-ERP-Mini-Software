<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('server_hostings')) {
Schema::table('server_hostings', function (Blueprint $table) use ('server_hostings') {
            $table->dropForeign(['created_by']); }
            $table->unsignedBigInteger('created_by')->nullable(false)->change(); }
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade'); }
        }); }

        Schema::table('server_domains', function (Blueprint $table) {
            $table->dropForeign(['created_by']); }
            $table->unsignedBigInteger('created_by')->nullable(false)->change(); }
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade'); }
        }); }

        Schema::table('server_logs', function (Blueprint $table) {
            $table->dropForeign(['performed_by']); }
            $table->unsignedBigInteger('performed_by')->nullable(false)->change(); }
            $table->foreign('performed_by')->references('id')->on('users')->onDelete('cascade'); }
        }); }
    }
};
