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
            'codigo' => '151047',
            'nome' => 'Curso Formação em EAD',
            'descricao' => 'Lorem ipsun dolor',
            'turma_id' => 1,
        ]);
        DB::table('cursos')->insert([
            'codigo' => '151047',
            'nome' => 'Curso Formação em EAD',
            'descricao' => 'Lorem ipsun dolor',
            'turma_id' => 2,
        ]);
        DB::table('cursos')->insert([
            'codigo' => '151047',
            'nome' => 'Curso Formação em EAD',
            'descricao' => 'Lorem ipsun dolor',
            'turma_id' => 3,
        ]);
        DB::table('cursos')->insert([
            'codigo' => '151047',
            'nome' => 'Curso Formação em EAD',
            'descricao' => 'Lorem ipsun dolor',
            'turma_id' => 4,
        ]);

        DB::table('cursos')->insert([
            'codigo' => '15122',
            'nome' => 'Informatica Para Internet',
            'descricao' => 'Lorem ipsun dolor lorem lorem',
            'turma_id' => 5,
        ]);
        DB::table('cursos')->insert([
            'codigo' => '15122',
            'nome' => 'Informatica Para Internet',
            'descricao' => 'Lorem ipsun dolor lorem lorem',
            'turma_id' => 6,
        ]);
        DB::table('cursos')->insert([
            'codigo' => '15122',
            'nome' => 'Informatica Para Internet',
            'descricao' => 'Lorem ipsun dolor lorem lorem',
            'turma_id' => 7,
        ]);
        DB::table('cursos')->insert([
            'codigo' => '15122',
            'nome' => 'Informatica Para Internet',
            'descricao' => 'Lorem ipsun dolor lorem lorem',
            'turma_id' => 8,
        ]);
        
    }
}
