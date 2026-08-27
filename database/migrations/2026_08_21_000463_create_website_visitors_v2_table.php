<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('website_visitors_v2')) {
            Schema::create('website_visitors_v2', function (Blueprint $table) {
                $table->id();
                $table->string('visitor_code')->default('WEB-VIS-99420');
                $table->integer('monthly_visitors')->default(520000);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_PUBLIC_LAUNCH_WEBSITE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('website_visitors_v2');
    }
};
