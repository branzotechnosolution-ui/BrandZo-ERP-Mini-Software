<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_accounts_v2')) {
            Schema::create('customer_accounts_v2', function (Blueprint $table) {
                $table->id();
                $table->string('customer_code')->default('CUST-ACC-99420');
                $table->string('company_name')->default('BrandZo Global Enterprise Corp');
                $table->decimal('activation_score', 5, 2)->default(99.80);
                $table->string('status')->default('CUSTOMER_ACTIVATED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_accounts_v2');
    }
};
