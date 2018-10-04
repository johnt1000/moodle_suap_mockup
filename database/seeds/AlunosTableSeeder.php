<?php

use Illuminate\Database\Seeder;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert([
            'codigo' => '0001',
            'nome' => 'Alunos 1',
            'diario_id' => 1,
        ]);

        DB::table('alunos')->insert([
            'codigo' => '0002',
            'nome' => 'Alunos 2',
            'diario_id' => 1,
        ]);

        DB::table('alunos')->insert([
            'codigo' => '0003',
            'nome' => 'Alunos 3',
            'diario_id' => 2,
        ]);

        DB::table('alunos')->insert([
            'codigo' => '0004',
            'nome' => 'Alunos 4',
            'diario_id' => 2,
        ]);
    }
}
