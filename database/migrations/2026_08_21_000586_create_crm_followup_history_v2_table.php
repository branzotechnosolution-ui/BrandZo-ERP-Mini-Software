<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_followup_history_v2')) {
            Schema::create('crm_followup_history_v2', function (Blueprint $table) {
                $table->id();
                $table->string('history_code')->default('HIS-FLW-99420');
                $table->unsignedBigInteger('followup_id')->nullable();
                $table->string('action')->default('FOLLOWUP_CREATED');
                $table->text('details')->default('Follow-up task scheduled for Call with Acme Global Enterprises.');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_followup_history_v2');
    }
};
