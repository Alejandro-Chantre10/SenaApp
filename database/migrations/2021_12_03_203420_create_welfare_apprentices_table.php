<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWelfareApprenticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('welfare_apprentices', function (Blueprint $table) {
            $table->id('id_welfare_apprentice');
            $table->unsignedBigInteger('id_servant');
            $table->foreign('id_servant')->references('id_servant')->on('servants')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_control_apprentice');
            $table->foreign('id_control_apprentice')->references('id_control_apprentice')->on('control_apprentices')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_doctor');
            $table->foreign('id_doctor')->references('id_doctor')->on('doctors')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('welfare_apprentices');
    }
}
