<?php

use App\Profession;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('profession')->insert([
        //     'title' => 'Desarrollador Bank-end'
        // ]);

        // DB::table('profession')->insert([
        //     'title' => 'Desarrollador Font-end'
        // ]);

        // DB::table('profession')->insert([
        //     'title' => 'Desarrollador web'
        // ]);

        factory(Profession::class, 17)->create();
        
        Profession::create([
            'title' => 'Desarrollador Bank-end'
        ]);

        Profession::create([
            'title' => 'Desarrollador Font-end'
        ]);

        Profession::create([
            'title' => 'Desarrollador web'
        ]);
    }
}
