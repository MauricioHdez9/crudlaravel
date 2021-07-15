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
                <th scope="col">rozon social </th>
                <th scope="col">alias </th>
                <th scope="col">grupo </th>
                <th scope="col">numero de cliente </th>
                <th scope="col">subregion </th>
                <th scope="col">estado del cliente</th>
                <th scope="col">motivo de cancelacion</th>
                <th scope="col">numero de contrato</th>
                <th scope="col">fecha de firma de contrato</th>
                <th scope="col">fecha de inicio de cobro </th>
                <th scope="col">tipo de programa</th>
                <th scope="col">modelo de cobro</th>
                <th scope="col">sistema a impactar </th>
                <th scope="col">frecuncia de facturacion</th>
                <th scope="col">plazo de pagos</th>
                <th scope="col">link contrato </th>
                <th scope="col">link caratula</th>
                <th scope="col">renovacion automatica</th>
                <th scope="col">renovacion automatica</th>
                <th scope="col">contrato original y firmado en expediente </th>
                <th scope="col">caratula</th>
                <th scope="col">proteccion de genes</th>
                <th scope="col">anticorrucion y soborno</th>
                <th scope="col">codigos de conducta</th>
                <th scope="col">duracon de contrato</th>
                <th scope="col">fecha de terminacion de contrato </th>
                <th scope="col">ajuste de precio por inflacion</th>
                <th scope="col">fecha del primer ajuste </th>
                <th scope="col">Periodicidad del ajuste </th>
                <th scope="col">Ajuste de precio por productividad</th>
                <th scope="col">Fecha del primer ajuste</th>
                <th scope="col">Periodicidad del ajuste</th>
                <th scope="col">Ajuste de precio por contrato</th>
                <th scope="col">Fecha del primer ajuste</th>
                <th scope="col">Periodicidad del ajuste</th>
                <th scope="col">comentarios generales </th>
    
            </tr>
        </theard>
        <tbody>
            @foreach ($contratos as $contrato) 
             
            <tr>
                <td>{{$contrato->id}}</td>
                <td>{{$contrato->razon}}</td>
                <td>{{$contrato->alias}}</td>
                <td>{{$contrato->gp}}</td>
                <td>{{$contrato->ncliente}}</td>
                <td>{{$contrato->sr}}</td>
                <td>{{$contrato->escliente}}</td>
                <td>{{$contrato->mtc}}</td>
                <td>{{$contrato->ncon}}</td>
                <td>{{$contrato->ffc}}</td>
                <td>{{$contrato->fic}}</td>
                <td>{{$contrato->tp}}</td>
                <td>{{$contrato->mc}}</td>
                <td>{{$contrato->sai}}</td>
                <td>{{$contrato->ff}}</td>
                <td>{{$contrato->pp}}</td>
                <td>{{$contrato->linkc}}</td>
                <td>{{$contrato->linkca}}</td>
                <td>{{$contrato->ra}}</td>
                <td>{{$contrato->cofe}}</td>
                <td>{{$contrato->ca}}</td>
                <td>{{$contrato->prog}}</td>
                <td>{{$contrato->antiso}}</td>
                <td>{{$contrato->codicon}}</td>
                <td>{{$contrato->otro}}</td>
                <td>{{$contrato->duco}}</td>
                <td>{{$contrato->feterco}}</td>
                <td>{{$contrato->ajprein}}</td>
                <td>{{$contrato->feajuin}}</td>
                <td>{{$contrato->perajin}}</td>
                <td>{{$contrato->ajpreprod}}</td>
                <td>{{$contrato->fepajprod}}</td>
                <td>{{$contrato->peajprod}}</td>
                <td>{{$contrato->ajpreco}}</td>
                <td>{{$contrato->fepajpre}}</td>
                <td>{{$contrato->perajpre}}</td>
                <td>{{$contrato->kam}}</td>
                <td>{{$contrato->kad}}</td>
                
                
               
            </tr>
                
            @endforeach
        </tbody>
      </table>
@endsection
@section('footer')
prueva en los escrips 
@endsection

