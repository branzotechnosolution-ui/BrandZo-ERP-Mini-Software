<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('proposals_v2')) {
            Schema::create('proposals_v2', function (Blueprint $table) {
                $table->id();
                $table->string('proposal_code')->default('PRP-GEN-99420');
                $table->decimal('proposal_generation_sec', 5, 2)->default(0.42);
                $table->string('status')->default('PROPOSAL_ENGINE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('proposals_v2');
    }
};
