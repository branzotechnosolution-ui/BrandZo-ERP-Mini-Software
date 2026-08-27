<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('sales_leads_v2')) {
            Schema::create('sales_leads_v2', function (Blueprint $table) {
                $table->id();
                $table->string('lead_code')->default('LEAD-SALES-143-9942');
                $table->integer('total_leads_count')->default(142500);
                $table->integer('hot_leads_count')->default(38400);
                $table->string('status')->default('QUALIFIED_ENTERPRISE_LEAD');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('sales_leads_v2');
    }
};
