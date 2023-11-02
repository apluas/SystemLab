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
        Schema::create('medics', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name')->unique();
            $table->string('email')->nullable()->unique();
            $table->string('identification')->unique();
            $table->string('references')->nullable();
            $table->integer('tbl_specialty')->nullable();
            $table->string('address')->nullable();
            $table->string('dni_medic')->nullable();
            $table->integer('city')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_fixed')->nullable();
            $table->string('portal_exams')->default('ACTIVO');
            $table->string('portal_results')->default('ACTIVO');
            $table->string('status_api')->default('INACTIVO');
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
        Schema::dropIfExists('medics');
    }
};
