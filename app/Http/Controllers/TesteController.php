<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index() {
        //return 'ahaha';
        $teste = 'oi';
        dd($teste);
    }

}
