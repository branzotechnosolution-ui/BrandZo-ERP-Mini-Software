<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_profiles_v3')) {
            Schema::create('customer_profiles_v3', function (Blueprint $table) {
                $table->id();
                $table->string('customer_code')->default('CUST-CRM-128-9942');
                $table->string('customer_name')->default('Global Enterprise Enterprise Alpha');
                $table->decimal('ltv_usd', 12, 2)->default(142000.00);
                $table->string('status')->default('CUSTOMER_360_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_profiles_v3');
    }
};
