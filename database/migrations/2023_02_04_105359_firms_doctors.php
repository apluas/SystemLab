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
        Schema::create('firms_doctors', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('specialist');
            $table->string('unique_img');
            $table->string('size');
            $table->longText('description')->nullable();
            $table->string('url');
            $table->timestamps();
            $table->string('status');
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('firms_doctors');
    }
};
