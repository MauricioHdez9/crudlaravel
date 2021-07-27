@extends('layouts.plantillabpig')
@section('headerdatos')
    <link rel="stylesheet" href="{{asset('css\stylecontratos.css')}}"> 
@endsection
@section('titulo','post')
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
                    <th scope="col">titulo</th>
                    <th scope="col">descripcion </th>
                    <th scope="col">comentario </th>
                    <th scope="col">id del usuario </th>
                    
        
                </tr>
            </theard>
            <tbody>
                @foreach ($posts as $post) 
                 
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->boyd}}</td>
                    <td>{{$post->comments->comment}}</td>
                    <td>{{$post->comments->post_id}}</td>
                               
                    <
                    
                    
                    
                   
                </tr>
                
                @endforeach
                

            </tbody>
          </table>

    </div>
    
@endsection
@section('footer')
prueva en los escrips 
@endsection

