<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_network_nodes')) {
            Schema::create('enterprise_network_nodes', function (Blueprint $table) {
                $table->id();
                $table->string('company_node')->default('BrandZo Global Node-001');
                $table->string('industry_sector')->default('Healthcare & Enterprise SaaS');
                $table->integer('connected_partners')->default(38400);
                $table->string('network_trust_score')->default('100 / 100 Trusted');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_network_nodes');
    }
};
