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
        $rs = (object) ['professores' => null, 'alunos' => null];
        $rs->alunos = app('db')->select("SELECT * FROM alunos t WHERE t.diario_id = '{$diario}'");
        $rs->professores = app('db')->select("SELECT * FROM professores t WHERE t.diario_id = '{$diario}'");
        
        return response()->json($rs);
    }
}
