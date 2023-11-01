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
        Schema::create('config_portal_convenants', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('tbl_convenants')->unique();                    //se registrara el id del convenio
            $table->string('quotes')->default('ACTIVO');
            $table->string('create_remission_samples')->default('ACTIVO');
            $table->string('results')->default('ACTIVO');
            $table->string('user_management')->default('ACTIVO');
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
        Schema::dropIfExists('config_portal_convenants');
    }
};
