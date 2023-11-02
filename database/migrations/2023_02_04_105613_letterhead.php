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
        Schema::create('letterhead', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('tbl_letterhead_distribution');         //id de la distribucion de la membrete
            $table->integer('tbl_sucursal');                        //id de la sucursal
            $table->string('name')->unique();
            $table->string('report_logo')->nullable();
            $table->longText('report_content')->nullable();
            $table->float('margen_encabezado', 11, 4)->default(3);
            $table->float('margen_pie', 11, 4)->default(2);
            $table->float('margin_izquierdo', 11, 4)->default(1.5);
            $table->float('margin_derecho', 11, 4)->default(1.5);
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
        Schema::dropIfExists('letterhead');
    }
};
