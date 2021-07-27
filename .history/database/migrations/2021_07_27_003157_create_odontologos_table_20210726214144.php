<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdontologosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odontologos', function (Blueprint $table) {
            $table->id('id')->unique()->autoIncrement();
            $table->integer('od_id')->required();
            $table->int('pa_id')->required();
            $table->int('cant_placas');
            $table->timestamps('ended_at');
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
        Schema::dropIfExists('odontologos');
    }
}
