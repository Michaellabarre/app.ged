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
            $table->increments('id');
            $table->string('intitule')->unique();
            $table->string('description');

            //Cle Etrangere Cat_Archives
            $table->unsignedInteger('categories_archives');
            $table->foreign('categories_archives')
                  ->references('id')->on('categories_archives')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            //Cle Etrangere Documents
            $table->unsignedInteger('documents');
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
