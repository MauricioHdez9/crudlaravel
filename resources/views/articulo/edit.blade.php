@extends('layauts.plantillabase')

@section('contenido')
<h2>editando</h2>
<form action = "/articulos/{{$articulo->id}}" method="POST">
	@csrf
	@method('PUT')
	 <div class="mb-3">
		<label for="" class="form-label">codigo</label>
		<input type="text"  name="codigo" class="form-control" id="codigo" value="{{$articulo->codigo}}">
	  </div>
	  <div class="mb-3">
		<label for="" class="form-label">Descripcion</label>
		<input type="text"   name="descripcion" class="form-control" id="descripcion"value="{{$articulo->descripcio}}">		  </div>
	  <div class="mb-3">
		<label for="" class="form-label">cantidad</label>
		<input type="number"   name="catindad" class="form-control" id="catindad" value="{{$articulo->cantidad}}">
		</div>
	  <div class="mb-3">
		<label for=""  class="form-label">precio</label>
		<input type="number" name="precio" class="form-control" id="precio" value="{{$articulo->precio}}" >
		
	  </div>
	  <a href="/articulos" class="btn btn-secondary" >cancelar</a>
		<button type="submit" class="btn btn-primary">guardar</button>
	
</form>
	
@endsection