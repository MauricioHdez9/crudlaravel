@extends('layouts.plantillabpig')
@section('headerdatos')
    <link rel="stylesheet" href="referencia randum"> 
@endsection
@section('contenidopvistax')
 
    <div>contenido extra </div>
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
            @foreach ($contratos as $contrato) 
             
            <tr>
                <td>{{$contrato->id}}</td>
                <td>{{$contrato->nombres}}</td>
                <td>{{$contrato->app}}</td>
                <td>{{$contrato->apm}}</td>
                <td>{{$contrato->nivelda}}</td>
                <td>{{$contrato->email}}</td>
                <td>{{$contrato->kam}}</td>
                <td>{{$contrato->username}}</td>
                <td>{{$contrato->password}}</td>
                <td>{{$contrato->vpassword}}</td>
                
                
            </tr>
                
            @endforeach
        </tbody>
      </table>
@endsection
@section('footer')
prueva en los escrips 
@endsection

