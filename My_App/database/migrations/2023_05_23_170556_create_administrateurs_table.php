<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrateurs', function (Blueprint $table) {
            $table->id();
            $table->string("nom_administrateur");
            $table->string("prenom_administrateur");
            $table->string("email_administrateur")->unique();
            $table->string("password_administrateur");
            $table->foreignId("Attestation::class");
            $table->rememberToken();


            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("administrateurs", function(Blueprint $table){
            $table->dropForeign("attestation_id");

        });

        Schema::dropIfExists('administrateurs');
    }
}
