<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlApprenticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_apprentices', function (Blueprint $table) {
            $table->id('id_control_apprentice');
            $table->unsignedBigInteger('id_control');
            $table->foreign('id_control')->references('id_control')->on('controls')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('control_apprentices');
    }
}
