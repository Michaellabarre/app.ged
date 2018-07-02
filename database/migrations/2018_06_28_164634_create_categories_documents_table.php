<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_documents', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('intitule');
            $table->string('description');
            $table->unsignedInteger('sous_categories');
            $table->foreign('sous_categories')
                  ->references('id')->on('sous_categories')
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
        Schema::dropIfExists('categories_documents');
    }
}
