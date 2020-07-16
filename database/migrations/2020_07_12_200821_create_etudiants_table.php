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
            $table->string('tuteur_id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->date('datedenaissance');
            $table->string('photo');
            $table->string('nationalite');
            $table->string('telephone');
            $table->string('anneeaccademique');
            $table->string('email');
            $table->string('filiere');
            $table->string('cycle');
            $table->string('niveau');
            



            
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
