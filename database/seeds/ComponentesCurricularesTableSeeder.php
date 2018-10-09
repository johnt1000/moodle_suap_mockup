<?php

use Illuminate\Database\Seeder;

class ComponentesCurricularesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('componentes_curriculares')->insert([
            'sigla' => 'FIC.0520',
            'descricao' => 'Conhecer e aplicar: educação a distância e Educação Presencial',
            'diario_id' => 1,
        ]);
        DB::table('componentes_curriculares')->insert([
            'sigla' => '00FIC.051902',
            'descricao' => 'Processo de ensino e aprendizagem',
            'diario_id' => 2,
        ]);
        DB::table('componentes_curriculares')->insert([
            'sigla' => 'FIC.0518',
            'descricao' => 'Educação a distância: História, regulamentação e modelos',
            'diario_id' => 3,
        ]);
        DB::table('componentes_curriculares')->insert([
            'sigla' => 'FIC.0517',
            'descricao' => 'Seminário de integração entre gestores/professores/estudantes (A EaD no IFRN e a plataforma Moodle)',
            'diario_id' => 4,
        ]);
        DB::table('componentes_curriculares')->insert([
            'sigla' => 'TCON.0014',
            'descricao' => 'Programação de Sistemas para Internet',
            'diario_id' => 5,
        ]);
        DB::table('componentes_curriculares')->insert([
            'sigla' => 'TCON.0013',
            'descricao' => 'Instalação e Configuração de Servidores',
            'diario_id' => 6,
        ]);
        DB::table('componentes_curriculares')->insert([
            'sigla' => 'TCON.0007',
            'descricao' => 'Análise e Projeto Orientados a Objetos',
            'diario_id' => 7,
        ]);
        DB::table('componentes_curriculares')->insert([
            'sigla' => 'TCON.0004',
            'descricao' => 'Sociologia do Trabalho',
            'diario_id' => 8,
        ]);
    }
}
