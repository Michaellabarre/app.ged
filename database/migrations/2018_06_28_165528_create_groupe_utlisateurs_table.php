<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupeUtlisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe_utlisateurs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('intitule')->unique();
            $table->string('description');

            //Cle Etrangere Privileges
            $table->integer('privileges')->unsigned();
            $table->foreign('privileges')
                ->references('id')->on('privileges')
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
        Schema::dropIfExists('groupe_utlisateurs');
    }
}
