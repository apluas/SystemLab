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
        Schema::create('config_analysis_convenants', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('tbl_convenants');                          //se registrara el id del convenio
            $table->integer('tbl_analysis');                            //se registrara el id del analisis
            $table->float('discount_fixed', 11, 6)->nullable();
            $table->float('discount_percentage', 11, 6)->nullable();
            $table->float('price', 11, 6);
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
        Schema::dropIfExists('config_analysis_convenants');
    }
};
