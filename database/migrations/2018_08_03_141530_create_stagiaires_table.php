<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStagiairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CIN')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('tel');
            $table->string('email');
            $table->string('typeS');
            $table->string('duree');
            $table->date('datedeb');
            $table->date('datefin');
            $table->string('formation');
            $table->string('Etablissment');
            $table->integer('encadrant_id');
            $table->integer('service_id');
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
        Schema::drop('stagiaires');
    }
}
