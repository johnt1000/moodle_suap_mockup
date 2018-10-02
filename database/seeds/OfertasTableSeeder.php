<?php

use Illuminate\Database\Seeder;

class OfertasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ofertas')->insert([
            'ano' => 2018,
            'periodo' => 1,
            'diario_id' => 1,
        ]);

        DB::table('ofertas')->insert([
            'ano' => 2018,
            'periodo' => 2,
            'diario_id' => 2,
        ]);

        DB::table('ofertas')->insert([
            'ano' => 2017,
            'periodo' => 1,
            'diario_id' => 3,
        ]);

        DB::table('ofertas')->insert([
            'ano' => 2017,
            'periodo' => 2,
            'diario_id' => 4,
        ]);
    }
}
