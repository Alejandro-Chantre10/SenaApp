<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_data', function (Blueprint $table) {
            $table->id('id_medical_data');
            $table->string('eps',20);
            $table->string('rh',20);
            $table->date('último_control');
            $table->unsignedBigInteger('id_disease');
            $table->foreign('id_disease')->references('id_disease')->on('diseases')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_attendant');
            $table->foreign('id_attendant')->references('id_attendant')->on('attendants')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('medical_data');
    }
}
