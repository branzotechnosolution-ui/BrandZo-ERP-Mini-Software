<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_b2b_matches')) {
            Schema::create('enterprise_b2b_matches', function (Blueprint $table) {
                $table->id();
                $table->string('requesting_company');
                $table->string('partner_company');
                $table->decimal('deal_value', 15, 2)->default(1250000.00);
                $table->string('status')->default('Contract Auto-Generated');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_b2b_matches');
    }
};
