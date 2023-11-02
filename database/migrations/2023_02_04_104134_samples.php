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
        Schema::create('samples', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('code')->unique();
            $table->string('name')->unique();
            $table->string('color')->nullable();
            $table->string('references')->nullable();
            $table->string('align_code_bar')->default('INACTIVO');
            $table->string('print_code_bar')->default('INACTIVO');
            $table->string('print_sucursal_bar')->default('INACTIVO');
            $table->string('print_tag_exam')->default('INACTIVO');
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
        Schema::dropIfExists('samples');
    }
};
