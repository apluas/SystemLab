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
        Schema::create('reference_age_parameter_details', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('tbl_reference_age_parameter_main');
            $table->integer('tbl_scale_parameter_age');
            $table->string('scale_from');
            $table->string('scale_up');
            $table->string('value_min');
            $table->string('value_max');
            $table->string('value_min_critical')->nullable();
            $table->string('value_max_critical')->nullable();
            $table->string('status')->default('ACTIVO');
            $table->integer('created_by_user');
            $table->string('range_age')->nullable();
            $table->string('refer')->nullable();
            $table->string('refer_crit')->nullable();
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
        Schema::dropIfExists('reference_age_parameter_details');
    }
};
