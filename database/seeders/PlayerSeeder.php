<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::create([
            'firstname'=>'Nemanja',
            'lastname'=>'Nedovic',
            'age'=>28,
            'height'=>192,
            'position'=>'pg',
            'team_id'=>1
        ]);
        Player::create([
            'firstname'=>'Alen',
            'lastname'=>'Smailagic',
            'age'=>22,
            'height'=>202,
            'position'=>'c',
            'team_id'=>2
        ]);Player::create([
            'firstname'=>'Branko',
            'lastname'=>'Lazic',
            'age'=>32,
            'height'=>190,
            'position'=>'pg',
            'team_id'=>1
        ]);
        Player::create([
            'firstname'=>'Marko',
            'lastname'=>'Guduric',
            'age'=>28,
            'height'=>198,
            'position'=>'pg',
            'team_id'=>4
        ]);
        Player::create([
            'firstname'=>'Sasha',
            'lastname'=>'Vezenkov',
            'age'=>30,
            'height'=>200,
            'position'=>'sf',
            'team_id'=>3
        ]);
        Player::create([
            'firstname'=>'Nick',
            'lastname'=>'Calathes',
            'age'=>28,
            'height'=>189,
            'position'=>'pg',
            'team_id'=>3
        ]);

    }
}
