<?php

namespace Database\Seeders;

use App\Models\Coach;
use Illuminate\Database\Seeder;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coach::create([
            'firstname'=>'Dusko',
            'lastname'=>'Ivanovic',
            'age'=>68,
            'team_id'=>1          

        ]);
        Coach::create([
            'firstname'=>'Jorgos',
            'lastname'=>'Barcokas',
            'age'=>58,
            'team_id'=>3          

        ]);
        Coach::create([
            'firstname'=>'Zeljko',
            'lastname'=>'Obradovic',
            'age'=>61,
            'team_id'=>2          

        ]);
        Coach::create([
            'firstname'=>'Dimitris',
            'lastname'=>'Itoudis',
            'age'=>52,
            'team_id'=>4         

        ]);
    }
}
