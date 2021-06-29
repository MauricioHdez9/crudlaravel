<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
    public  function index( Request $request)
    {
        $users = DB::select('select * from users where active = ?', [1]);

        return view('/pig.vista2', ['users' => $users]);
    
               

    }
}
