<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTratamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratamientos', function (Blueprint $table) {
            $table->id('id')->unique()->autoIncrement();
            $table->integer('od_id')->required();
            $table->integer('pa_id')->required();
            $table->integer('cant_placas');
            $table->date('ended_at')->nullable();
            $table->timestamp('created_at','updated_at','ended_at')->useCurrent();
            $table->timestamp()->useCurrent();
            $table->timestamp()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tratamientos');
    }
}
