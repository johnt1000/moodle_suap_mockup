<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class MatriculadosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function list($diario) {
        $results = app('db')->select("SELECT * FROM diarios t WHERE t.id = '{$diario}'");
        foreach ($results as $key => $value) {

            $rs = app('db')->select("SELECT * FROM turmas t WHERE t.diario_id = {$value->id}");
            if (!empty($rs)) {
                $value->turma = $rs[0];
                
                $rss = app('db')->select("SELECT * FROM cursos t WHERE t.id = {$rs[0]->id}");
                if (!empty($rss)) {
                    $value->turma->curso = $rss[0];
                } else {
                    $value->turma->curso = '';
                }
            } else {
                $value->turma = '';
            }

            $rs = app('db')->select("SELECT * FROM componentes_curriculares t WHERE t.diario_id = {$value->id}");
            if (!empty($rs)) {
                $value->componente_curricular = $rs[0];
            } else {
                $value->componente_curricular = null;
            }

            $rs = app('db')->select("SELECT * FROM campi t WHERE t.diario_id = {$value->id}");
            if (!empty($rs)) {
                $value->campus = $rs[0];
            } else {
                $value->campus = '';
            }

            $rs = app('db')->select("SELECT * FROM professores t WHERE t.diario_id = {$value->id}");
            if (!empty($rs)) {
                $value->professores = $rs;
            } else {
                $value->professores = [];
            }

            $rs = app('db')->select("SELECT * FROM alunos t WHERE t.diario_id = {$value->id}");
            if (!empty($rs)) {       
                foreach ($rs as $i => $v) {
                    $v->polo = (object) array('id' => 1, 'nome' => 'Polo EAD');
                }
                $value->alunos = $rs;
            } else {
                $value->alunos = [];
            }
        }
        return response()->json($results[0]);
    }
}
