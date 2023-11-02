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
        Schema::create('sucursal', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('tbl_letterhead')->nullable();                  //id de la configuracion del membrete
            $table->integer('tbl_config_report_firms')->nullable();         //id de la configuracion de la firmas
            $table->string('name')->unique();
            $table->string('ruc')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->integer('firm_doctor_certificate')->nullable();         //id de la firma del doctor para hacer certificados
            $table->string('status')->default('ACTIVO');
            $table->string('matriz')->nullable();
            $table->string('image')->nullable();
            $table->integer('created_by_user')->nullable();
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
        Schema::dropIfExists('sucursal');
    }
};
