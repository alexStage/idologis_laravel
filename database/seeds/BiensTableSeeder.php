<?php

use Illuminate\Database\Seeder;

class BiensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biens')->insert([
            'secteur' => 'lille',
            'surface' => '45',
            'surfaceTerrain' => '20',
            'chambres'=> 2,
            'pieces'=> 5,
            'types'=>'maison',
            'prix'=>456000,
            'user_id'=>1,
            'categorie_id'=>1,
            'classe_id'=>1
        ]);

        DB::table('biens')->insert([
            'secteur' => 'lyon',
            'surface' => '30',
            'surfaceTerrain' => '10',
            'chambres'=> 1,
            'pieces'=> 3,
            'types'=>'appartement',
            'prix'=>320000,
            'user_id'=>1,
            'categorie_id'=>1,
            'classe_id'=>2
        ]);

        DB::table('biens')->insert([
            'secteur' => 'marseille',
            'surface' => '45',
            'chambres'=> 2,
            'pieces'=> 5,
            'types'=>'appartement',
            'prix'=>430000,
            'user_id'=>1,
            'categorie_id'=>2,
            'classe_id'=>1
        ]);

        DB::table('biens')->insert([
            'secteur' => 'dijon',
            'surface' => '45',
            'chambres'=> 2,
            'pieces'=> 5,
            'types'=>'appartement',
            'prix'=>430000,
            'user_id'=>1,
            'categorie_id'=>2,
            'classe_id'=>1
        ]);


    }
}
