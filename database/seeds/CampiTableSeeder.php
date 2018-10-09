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
            'nome' => 'Natal Central',
            'sigla' => 'CNAT',
            'diario_id' => 1,
        ]);

        DB::table('campi')->insert([
            'nome' => 'Campus EAD',
            'sigla' => 'EAD',
            'diario_id' => 2,
        ]);
    }
}
