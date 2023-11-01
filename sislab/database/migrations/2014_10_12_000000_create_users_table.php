<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('tbl_sucursal')->nullable();
            $table->string('name');
            $table->string('ruc');
            $table->string('register_free')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->longText('show_password');
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('last_seen')->nullable();
            $table->string('config_post')->default('ALL');
            $table->string('admin')->nullable();
            $table->string('protected')->nullable();
            $table->string('user_first')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
