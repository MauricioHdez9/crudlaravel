@extends('layouts.plantillabpig')
@section('headerdatos')
    <link rel="stylesheet" href="referencia randum"> 
@endsection
@section('navmas')
    <li><a class="dropdown-item" href="#funciona ">agregar a usuario</a></li>
@endsection
@section('contenidopvistax')
 
    <div>contenido extra </div>
    <a href="articulos/create" class="btn btn-primary">crear</a>
    <table id="usuarios" class="table table-dark table-striped">
    <theard>
        <tr>
            <th scope="col">id</th>
            <th scope="col">nombre</th>
            <th scope="col">app</th>
            <th scope="col">apm</th>
            <th scope="col">nivelda</th>
            <th scope="col">email</th>
            <th scope="col">kam</th>
            <th scope="col">username</th>
            <th scope="col">password</th>
            <th scope="col">vpassword</th>
            

        </tr>
    </theard>
    <tbody>
        @foreach ($usuarios as $usuario) 
         
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->nombres}}</td>
            <td>{{$usuario->app}}</td>
            <td>{{$usuario->apm}}</td>
            <td>{{$usuario->nivelda}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->kam}}</td>
            <td>{{$usuario->username}}</td>
            <td>{{$usuario->password}}</td>
            <td>{{$usuario->vpassword}}</td>
            <td>
                <form action="{{ route('usuarios.destroy',$usuario->id)}}" method="POST">
                    <a href="/usuarios/{{$usuario->id}}/edit"> editar </a>
                    @csrf
                    @method('DELETE')
                    <button>eliminar</button>	
                </form>

            </td>
            
            
        </tr>
            
        @endforeach
    </tbody>
  </table>
    
@endsection
@section('footer')
prueva en los escrips 
@endsection

