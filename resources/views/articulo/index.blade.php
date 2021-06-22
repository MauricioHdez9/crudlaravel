@extends('layouts.plantillabase');
@section('contenido')
<h1>vista Index</h1>
     @csrf
	<a href="articulos/create" class="btn btn-primary">crear</a>
		<table class="table table-dark table-striped">
		<theard>
			<tr>
				<th scope="col">id</th>
				<th scope="col">codigo</th>
				<th scope="col">descripcion</th>
				<th scope="col">cantidad</th>
				<th scope="col">precio</th>
				<th scope="col">Acciones</th>
			</tr>
		</theard>
		<tbody>
			@foreach ($articulos as $articulo)
			 
			<tr>
				<td>{{$articulo->id}}</td>
				<td>{{$articulo->codigo}}</td>
				<td>{{$articulo->descripcion}}</td>
				<td>{{$articulo->cantidad}}</td>
				<td>{{$articulo->precio}}</td>
				<td><a href="">editar </a></td>
				<button>eliminar </button>
				
			</tr>
				
			@endforeach
		</tbody>
	  </table>
@endsection