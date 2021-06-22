@extends('layouts.plantillabase');
@section('contenido')
<h2>crear registros</h2>
<form action = "/articulos" method="POST"></form>
<div class="mb-3">
	<label for="" class="form-label">codigo</label>
	<input type="text" class="form-control" id="codigo" placeholder="codigo123">
  </div>
  <div class="mb-3">
	<label for="" class="form-label">Descripcion</label>
	<input type="text" class="form-control" id="descripcion" placeholder="descripcion">
  	</div>
  <div class="mb-3">
	<label for="" class="form-label">cantidad</label>
	<input type="text" class="form-control" id="catindad" placeholder="cantidad">
  </div>
  <div class="mb-3">
	<label for="" class="form-label">precio</label>
	<input type="text" class="form-control" id="precio" placeholder="$100">
	<a href="/articulos" class="btn btn-secondary" >cancelar</a>
	<button type="submit" class="btn btn-primary">guardadr</button>
  </div>
	
@endsection
