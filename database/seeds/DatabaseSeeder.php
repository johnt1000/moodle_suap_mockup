<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        $this->call('DiariosTableSeeder');
        $this->call('ComponentesCurricularesTableSeeder');
        $this->call('CursosTableSeeder');
        $this->call('CampiTableSeeder');
        $this->call('TurmasTableSeeder');
        $this->call('ProfessoresTableSeeder');
        $this->call('AlunosTableSeeder');
    }
}
