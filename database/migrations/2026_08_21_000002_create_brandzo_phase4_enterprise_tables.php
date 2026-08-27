<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('whatsapp_templates')) {
            Schema::create('whatsapp_templates', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('company_id')->default(1);
                $table->string('name');
                $table->string('event');
                $table->text('template_body');
                $table->boolean('status')->default(1);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('lead_automation_settings')) {
            Schema::create('lead_automation_settings', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('company_id')->default(1);
                $table->boolean('auto_assignment')->default(1);
                $table->enum('assignment_method', ['round_robin', 'load_balanced'])->default('round_robin');
                $table->integer('last_assigned_user_id')->nullable();
                $table->boolean('auto_score_enabled')->default(1);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('lead_automation_settings');
        Schema::dropIfExists('whatsapp_templates');
    }
};
