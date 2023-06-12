<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->string("statu");
            $table->foreignId("Etudiant::class");
            $table->foreignId("Type_Attestation::class");
            $table->string("acte_de_naissance");
            $table->string("recue_quittance");
            $table->string("lettre_de_demande");
            $table->string("quitus");
            $table->string("quittance");
            $table->foreignId("Attestation::class");
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
        Schema::dropIfExists('demandes');
    }
}
