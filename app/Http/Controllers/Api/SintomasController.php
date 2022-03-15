<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Sintoma;

class SintomasController extends Controller
{
    public function index(){
        $sintomas = Sintoma::all();
        return $sintomas;

    }
}
