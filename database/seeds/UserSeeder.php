<?php

use App\User;
use App\Profession;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $professionID = Profession::where('title', 'Desarrollador Bank-end')->value('id');

        User::create([
            'name' => "Carlos",
            'email' => "carumtito@gmail.com",
            'password' => bcrypt('laravel'),
            'profession_id' => $professionID,
            'is_admin' => true
        ]);

        factory(User::class)->create([
            'profession_id' => $professionID
        ]);

        factory(User::class, 48)->create();


        // User::create([
        //     'name' => "Pedro",
        //     'email' => "pedro@gmail.com",
        //     'password' => bcrypt('laravel'),
        //     'profession_id' => $professionID
        // ]);

        // User::create([
        //     'name' => "Maria",
        //     'email' => "maria@gmail.com",
        //     'password' => bcrypt('laravel'),
        //     'profession_id' => null
        // ]);
    }
}
