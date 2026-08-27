<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_deals')) {
            Schema::create('enterprise_deals', function (Blueprint $table) {
                $table->id();
                $table->string('deal_title')->default('Global Enterprise 10,000 Seat License');
                $table->string('company_name');
                $table->decimal('deal_value_usd', 12, 2)->default(142000.00);
                $table->string('stage')->default('Proposal Approved & Contract Signed');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_deals');
    }
};
