<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteApiController extends Controller
{
    public function index(){
        $estudiantes = Estudiante::get();
        return response()->json(
            $estudiantes
        );
    }
}
