<?php

namespace Database\Seeders;

use App\Models\AttestationRetraits;
use Illuminate\Database\Seeder;
use App\Models\Attestations;
use App\Models\Demande;
use App\Models\Demandes;
use App\Models\User;
use App\Models\Dossiers;
use App\Models\Retraits;
use App\Models\UserPermissions;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this-> call(TypeAttestationsSeeder::class);
        Attestations::factory(10)->create();
        User::factory(50)->create();
        Demandes::factory(10)->create();
        Retraits::factory(10)->create();
        //UserPermissions::factory(10)->create();
        //Userpermissions::factory(10)->create();
        $this-> call(PermissionsSeeder::class);
        $this-> call(RolesSeeder::class);
        $this-> call(MentionsSeeder::class);
        $this-> call( StatutDemandeSeeder::class);
        // \App\Models\User::factory(10)->create();


        User::find(1)-> roles()-> attach(1);
        User::find(2)-> roles()-> attach(2);
        User::find(3)-> roles()-> attach(3);
        User::find(4)-> roles()-> attach(4);
        User::find(5)-> roles()-> attach(5);
        User::find(6)-> roles()-> attach(1);
        User::find(7)-> roles()-> attach(2);
        User::find(8)-> roles()-> attach(3);
        User::find(8)-> roles()-> attach(4);
        User::find(10)-> roles()-> attach(5);
        User::find(11)-> roles()-> attach(1);
        User::find(12)-> roles()-> attach(2);
        User::find(13)-> roles()-> attach(3);
        User::find(14)-> roles()-> attach(4);
        User::find(15)-> roles()-> attach(5);
        User::find(16)-> roles()-> attach(1);
        User::find(17)-> roles()-> attach(2);
        User::find(18)-> roles()-> attach(3);
        User::find(19)-> roles()-> attach(4);
        User::find(20)-> roles()-> attach(5);
        User::find(21)-> roles()-> attach(1);
        User::find(22)-> roles()-> attach(2);
        User::find(23)-> roles()-> attach(3);
        User::find(24)-> roles()-> attach(4);
        User::find(25)-> roles()-> attach(5);

        User::find(1)-> permissions()-> attach(1);
        User::find(2)->permissions()-> attach(1);
        User::find(3)->permissions()-> attach(1);
        User::find(4)-> permissions()-> attach(2);
        User::find(5)-> permissions()-> attach(2);
        User::find(6)-> permissions()-> attach(2);
        User::find(7)->permissions()-> attach(3);
        User::find(8)->permissions()-> attach(3);
        User::find(9)-> permissions()-> attach(4);
        User::find(10)-> permissions()-> attach(5);

    }
}
