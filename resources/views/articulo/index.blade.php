@extends('layouts.plantillabase')
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@endsection
@section('contenido')
<h1>vista Index</h1>
     
	<a href="articulos/create" class="btn btn-primary">crear</a>
		<table id="articulos" class="table table-dark table-striped">
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
				<td>
					<form action="{{ route('articulos.destroy',$articulo->id)}}" method="POST">
						<a href="/articulos/{{$articulo->id}}/edit"> editar </a>
						@csrf
						@method('DELETE')
						<button>eliminar</button>	
					</form>

				</td>
				
				
				
				
			</tr>
				
			@endforeach
		</tbody>
	  </table>
	  @section('js')
	  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
			
		  <script>

			$(document).ready(function()
			{ $('#articulos').DataTable({
					"lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
				});
			});
			
		  <script>
	  @endsection
@endsection