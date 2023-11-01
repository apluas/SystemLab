<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams_templates_parameters', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('tbl_exams_templates_main');
            $table->integer('tbl_type_parameter_template');
            $table->integer('tbl_config_interpretation_templates');
            $table->integer('tbl_result_input_option_main')->nullable();
            $table->integer('tbl_result_input_option_details')->nullable();
            $table->integer('order')->nullable();
            $table->string('name');
            $table->string('abbreviation')->nullable();
            $table->integer('tbl_genders')->nullable();
            $table->string('unity')->nullable();
            $table->integer('value_defect')->nullable();
            $table->string('value_normal')->nullable();
            $table->string('value_min')->nullable();
            $table->string('value_max')->nullable();
            $table->string('value_min_critical')->nullable();
            $table->string('value_max_critical')->nullable();
            $table->longText('references_critical')->nullable();
            $table->string('qr_url')->nullable();
            $table->string('image_url')->nullable();
            $table->string('image_name')->nullable();
            $table->string('html')->nullable();
            $table->longText('interpretation')->nullable();
            $table->string('show_value_references')->default('INACTIVO');
            $table->string('show_pdf')->default('ACTIVO');
            $table->string('show_interpretation')->default('INACTIVO');
            $table->string('status')->default('ACTIVO');
            $table->integer('created_by_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams_templates_parameters');
    }
};
