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
        Schema::create('config_report_convenants', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('tbl_convenants')->unique();            //se registrara el id del convenio
            $table->string('age')->default('ACTIVO');
            $table->string('date_sample')->default('ACTIVO');
            $table->string('genders')->default('ACTIVO');
            $table->string('medic')->default('ACTIVO');
            $table->string('services')->default('$EMAIL_SYSTEM');
            $table->string('sucursal')->default('$EMAIL_SYSTEM');
            $table->string('sala')->default('$EMAIL_SYSTEM');
            $table->string('cama')->default('$EMAIL_SYSTEM');
            $table->string('type_patient')->default('$EMAIL_SYSTEM');
            $table->string('references')->default('$EMAIL_SYSTEM');
            $table->string('references_exam')->default('$EMAIL_SYSTEM');
            $table->string('type_atention')->default('$EMAIL_SYSTEM');
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
        Schema::dropIfExists('config_report_convenants');
    }
};
