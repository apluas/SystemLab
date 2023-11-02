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
        Schema::create('config_invoice_sucursal', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('tbl_sucursal');                    //id de la sucursal
            $table->integer('tbl_config_facturation_system');   //id del sistema de facturacion
            $table->integer('code_establishment');
            $table->integer('code_emission_point');
            $table->integer('code_sequential');
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
        Schema::dropIfExists('config_invoice_sucursal');
    }
};
