<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archives', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('intitule')->unique();
            $table->string('description');

            //Cle Etrangere Cat_Archives
            $table->integer('categories_archives')->unsigned();
            $table->foreign('categories_archives')
                  ->references('id')->on('categories_archives')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('archives');
    }
}
