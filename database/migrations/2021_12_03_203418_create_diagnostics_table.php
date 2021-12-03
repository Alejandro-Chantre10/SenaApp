<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostics', function (Blueprint $table) {
            $table->id('id_diagnosis');
            $table->date('fecha');
            $table->time('hora');
            $table->text('descripción');
            $table->string('resultado',60);
            $table->unsignedBigInteger('id_doctor');
            $table->foreign('id_doctor')->references('id_doctor')->on('doctors')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_apprentice');
            $table->foreign('id_apprentice')->references('id_apprentice')->on('apprentices')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('diagnostics');
    }
}
