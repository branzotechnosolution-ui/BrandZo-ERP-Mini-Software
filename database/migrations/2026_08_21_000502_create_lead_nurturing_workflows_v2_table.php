<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('lead_nurturing_workflows_v2')) {
            Schema::create('lead_nurturing_workflows_v2', function (Blueprint $table) {
                $table->id();
                $table->string('workflow_code')->default('NUR-WFK-99420');
                $table->decimal('lead_to_customer_conversion_rate', 5, 2)->default(52.40);
                $table->string('status')->default('LEAD_NURTURING_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('lead_nurturing_workflows_v2');
    }
};
