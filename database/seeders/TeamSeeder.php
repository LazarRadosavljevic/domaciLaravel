<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name'=>'Crvena Zvezda',
            'created at'=>1945,
            'city'=>'Belgrade',
            'hall'=>'Aleksandar Nikolic',
            'coach_id'=>1,
            'player_id'=>1
        ]);
        Team::create([
            'name'=>'Partizan',
            'created at'=>1945,
            'city'=>'Belgrade',
            'hall'=>'Stark arena',
            'coach_id'=>3,  
            'player_id'=>2
        ]);
        Team::create([
            'name'=>'Olimpijakos',
            'created at'=>1931,
            'city'=>'Pirej',
            'hall'=>'Dvorana mira i prijateljstva',
            'coach_id'=>2,
            'player_id'=>5
        ]);
        Team::create([
            'name'=>'Fenerbahce',
            'created at'=>1913,
            'city'=>'Istanbul',
            'hall'=>'Ulker sports arena',
            'coach_id'=>4,
            'player_id'=>4
        ]);
    }
}
