<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'test',
            'prenom'=>'Jack',
            'email'=>'test@test.fr',
            'password'=>bcrypt('Onepiece97'),
            'vendeur'=>1
        ]);

        DB::table('users')->insert([
            'name'=>'dhaene',
            'prenom'=>'alexandre',
            'email'=>'dhaene@alexandre.fr',
            'password'=>bcrypt('Onepiece97'),
            'admin'=>1
        ]);
    }
}
