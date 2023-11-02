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
        Schema::create('exams_templates_main', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('tbl_exams');
            $table->integer('tbl_category_exams');
            $table->string('name_template');
            $table->longText('method_template')->nullable();
            $table->longText('reference_template')->nullable();
            $table->string('print_parameters')->default('ACTIVO');
            $table->string('print_method_template')->default('INACTIVO');
            $table->string('print_reference_template')->default('INACTIVO');
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
        Schema::dropIfExists('exams_templates_main');
    }
};
