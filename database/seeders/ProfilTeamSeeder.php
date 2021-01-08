<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("profil_teams")->insert([
            "image" => "1.jpg",
            "prenom" => "Christine Williams",
            "fonction" => 'Project Manager',
            "position" => "centre"

        ]);
        DB::table("profil_teams")->insert([
            "image" => "2.jpg",
            "prenom" => "Christine Williams",
            "fonction" => 'Junior Developper',
            "position" => "coté"
            

        ]);
        DB::table("profil_teams")->insert([
            "image" => "3.jpg",
            "prenom" => "Christine Williams",
            "fonction" => 'Digital Designer',
            "position" => "coté"

        ]);
    }
}