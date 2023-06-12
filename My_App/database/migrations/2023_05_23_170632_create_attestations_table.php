<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttestationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attestations', function (Blueprint $table) {
            $table->id();
            $table->String("mention");
            $table->boolean("estDiponible")->default(1);
            $table->String("fichier_pdf");
            $table->integer("annee");
            $table->foreignId("Etudiant::class");
            $table->foreignId("Type_Attestation::class");

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
        Schema::dropIfExists('attestations');
    }
}
