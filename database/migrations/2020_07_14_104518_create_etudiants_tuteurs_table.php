<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTuteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    
        public function up()
        {
            Schema::create('etudiants_tuteurs', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('matricule')->unsigned();
                $table->integer('idtuteur')->unsigned();
                $table->foreign('matricule')->references('matricule')->on('etudiants')
                            ->onDelete('restrict')
                            ->onUpdate('restrict');
    
                $table->foreign('idtuteur')->references('idtuteur')->on('tuteurs')
                            ->onDelete('restrict')
                            ->onUpdate('restrict');
            });
        }
    
        public function down()
        {
            Schema::table('etudiants_tuteurs', function(Blueprint $table) {
                $table->dropForeign('etudiants_tuteurs_matricule_foreign');
                $table->dropForeign('etudiants_tuteurs_idtuteur_foreign');
            });
    
            Schema::drop('etudiants_tuteurs');
        }
    
}
