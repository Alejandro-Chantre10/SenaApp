<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprentices', function (Blueprint $table) {
            $table->id('id_apprentice');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_personal_data');
            $table->foreign('id_personal_data')->references('id_personal_data')->on('personal_data')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_medical_data');
            $table->foreign('id_medical_data')->references('id_medical_data')->on('medical_data')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_training_program');
            $table->foreign('id_training_program')->references('id_training_program')->on('training_programs')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('apprentices');
    }
}
