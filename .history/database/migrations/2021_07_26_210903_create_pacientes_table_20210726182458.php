<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id()->int()->uniqid();
            $table->increments()->int('id')->unique();
            $table->id (int, unique, Auto_increment);
            $table->nombre(varchar 255);
            $table->apellido (varchar 255);
            $table->created_at (current timestamp);
            $table->updated_at (current timestamp);
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
        Schema::dropIfExists('pacientes');
    }
}
