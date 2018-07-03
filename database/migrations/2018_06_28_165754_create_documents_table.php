<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('intitule')->unique();
            $table->string('resume');
            $table->string('mot_cle');
            $table->string('chemin');

            //Cle Etrangere Users
            $table->integer('users')->unsigned();
            $table->foreign('users')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            //Cle Etrangere Cat_Documents
            $table->integer('categories_documents')->unsigned();
            $table->foreign('categories_documents')
                ->references('id')->on('categories_documents')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            //Cle Etrangere Statuts
            $table->integer('statuts')->unsigned();
            $table->foreign('statuts')
                ->references('id')->on('statuts')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            //Cle Etrangere Format
            $table->integer('formats')->unsigned();
            $table->foreign('formats')
                ->references('id')->on('formats')
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
        Schema::dropIfExists('documents');
    }
}
