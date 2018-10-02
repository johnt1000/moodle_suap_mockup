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
        $results = app('db')->select("SELECT * FROM diarios t WHERE t.matricula = '{$matricula}'");
        foreach ($results as $key => $value) {
            $rs = app('db')->select("SELECT * FROM componentes_curriculares t WHERE t.id = {$value->id}");
            if (!empty($rs)) {
                $value->componente_curricular = $rs[0];
            } else {
                $value->componente_curricular = null;
            }
            
            $rs = app('db')->select("SELECT * FROM cursos t WHERE t.id = {$value->id}");
            if (!empty($rs)) {
                $value->curso = $rs[0];
            } else {
                $value->curso = '';
            }

            $rs = app('db')->select("SELECT * FROM campi t WHERE t.id = {$value->id}");
            if (!empty($rs)) {
                $value->campus = $rs[0];
            } else {
                $value->campus = '';
            }
            
            $rs = app('db')->select("SELECT * FROM ofertas t WHERE t.id = {$value->id}");
            if (!empty($rs)) {
                $value->oferta = $rs[0];
            } else {
                $value->oferta = '';
            }

            $rs = app('db')->select("SELECT * FROM turmas t WHERE t.id = {$value->id}");
            if (!empty($rs)) {
                $value->turma = $rs[0];
            } else {
                $value->turma = '';
            }
        }
        return response()->json($results);
    }
}
