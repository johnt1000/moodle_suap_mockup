<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class DiarioController extends Controller
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

    public function list($matricula) {
        $results = app('db')->select("SELECT * FROM diarios t WHERE t.codigo = '{$matricula}'");
        foreach ($results as $key => $value) {

            $rs = app('db')->select("SELECT * FROM turmas t WHERE t.id = {$value->id}");
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

            $rs = app('db')->select("SELECT * FROM componentes_curriculares t WHERE t.id = {$value->id}");
            if (!empty($rs)) {
                $value->componente_curricular = $rs[0];
            } else {
                $value->componente_curricular = null;
            }

            $rs = app('db')->select("SELECT * FROM campi t WHERE t.id = {$value->id}");
            if (!empty($rs)) {
                $value->campus = $rs[0];
            } else {
                $value->campus = '';
            }

        }
        return response()->json($results);
    }
}
