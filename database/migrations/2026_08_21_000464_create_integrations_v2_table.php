<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('integrations_v2')) {
            Schema::create('integrations_v2', function (Blueprint $table) {
                $table->id();
                $table->string('integration_code')->default('INT-HUB-147-9942');
                $table->integer('active_connectors_count')->default(384);
                $table->string('status')->default('INTEGRATION_MARKETPLACE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('integrations_v2');
    }
};
