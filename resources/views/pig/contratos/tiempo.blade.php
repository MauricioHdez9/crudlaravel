@extends('layouts.plantillabpig')
@section('headerdatos')
    <link rel="stylesheet" href="{{asset('css\stylecontratos.css')}}"> 
@endsection
@section('titulo','contratos')
@section('navmas')
@section('navmas')
<li><a class="dropdown-item" href="#funciona con agregar contratos ">agregar contrato</a></li>
@endsection
@endsection
@section('contenidopvistax')
 
    <div>contenido extra </div>
    <div class="barra2">
        <table id="usuarios" class="barra table table-dark table-striped">
            <theard>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">fecha de terminacion de contrato </th>
                    
        
                </tr>
            </theard>
            <tbody>
                @foreach ($contratos as $contrato) 
                 
                <tr>
                    <td>{{$contrato->id}}</td>
                    
                    <td>{{$contrato->feterco}}</td>
                    
                    
                    
                   
                </tr>
                             
                

            </tbody>
          </table>

    </div>
    
@endsection
@section('footer')
prueva en los escrips 
@endsection
