<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentions', function (Blueprint $table) {
            $table->id();
            $table->String("nom_mentions");
        });
        Schema::enableForeignKeyConstraints();

        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('mentions', function(Blueprint $table){
            $table->dropForeign("attestation_id");
        });
        Schema::dropIfExists('mentions');
        //
    }
}
