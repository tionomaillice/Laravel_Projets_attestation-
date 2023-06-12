<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MentionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("mentions")->insert([
            ["nom_mentions"=>"Bien"],
            ["nom_mentions"=>"Très bien"],
            ["nom_mentions"=>"Passable"],
            ["nom_mentions"=>"Excellent"],
        ]);
        //
    }
}
