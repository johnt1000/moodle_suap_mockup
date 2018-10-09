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
            'nome' => 'Campus EAD',
            'sigla' => 'EAD',
            'diario_id' => 1,
        ]);
        DB::table('campi')->insert([
            'nome' => 'Campus EAD',
            'sigla' => 'EAD',
            'diario_id' => 2,
        ]);
        DB::table('campi')->insert([
            'nome' => 'Campus EAD',
            'sigla' => 'EAD',
            'diario_id' => 3,
        ]);
        DB::table('campi')->insert([
            'nome' => 'Campus EAD',
            'sigla' => 'EAD',
            'diario_id' => 4,
        ]);

        DB::table('campi')->insert([
            'nome' => 'Natal Central',
            'sigla' => 'CNAT',
            'diario_id' => 5,
        ]);
        DB::table('campi')->insert([
            'nome' => 'Natal Central',
            'sigla' => 'CNAT',
            'diario_id' => 6,
        ]);
        DB::table('campi')->insert([
            'nome' => 'Natal Central',
            'sigla' => 'CNAT',
            'diario_id' => 7,
        ]);
        DB::table('campi')->insert([
            'nome' => 'Natal Central',
            'sigla' => 'CNAT',
            'diario_id' => 8,
        ]);

        
    }
}
