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
            $table->string('contenu');
            $table->string('noSerie');
            $table->foreignId("user_id");
            $table->foreignId("mention_id");
            $table->foreignId("type_attestation_id")->constrained();

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
        schema::table('attestions', function(Blueprint $table){
            $table->dropForeign("type_attestation_id","mention_id","user_id");
        });
        //
    }
}
