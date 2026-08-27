<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('demo_requests_v2')) {
            Schema::create('demo_requests_v2', function (Blueprint $table) {
                $table->id();
                $table->string('demo_code')->default('DEMO-REQ-99420');
                $table->integer('demo_requests_count')->default(18400);
                $table->string('demo_type')->default('Automated Personalized Multimodal Demo');
                $table->string('status')->default('DEMO_SCHEDULED_AUTOMATED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('demo_requests_v2');
    }
};
