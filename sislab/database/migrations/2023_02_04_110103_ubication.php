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
        Schema::create('ubication', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('code_provincia');
            $table->string('code_canton');
            $table->string('code_parroquia');
            $table->string('name_provincia');
            $table->string('name_canton');
            $table->string('name_parroquia');
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
        Schema::dropIfExists('ubication');
    }
};
