<?php

namespace Database\Seeders;

use App\Models\Administrateur;
use App\Models\Etudiant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Administrateur::factory(10)->create();
    }
}
