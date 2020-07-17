<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->increments('matricule');
            $table->unsignedInteger('cycle_id');
            $table->unsignedInteger('filiere_id');
            $table->unsignedInteger('niveau_id');
            $table->unsignedInteger('tuteur_id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->date('datedenaissance');
            $table->string('photo')->nullable;
            $table->string('nationalité');
            $table->integer('telephone');
            $table->string('anneeacademique');
            $table->string('email');
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
        Schema::dropIfExists('etudiants');
    }
}
