<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        for ($i=0; $i < 10; $i++) { 
            DB::table('alunos')->insert([
                'nome' => $faker->name,
                'username' => $faker->userName,
                'tipo' => 'Aluno',
                'email_academico' => $faker->email,
                'email_secundario' => $faker->email,
                'status' => true,
                'diario_id' => 1,
            ]);
        }

        for ($i=0; $i < 12; $i++) { 
            DB::table('alunos')->insert([
                'nome' => $faker->name,
                'username' => $faker->userName,
                'tipo' => 'Aluno',
                'email_academico' => $faker->email,
                'email_secundario' => $faker->email,
                'status' => true,
                'diario_id' => 2,
            ]);
        }

        for ($i=0; $i < 15; $i++) { 
            DB::table('alunos')->insert([
                'nome' => $faker->name,
                'username' => $faker->userName,
                'tipo' => 'Aluno',
                'email_academico' => $faker->email,
                'email_secundario' => $faker->email,
                'status' => true,
                'diario_id' => 3,
            ]);
        }

        for ($i=0; $i < 8; $i++) { 
            DB::table('alunos')->insert([
                'nome' => $faker->name,
                'username' => $faker->userName,
                'tipo' => 'Aluno',
                'email_academico' => $faker->email,
                'email_secundario' => $faker->email,
                'status' => true,
                'diario_id' => 4,
            ]);
        }

        for ($i=0; $i < 11; $i++) { 
            DB::table('alunos')->insert([
                'nome' => $faker->name,
                'username' => $faker->userName,
                'tipo' => 'Aluno',
                'email_academico' => $faker->email,
                'email_secundario' => $faker->email,
                'status' => true,
                'diario_id' => 5,
            ]);
        }

        for ($i=0; $i < 12; $i++) { 
            DB::table('alunos')->insert([
                'nome' => $faker->name,
                'username' => $faker->userName,
                'tipo' => 'Aluno',
                'email_academico' => $faker->email,
                'email_secundario' => $faker->email,
                'status' => true,
                'diario_id' => 6,
            ]);
        }

        for ($i=0; $i < 18; $i++) { 
            DB::table('alunos')->insert([
                'nome' => $faker->name,
                'username' => $faker->userName,
                'tipo' => 'Aluno',
                'email_academico' => $faker->email,
                'email_secundario' => $faker->email,
                'status' => true,
                'diario_id' => 7,
            ]);
        }

        for ($i=0; $i < 13; $i++) { 
            DB::table('alunos')->insert([
                'nome' => $faker->name,
                'username' => $faker->userName,
                'tipo' => 'Aluno',
                'email_academico' => $faker->email,
                'email_secundario' => $faker->email,
                'status' => true,
                'diario_id' => 8,
            ]);
        }
    }
}
