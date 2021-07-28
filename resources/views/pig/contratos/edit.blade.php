@extends('layouts.plantillabpig')
@section('headerdatos')
    <link rel="stylesheet" href="referencia randum"> 
@endsection
@section('contenidopvistax')
 
    <div>contenido extra </div>
    <form method="POST" action="/contratos/{{$contrato->id}}"> 

        @csrf
        @method('PUT')  
        <label for="">
            razon <br>
            <input type="text" name="razon" value="{{$contrato->razon}}">
        </label>
        {!! $errors->first('razon','<small>:message</small><br>') !!}

        <br>
        <label for="">
            alias<br>
            <input type="text" name="alias" value="{{$contrato->alias}}">
        </label>
        {!! $errors->first('alias','<small>:message</small><br>') !!}

        <label for="">
            grupo<br>
            <input type="text" name=" gp" value="{{$contrato->gp}}">
        </label>
        {!! $errors->first(' gp','<small>:message</small><br>') !!}

        <label for="">
             numero de cliente<br>
            <input type="text" name="ncliente" value="{{$contrato->ncliente}}">
        </label>
        {!! $errors->first('ncliente','<small>:message</small><br>') !!}

        <label for="">
            sub region<br>
            <input type="text" name="sr" value="{{$contrato->sr}}">   
        </label>
        {!! $errors->first('sr','<small>:message</small><br>') !!}
        <br>

        <label for="">
            estado del cliente<br>
            <input type="text" name="escliente" value="{{$contrato->escliente}}">   
        </label>
        {!! $errors->first('escliente','<small>:message</small><br>') !!}

        <label for="">
            motivo de cancelacion<br>
            <input type="text" name=" mtc" value="{{$contrato->mtc}}">   
        </label>
        {!! $errors->first('username','<small>:message</small><br>') !!}

        <label for="">
            numero  de contrato<br>
            <input type="text" name=" ncon" value="{{$contrato->ncon}}">   
        </label>
        {!! $errors->first(' ncon','<small>:message</small><br>') !!}

        <label for="">
            fecha de firma del contrato<br>
             <input type="text" name="ffc" value="{{$contrato->ffc}}">   
         </label>
         {!! $errors->first('','<small>:message</small><br>') !!}

         <label for="">
            fecha de inicio de contrato<br>
             <input type="text" name="fic" value="{{$contrato->fic}}">   
         </label>
         {!! $errors->first('fic','<small>:message</small><br>') !!}

         <label for="">
            tipo de programa <br>
             {{-- <input type="text" name="tp" value="{{$contrato->tp}}"> --}}
             <select name="tp">
                <option value= "materno" >masterno</option> 
                <option value= "terminal">terminal</option> 
                <option value= "completo">complemento</option>
                 
             </select>  
         </label>
         {!! $errors->first('tp','<small>:message</small><br>') !!}

         <label for="">
            modelo de cobro<br>
             {{-- <input type="text" name="mc" value="{{$contrato->mc}}"> --}}
             <select name="mc">
                <option value= "lencho destetado materno">lencho destetado materno</option> 
                <option value= "lencho destetado paterno">lencho destetado terminal</option> 
                <option value= "lencho destetado programa">lencho destetado programa</option>
                <option value= "completo">completo</option> 
                <option value= "hembra instalada materna">hembra instalada materna</option> 
                <option value= "hembra instalada terminal">hembra instalada terminal</option> 
                <option value= "hembra instalada programa">hembra instalada programa</option>
                <option value= "completo">completo</option> 
                <option value= "hembra absorbida masterna">hembra absorbida masterna</option>  
                <option value= "abuela instalada">abuela instalada</option> 
                <option value= "uso de macho materno">uso de macho materno</option> 
                <option value= "uso de macho terminal">uso de macho terminal</option> 
             </select>   
         </label>
         {!! $errors->first('mc','<small>:message</small><br>') !!}

         <label for="">
            sistema a inpactar<br>
             <input type="text" name="sai" value="{{$contrato->sai}}">   
         </label>
         {!! $errors->first('sai','<small>:message</small><br>') !!}

         <label for="">
             frecuencia de facturacion <br>
             <input type="text" name="ff" value="{{$contrato->ff}}">   
         </label>
         {!! $errors->first('ff','<small>:message</small><br>') !!}

         <label for="">
            plazo de pago<br>
             <input type="text" name="pp" value="{{$contrato->pp}}">   
         </label>
         {!! $errors->first('pp','<small>:message</small><br>') !!}

         <label for="">
            linkc<br>
             <input type="text" name="linkc" value="{{$contrato->linkc}}">   
         </label>
         {!! $errors->first('linkc','<small>:message</small><br>') !!}

         <label for="">
            linkca<br>
             <input type="text" name="linkca" value="{{$contrato->linkca}}">   
         </label>
         {!! $errors->first('linkca','<small>:message</small><br>') !!}

         <label for="">
            renovacion automatica <br>
             <input type="text" name="ra" value="{{$contrato->ra}}">   
         </label>
         {!! $errors->first(' ra','<small>:message</small><br>') !!}

         <label for="">
           contrato original firmado en expediente <br>
             <input type="text" name="cofe" value="{{$contrato->cofe}}">   
         </label>
         {!! $errors->first('cofe','<small>:message</small><br>') !!}

         <label for="">
            caratula<br>
             <input type="" name="ca" value="{{$contrato->ca}}">   
         </label>
         {!! $errors->first('ca','<small>:message</small><br>') !!}

         <label for="">
            protecion de genes <br>
             <input type="text" name="prog" value="{{$contrato->prog}}">   
         </label>
         {!! $errors->first('prog','<small>:message</small><br>') !!}

         <label for="">
            anticorrucion y soborno <br>
             <input type="text" name="antiso" value="{{$contrato->antiso}}">   
         </label>
         {!! $errors->first('antiso','<small>:message</small><br>') !!}

         
         

         <label for="">
            codigos de conducta<br>
             <input type="text" name="codicon" value="{{$contrato->codicon}}">   
         </label>
         {!! $errors->first('codicon','<small>:message</small><br>') !!}

           
 
         <label for="">
            otro<br>
             <input type="text" name="otro" value="{{$contrato->otro}}">   
         </label>
         {!! $errors->first('otro','<small>:message</small><br>') !!}

         <label for="">
            duracion de contrato<br>
             <input type="text" name="duco" value="{{$contrato->duco}}">   
         </label>
         {!! $errors->first('duco','<small>:message</small><br>') !!}

         <label for="">
            fecha terminacion de contrato<br>
             <input type="text" name="feterco" value="{{$contrato->feterco}}">   
         </label>
         {!! $errors->first('feterco','<small>:message</small><br>') !!}

         <label for="">
            ajuste precio inflacion<br>
             <input type="text" name="ajprein" value="{{$contrato->ajprein}}">   
         </label>
         {!! $errors->first('ajprein','<small>:message</small><br>') !!}

         <label for="">
            fecha ajuste inflacion <br>
             <input type="text" name="feajuin" value="{{$contrato->feajuin}}">   
         </label>
         {!! $errors->first('feajuin','<small>:message</small><br>') !!}

         <label for="">
            periocidad ajuste inflacion <br>
             <input type="text" name="perajin" value="{{$contrato->perajin}}">   
         </label>
         {!! $errors->first('perajin','<small>:message</small><br>') !!}


         <label for="">
           ajuste precio de productividad<br>
             <input type="text" name="ajpreprod" value="{{$contrato->ajpreprod}}">   
         </label>
         {!! $errors->first('ajpreprod','<small>:message</small><br>') !!}
         
         <label for="">
            fecha 1° ajuste productividad<br>
             <input type="text" name="fepajprod" value="{{$contrato->fepajprod}}">   
         </label>
         {!! $errors->first('fepajprod','<small>:message</small><br>') !!}
         <label for="">
            Periodicidad ajuste producion<br>
             <input type="text" name="peajprod" value="{{$contrato->peajprod}}">   
         </label>
         {!! $errors->first('peajprod','<small>:message</small><br>') !!}
         
         <label for="">
             ajuste presiocio contrato<br>
             <input type="text" name=" ajpreco" value="{{$contrato->ajpreco}}">   
         </label>
         {!! $errors->first(' ajpreco','<small>:message</small><br>') !!}
         
         <label for="">
            fecha del °1 ajuste <br>
             <input type="text" name="fepajpre" value="{{$contrato->fepajpre}}">   
         </label>
         {!! $errors->first('fepajpre','<small>:message</small><br>') !!}
         
         <label for="">
            periocidad ajuste precio<br>
             <input type="text" name="perajpre" value="{{$contrato->perajpre}}">   
         </label>
         {!! $errors->first('perajpre','<small>:message</small><br>') !!}
         
         <label for="">
            kam<br>
             <input type="text" name="kam" value="{{$contrato->kam}}">   
         </label>
         {!! $errors->first('kam','<small>:message</small><br>') !!}
         <label for="">
            kad <br>
             <input type="text" name="kad" value="{{$contrato->kad}}">   
         </label>
         {!! $errors->first('','<small>:message</small><br>') !!}

         <label for="">
            cg <br>
             <input type="text" name="cg" value="{{$contrato->cg}}">   
         </label>
         {!! $errors->first('cg','<small>:message</small><br>') !!}
         
         
        <button>cancelar </button>
        <button type="submit">guardar</button>
    </form> 
@endsection
@section('footer')
prueva en los escrips 
@endsection
