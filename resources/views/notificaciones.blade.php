@extends('layouts.plantillabpig')
@section('headerdatos')
    <link rel="stylesheet" href="referencia randum"> 
@endsection
@section('titulo','notificaciones')

@section('contenidopvistax')
 
    <div>contenido extra </div>
	<table id="usuarios" class="barra table table-dark table-striped">
		<theard>
			<tr>
				
				<th scope="col">rozon social </th>
				<th scope="col">numero de cliente </th>
				<th scope="col">renovacion automatica</th>
				<th scope="col">kam</th>
				
				
	
			</tr>
		</theard>
		<tbody>
			@foreach ( $contratos  as $contrato ) 
			 
			<tr>
				
				 <td>{{$contrato->razon}}</td>
				<td>{{$contrato->ncliente}}</td>
				<td>{{$contrato->ra}}</td>
				<td>{{$contrato->kam}}</td>
			    
			   <td> </td>
			</tr>
			
			@endforeach

			
			

		</tbody>
	  </table>
	  <table class="barra table table-dark table-striped">
		  <theard>
			<th scope="col">fecha de terminacion de contrato </th>
			<th scope="col">estatus</th>
			<th scope="col">respuesta del kam</th>
			<th scope="col">color</th>
			
		  </theard>
		  <tbody>
			@foreach ($contratos as $contrato) 
			 
			<tr>
				<td>{{$contrato->feterco}}</td>
				<th scope="col">estatus3</th>
				<th scope="col">hacer el eviado de correo</th>
				<th scope="col">color </th>
					 
			</tr>
			
			@endforeach


		  </tbody>
	  </table>
@endsection
@section('footer')
prueva en los escrips 
@endsection