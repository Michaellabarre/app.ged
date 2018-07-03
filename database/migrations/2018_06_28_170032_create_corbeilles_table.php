<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorbeillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corbeilles', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('intitule')->unique();
            $table->string('description');

            //Cle Etrangere Documents
            $table->integer('documents')->unsigned();
            $table->foreign('documents')
                ->references('id')->on('documents')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('corbeilles');
    }
}
