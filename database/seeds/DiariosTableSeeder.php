<?php

use Illuminate\Database\Seeder;

class DiariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diarios')->insert([
            'codigo' => '1',
        ]);
        DB::table('diarios')->insert([
            'codigo' => '2',
        ]);
        DB::table('diarios')->insert([
            'codigo' => '3',
        ]);
        DB::table('diarios')->insert([
            'codigo' => '4',
        ]);
        DB::table('diarios')->insert([
            'codigo' => '5',
        ]);
        DB::table('diarios')->insert([
            'codigo' => '6',
        ]);
        DB::table('diarios')->insert([
            'codigo' => '7',
        ]);
        DB::table('diarios')->insert([
            'codigo' => '8',
        ]);
    }
}
