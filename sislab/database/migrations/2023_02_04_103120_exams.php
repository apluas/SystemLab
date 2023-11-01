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
        Schema::create('exams', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('tbl_exams_samples_main')->nullable();      //configuracion de la lista de muestras que registra el examen; apunta a la cabecera del listado
            $table->integer('tbl_exams_template_main')->nullable();     //configuracion de la lista de plantillas que registra el examen; apunta a la cabecera del listado
            $table->string('tbl_type_exam')->default('P');              //configuracion del tipo de examen, derivable o procesable
            $table->string('code')->unique();
            $table->string('name')->unique();
            $table->string('name_report')->unique()->nullable();
            $table->integer('order')->nullable();
            $table->integer('hour_process')->default(0);
            $table->integer('minute_process')->default(0);
            $table->integer('tag_print')->default(1);
            $table->string('references')->nullable();
            $table->string('confidential_result')->default('INACTIVO');
            $table->float('price_public', 11, 6)->nullable();
            $table->string('tbl_type_adjust_price_others')->nullable();        //definira el tipo de ajuste de precio (fijo o porcentaje)
            $table->float('price_others', 11, 6)->nullable();
            $table->string('tbl_type_adjust_price_medics')->nullable();        //definira el tipo de ajuste de precio (fijo o porcentaje)
            $table->float('price_medics', 11, 6)->nullable();
            $table->string('tbl_type_adjust_price_remission')->nullable();        //definira el tipo de ajuste de precio (fijo o porcentaje)
            $table->float('price_remission', 11, 6)->nullable();
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
        Schema::dropIfExists('exams');
    }
};
