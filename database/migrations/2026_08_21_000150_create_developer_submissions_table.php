<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('developer_submissions')) {
            Schema::create('developer_submissions', function (Blueprint $table) {
                $table->id();
                $table->string('app_title')->default('Custom Industry ERP Connector v2.0');
                $table->string('developer_id')->default('DEV-84920');
                $table->string('review_status')->default('APPROVED_LIVE');
                $table->decimal('revenue_share_percentage', 5, 2)->default(70.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('developer_submissions');
    }
};
