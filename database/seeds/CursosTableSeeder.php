<?php

use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'codigo' => '0001',
            'nome' => 'Curso 1',
            'diario_id' => 1,
        ]);

        DB::table('cursos')->insert([
            'codigo' => '0002',
            'nome' => 'Curso 2',
            'diario_id' => 2,
        ]);

        DB::table('cursos')->insert([
            'codigo' => '0003',
            'nome' => 'Curso 3',
            'diario_id' => 3,
        ]);

        DB::table('cursos')->insert([
            'codigo' => '0004',
            'nome' => 'Curso 4',
            'diario_id' => 4,
        ]);
    }
}
