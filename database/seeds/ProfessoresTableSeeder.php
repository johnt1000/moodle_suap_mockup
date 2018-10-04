<?php

use Illuminate\Database\Seeder;

class ProfessoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professores')->insert([
            'codigo' => '0001',
            'nome' => 'Professor 1',
            'diario_id' => 1,
        ]);

        DB::table('professores')->insert([
            'codigo' => '0002',
            'nome' => 'Professor 2',
            'diario_id' => 2,
        ]);
    }
}
