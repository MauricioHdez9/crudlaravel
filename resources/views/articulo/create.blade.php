@extends('layouts.plantillabase');
@section('contenido')
<h2>crear registros</h2>

<form action = "/articulos" method="POST">
	@csrf
	 <div class="mb-3">
		<label for="" class="form-label">codigo</label>
		<input type="text"  name="codigo" class="form-control" id="codigo" placeholder="codigo123">
	  </div>
	  <div class="mb-3">
		<label for="" class="form-label">Descripcion</label>
		<input type="text"   name="descripcion" class="form-control" id="descripcion" placeholder="descripcion">
		  </div>
	  <div class="mb-3">
		<label for="" class="form-label">cantidad</label>
		<input type="number"   name="catindad" class="form-control" id="catindad" placeholder="cantidad">
	  </div>
	  <div class="mb-3">
		<label for=""  class="form-label">precio</label>
		<input type="number" name="precio" class="form-control" id="precio" placeholder="$100">
		
	  </div>
	  <a href="/articulos" class="btn btn-secondary" >cancelar</a>
		<button type="submit" class="btn btn-primary">guardar</button>
	
</form>
	
@endsection
