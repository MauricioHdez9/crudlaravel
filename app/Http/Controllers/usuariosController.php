<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Requests\usuarios;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $usuarios = Usuario::all();
        return view('pig.vista3')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'country_name' => 'required|max:255',
        //     'symptoms' => 'required',
        //     'cases' => 'required|numeric',
        // ]);
        // $show = Corona::create($validatedData);

        // $validatedData = $request->validate
        // ([

        //     'nombres' => 'requiered',
        //     'app'     => 'requiered',
        //     'apm'     => 'requiered',
        //     'email'   => 'requiered|email',
        //     'nivelda' => 'requiered',
        //     'kam'     => 'requiered',
        //     'username'=> 'requiered',
        //     'password'=> 'requiered',
        //  ]);
        

        $usuario = new Usuario();
        $usuario ->nombres  = $request->get('nombres');
        $usuario ->app      = $request->get('app');
        $usuario ->apm      = $request->get('apm');
        $usuario ->email    = $request->get('email');
        $usuario ->nivelda  = $request->get('nivelda');
        $usuario ->kam      = $request->get('kam');
        $usuario ->username = $request->get('username');
        $usuario ->password = $request->get('password');

        $usuarios->save();

        return redirect('/pig/vista3');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
