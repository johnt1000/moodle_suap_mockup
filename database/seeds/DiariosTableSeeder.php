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
            'codigo' => '110110',
        ]);
        DB::table('diarios')->insert([
            'codigo' => '001001',
        ]);
    }
}
