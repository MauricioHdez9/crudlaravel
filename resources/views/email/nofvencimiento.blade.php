<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	KAM Nombre completo),<br>
	VENCIMIENTO DE CONTRATO <br>
	El contrato (número de contrato) de (razón social del <br>
	cliente) vencerá el (fecha de término de contrato). <br>
		<div class="barra2">
			<table id="usuarios" class="barra table table-dark table-striped">
				<theard>
					<tr>

						<th scope="col">id</th>
						<th scope="col">numero de contrato</th>
						<th scope="col">razon social del cliente</th>
						<th scope="col">fecha de terminos del contrato</th>
						{{-- <th scope="col">stasus a elegir </th> --}}
														
					</tr>
				</theard>
				<tbody>
					@foreach ($contratos as $contrato) 
					 
					<tr>
						<td>{{$contrato->id}}</td>
						<td>{{$contrato->ncon}}</td>
						<td>{{$contrato->razon}}</td>
						<td>{{$contrato->feterco}}</td>
					</tr>
					
					@endforeach
					
	
				</tbody>
			  </table>
	    
		
			    Marca el status actual del proceso <br>
				1. SIN REVISAR: No se ha revisado con el cliente <br>
				2. EN REVISIÓN: En revisión con el KAD <br>
				3. PRESENTADO: Ya presentado con el cliente <br>
				4. CLIENTE LO TIENE: Ya en poder del cliente <br>
				5. PROCESO DE FIRMA: En proceso de firma <br>
				6. OTRO <br>
				7. FINALIZADO <br>
				hola:{{$contratoss->contratos->razon}}
				<div>
					hola2:{{$razon}}
				</div>
				
		{{-- <form  action="/usuarios/{{$usuario->id}}" method="POST">
			<select name="tp">
                <option value= "sin revisar">sin revisar</option> 
                <option value= "en revision">en revision </option> 
                <option value= "presentado">presentado</option>
				<option value= "cliente lo tiene ">cliente lo tiene</option>
				<option value= "proceso de firma">proceso de firma </option>
				<option value= "otro">otro</option>
				<option value= "finalizado">finalizado</option>
            </select>
		</form> --}}
	
		</div>
	 



</body>
</html>