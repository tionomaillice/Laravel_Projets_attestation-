<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetraitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retraits', function (Blueprint $table) {
            $table->id();
            $table->dateTime("date_retrait");
            $table->foreignId("user_id");
            $table->timestamps();
        });
        //
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

        Schema::dropIfExists('retraits');
        //
        //
    }
}
