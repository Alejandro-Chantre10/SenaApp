<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_data', function (Blueprint $table) {
            $table->id('id_personal_data');
            $table->string('nombres',30);
            $table->string('apellidos',30);
            $table->string('tipo_documento',30);
            $table->string('numero_documento');
            $table->date('fecha_nacimiento');
            $table->string('genero',30);
            $table->string('celular');
            $table->binary('foto');
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
        Schema::dropIfExists('personal_data');
    }
}
