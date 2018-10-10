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
            'nome' => 'Jonatas Rodrigues',
            'username' => 'jonatas',
            'tipo' => 'Principal',
            'email_corporativo' => 'jonatas.rodriguess@gmail.com',
            'email_secundario' => 'jonatas.rodriguess@gmail.com',
            'status' => true,
            'diario_id' => 1,
        ]);
        DB::table('professores')->insert([
            'nome' => 'Jonatas Rodrigues',
            'username' => 'jonatas',
            'tipo' => 'Principal',
            'email_corporativo' => 'jonatas.rodriguess@gmail.com',
            'email_secundario' => 'jonatas.rodriguess@gmail.com',
            'status' => true,
            'diario_id' => 2,
        ]);
        DB::table('professores')->insert([
            'nome' => 'Jonatas Rodrigues',
            'username' => 'jonatas',
            'tipo' => 'Principal',
            'email_corporativo' => 'jonatas.rodriguess@gmail.com',
            'email_secundario' => 'jonatas.rodriguess@gmail.com',
            'status' => true,
            'diario_id' => 3,
        ]);
        DB::table('professores')->insert([
            'nome' => 'Jonatas Rodrigues',
            'username' => 'jonatas',
            'tipo' => 'Principal',
            'email_corporativo' => 'jonatas.rodriguess@gmail.com',
            'email_secundario' => 'jonatas.rodriguess@gmail.com',
            'status' => true,
            'diario_id' => 4,
        ]);

        DB::table('professores')->insert([
            'nome' => 'Diogenes Dantas',
            'username' => 'doginnn',
            'tipo' => 'Principal',
            'email_corporativo' => 'doginnn@gmail.com',
            'email_secundario' => 'doginnn@gmail.com',
            'status' => true,
            'diario_id' => 5,
        ]);
        DB::table('professores')->insert([
            'nome' => 'Sueldo Sales',
            'username' => 'susu',
            'tipo' => 'Mediador',
            'email_corporativo' => 'susu@gmail.com',
            'email_secundario' => 'susu@gmail.com',
            'status' => true,
            'diario_id' => 5,
        ]);
        DB::table('professores')->insert([
            'nome' => 'Diogenes Dantas',
            'username' => 'doginnn',
            'tipo' => 'Principal',
            'email_corporativo' => 'doginnn@gmail.com',
            'email_secundario' => 'doginnn@gmail.com',
            'status' => true,
            'diario_id' => 6,
        ]);
        DB::table('professores')->insert([
            'nome' => 'Diogenes Dantas',
            'username' => 'doginnn',
            'tipo' => 'Principal',
            'email_corporativo' => 'doginnn@gmail.com',
            'email_secundario' => 'doginnn@gmail.com',
            'status' => true,
            'diario_id' => 7,
        ]);
        DB::table('professores')->insert([
            'nome' => 'Diogenes Dantas',
            'username' => 'doginnn',
            'tipo' => 'Principal',
            'email_corporativo' => 'doginnn@gmail.com',
            'email_secundario' => 'doginnn@gmail.com',
            'status' => true,
            'diario_id' => 8,
        ]);
    }
}
