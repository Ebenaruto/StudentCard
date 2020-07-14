<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsFilieresTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('etudiants_filieres', function (Blueprint $table) {
           
                $table->increments('id');
                $table->integer('matricule')->unsigned();
                $table->integer('idfiliere')->unsigned();
                $table->foreign('matricule')->references('matricule')->on('etudiants')
                            ->onDelete('restrict')
                            ->onUpdate('restrict');
                $table->foreign('idfiliere')->references('idfiliere')->on('filieres')
                            ->onDelete('restrict')
                            ->onUpdate('restrict');
            });
    }
    public function down()
    {
                    Schema::table('etudiants_filieres', function(Blueprint $table) {
                        $table->dropForeign('etudiants_filieres_matricule_foreign');
                        $table->dropForeign('etudiants_filieres_idfiliere_foreign');
                    });
                    Schema::dropIfExists('etudiants_filieres');
    }
    
}
