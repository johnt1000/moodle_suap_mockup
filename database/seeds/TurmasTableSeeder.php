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
            'codigo' => '20182.1.151047.7E',
            'diario_id' => 1,
        ]);
        DB::table('turmas')->insert([
            'codigo' => '20182.1.151047.7E',
            'diario_id' => 2,
        ]);
        DB::table('turmas')->insert([
            'codigo' => '20182.1.151047.7E',
            'diario_id' => 3,
        ]);
        DB::table('turmas')->insert([
            'codigo' => '20182.1.151047.7E',
            'diario_id' => 4,
        ]);
        DB::table('turmas')->insert([
            'codigo' => '20182.3.15122.1E',
            'diario_id' => 5,
        ]);
        DB::table('turmas')->insert([
            'codigo' => '20182.3.15122.1E',
            'diario_id' => 6,
        ]);
        DB::table('turmas')->insert([
            'codigo' => '20182.3.15122.1E',
            'diario_id' => 7,
        ]);
        DB::table('turmas')->insert([
            'codigo' => '20182.3.15122.1E',
            'diario_id' => 8,
        ]);
    }
}
