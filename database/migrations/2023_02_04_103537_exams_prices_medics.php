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
        Schema::create('exams_prices_medics', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('tbl_exams');
            $table->integer('tbl_medics');
            $table->string('tbl_type_adjust_price_medics')->nullable();        //definira el tipo de ajuste de precio (fijo o porcentaje)
            $table->float('price_base_public', 11, 6)->nullable();
            $table->float('price', 11, 6);
            $table->integer('created_by_user');
            $table->string('status')->default('ACTIVO');
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
        Schema::dropIfExists('exams_prices_medics');
    }
};
