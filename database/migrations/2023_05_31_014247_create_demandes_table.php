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
                $table->date("date");
                $table->integer("numero");
                $table->string("acte_naissance");
                $table->string("quittance");
                $table->string("recue_quittance");
                $table->string("quitus");
                $table->string("demande");
                $table->foreignId("attestation_id");
                $table->foreignId("user_id");
                $table->foreignId("statut_demande_id");

                $table->timestamps();
            });
            //

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('demandes', function(Blueprint $table){
            $table->dropForeign("retrait_id");
        });
        Schema::dropIfExists('demandes');
    }
}
