<?php

use Illuminate\Database\Seeder;

class CampiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campi')->insert([
            'codigo' => '0001',
            'nome' => 'Campi 1',
            'sigla' => 'campi1',
            'diario_id' => 1,
        ]);

        DB::table('campi')->insert([
            'codigo' => '0002',
            'nome' => 'Campi 2',
            'sigla' => 'campi2',
            'diario_id' => 2,
        ]);

        DB::table('campi')->insert([
            'codigo' => '0003',
            'nome' => 'Campi 3',
            'sigla' => 'campi3',
            'diario_id' => 3,
        ]);

        DB::table('campi')->insert([
            'codigo' => '0004',
            'nome' => 'Campi 4',
            'sigla' => 'campi4',
            'diario_id' => 4,
        ]);
    }
}
