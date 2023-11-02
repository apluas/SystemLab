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
        Schema::create('config_report_firms', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('id_sucursal');                 //id de la sucursal
            $table->string('name')->unique();
            $table->integer('config');
            $table->integer('id_firms_1')->nullable();
            $table->integer('id_firms_2')->nullable();
            $table->integer('id_firms_3')->nullable();
            $table->integer('id_firms_4')->nullable();
            $table->string('status')->default('INACTIVO');
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
        Schema::dropIfExists('config_report_firms');
    }
};
