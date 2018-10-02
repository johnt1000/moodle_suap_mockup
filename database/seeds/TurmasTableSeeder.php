<?php

use Illuminate\Database\Seeder;

class TurmasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turmas')->insert([
            'codigo' => '0001',
            'nome' => 'turma 1',
            'diario_id' => 1,
        ]);

        DB::table('turmas')->insert([
            'codigo' => '0002',
            'nome' => 'turma 2',
            'diario_id' => 2,
        ]);

        DB::table('turmas')->insert([
            'codigo' => '0003',
            'nome' => 'turma 3',
            'diario_id' => 3,
        ]);

        DB::table('turmas')->insert([
            'codigo' => '0004',
            'nome' => 'turma 4',
            'diario_id' => 4,
        ]);
    }
}
