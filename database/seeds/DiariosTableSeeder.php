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
            'codigo' => 'testediarios2018.0.3.115',
            'matricula' => '110110',
        ]);
        DB::table('diarios')->insert([
            'codigo' => 'teste2diarios2018.0.3.115',
            'matricula' => '110110',
        ]);
        DB::table('diarios')->insert([
            'codigo' => 'testediarios2018.0.3.111',
            'matricula' => '001001',
        ]);
        DB::table('diarios')->insert([
            'codigo' => 'teste2diarios2018.0.3.111',
            'matricula' => '001001',
        ]);
    }
}
