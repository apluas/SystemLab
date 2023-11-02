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
        Schema::create('config_report_qr', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('tbl_sucursal');                //id de la sucursal
            $table->integer('tbl_exams');                   //id del examen
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
        Schema::dropIfExists('config_report_qr');
    }
};
