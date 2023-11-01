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
        Schema::create('convenants', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('tbl_letterhead')->nullable();                  //configuración de encabezados y pie de reportes resultados, por convenio(encabezado, logos, etc)
            $table->integer('tbl_config_report_firms')->nullable();         //configuración de firmas por sucursal(firma de laboratoristas, dueño del laboratorio)
            $table->integer('tbl_config_portal_convenants')->nullable();    //configuraciones del comportamiento del sistema de convenio (cotizaciones, crear remisiones de muestras, resultados, crear usuarios)
            $table->integer('tbl_config_report_convenants')->nullable();    //configuraciones del formato reporte de campos especiales (edad,medico,servicio, etc)
            $table->string('name')->unique();
            $table->string('business_name');
            $table->string('code')->unique();
            $table->string('ruc')->nullable();
            $table->string('address')->nullable();
            $table->integer('ubication')->nullable();
            $table->string('status_system')->default('ACTIVO');
            $table->string('email_system')->unique()->nullable();
            $table->string('color_primary')->nullable();
            $table->string('color_secundary')->nullable();
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
        Schema::dropIfExists('convenants');
    }
};
