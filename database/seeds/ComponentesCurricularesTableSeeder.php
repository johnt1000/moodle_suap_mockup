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
            'codigo' => '0001',
            'nome' => 'Componente Curricular 1',
            'diario_id' => 1,
        ]);

        DB::table('componentes_curriculares')->insert([
            'codigo' => '0002',
            'nome' => 'Componente Curricular 2',
            'diario_id' => 2,
        ]);

        DB::table('componentes_curriculares')->insert([
            'codigo' => '0003',
            'nome' => 'Componente Curricular 3',
            'diario_id' => 3,
        ]);

        DB::table('componentes_curriculares')->insert([
            'codigo' => '0004',
            'nome' => 'Componente Curricular 4',
            'diario_id' => 4,
        ]);
    }
}
