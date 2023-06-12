<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperAdministrateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('super__administrateurs', function (Blueprint $table) {
            $table->id();
            $table->String("email_super_administrateur")->unique();
            $table->string("password_super_administration");
            $table->foreignId("Administrateur::class");
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
        Schema::dropIfExists('super__administrateurs');
    }
}
