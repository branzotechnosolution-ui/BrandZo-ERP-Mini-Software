<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_import_column_mappings_v2')) {
            Schema::create('crm_import_column_mappings_v2', function (Blueprint $table) {
                $table->id();
                $table->string('mapping_code')->default('MAP-COL-99420');
                $table->unsignedBigInteger('import_id')->nullable();
                $table->string('csv_header')->default('Organization');
                $table->string('crm_field')->default('company_name');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_import_column_mappings_v2');
    }
};
