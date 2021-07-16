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
        return view('pig.usuarios.index')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pig.usuarios.create');
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
        

        $usuarios = new Usuario();
        $usuarios->nombres   = $request->get('nombres');
        $usuarios->app       = $request->get('app');
        $usuarios->apm       = $request->get('apm');
        $usuarios->email     = $request->get('email');
        $usuarios->nivelda   = $request->get('nivelda');
        $usuarios->kam       = $request->get('kam');
        $usuarios->username  = $request->get('username');
        $usuarios->password  = $request->get('password');
        $usuarios->vpassword = $request->get('vpassword');

        $usuarios->save();

        return redirect('/usuarios');
        
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
        $usuario = Usuario::find($id);
        return view('pig/usuarios/edit')->with('usuario',$usuario);
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
