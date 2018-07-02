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
            $table->increments('id');
            $table->string('intitule')->unique();
            $table->string('resume');
            $table->string('mot_cle');
            $table->string('chemin');

            //Cle Etrangere Users
            $table->unsignedInteger('users');
            $table->foreign('users')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            //Cle Etrangere Cat_Documents
            $table->unsignedInteger('categories_documents');
            $table->foreign('categories_documents')
                ->references('id')->on('categories_documents')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            //Cle Etrangere Statuts
            $table->unsignedInteger('statuts');
            $table->foreign('statuts')
                ->references('id')->on('statuts')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            //Cle Etrangere Format
            $table->unsignedInteger('formats');
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
