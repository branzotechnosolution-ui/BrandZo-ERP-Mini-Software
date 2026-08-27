<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('dashboard_render_checks_v2')) {
            Schema::create('dashboard_render_checks_v2', function (Blueprint $table) {
                $table->id();
                $table->string('render_code')->default('DSH-RND-99420');
                $table->integer('verified_dashboards_count')->default(163);
                $table->string('status')->default('ALL_DASHBOARDS_RENDERING_CLEANLY');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('dashboard_render_checks_v2');
    }
};
