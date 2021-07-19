@extends('layouts.plantillabpig')
@section('headerdatos')
    <link rel="stylesheet" href="referencia randum"> 
@endsection
@section('contenidopvistax')
 
    <div>contenido extra </div>
    <form method="POST" action="/contratos"> 

        @csrf
           
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
            gp<br>
            <input type="text" name=" gp" value="{{$contrato->gp}}">
        </label>
        {!! $errors->first(' gp','<small>:message</small><br>') !!}

        <label for="">
            ncliente<br>
            <input type="text" name="ncliente" value="{{$contrato->ncliente}}">
        </label>
        {!! $errors->first('ncliente','<small>:message</small><br>') !!}

        <label for="">
            sr<br>
            <input type="text" name="sr" value="{{$contrato->sr}}">   
        </label>
        {!! $errors->first('sr','<small>:message</small><br>') !!}
        <br>

        <label for="">
            escliente<br>
            <input type="text" name="escliente" value="{{$contrato->escliente}}">   
        </label>
        {!! $errors->first('escliente','<small>:message</small><br>') !!}

        <label for="">
            mtc<br>
            <input type="text" name=" mtc" value="{{$contrato->mtc}}">   
        </label>
        {!! $errors->first('username','<small>:message</small><br>') !!}

        <label for="">
            ncon<br>
            <input type="text" name=" ncon" value="{{$contrato->ncon}}">   
        </label>
        {!! $errors->first(' ncon','<small>:message</small><br>') !!}

        <label for="">
            ffc<br>
             <input type="text" name="ffc" value="{{$contrato->ffc}}">   
         </label>
         {!! $errors->first('','<small>:message</small><br>') !!}

         <label for="">
            fic<br>
             <input type="text" name="fic" value="{{$contrato->fic}}">   
         </label>
         {!! $errors->first('fic','<small>:message</small><br>') !!}

         <label for="">
            tp<br>
             <input type="text" name="tp" value="{{$contrato->tp}}">   
         </label>
         {!! $errors->first('tp','<small>:message</small><br>') !!}

         <label for="">
            mc<br>
             <input type="text" name="mc" value="{{$contrato->mc}}">   
         </label>
         {!! $errors->first('mc','<small>:message</small><br>') !!}

         <label for="">
            sai<br>
             <input type="text" name="sai" value="{{$contrato->sai}}">   
         </label>
         {!! $errors->first('sai','<small>:message</small><br>') !!}

         <label for="">
             ff <br>
             <input type="text" name="ff" value="{{$contrato->ff}}">   
         </label>
         {!! $errors->first('ff','<small>:message</small><br>') !!}

         <label for="">
            pp<br>
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
            ra <br>
             <input type="text" name="ra" value="{{$contrato->ra}}">   
         </label>
         {!! $errors->first(' ra','<small>:message</small><br>') !!}

         <label for="">
           cofe <br>
             <input type="text" name="cofe" value="{{$contrato->cofe}}">   
         </label>
         {!! $errors->first('cofe','<small>:message</small><br>') !!}

         <label for="">
            ca<br>
             <input type="" name="ca" value="{{$contrato->ca}}">   
         </label>
         {!! $errors->first('ca','<small>:message</small><br>') !!}

         <label for="">
            prog<br>
             <input type="text" name="prog" value="{{$contrato->prog}}">   
         </label>
         {!! $errors->first('prog','<small>:message</small><br>') !!}

         <label for="">
            antiso<br>
             <input type="text" name="antiso" value="{{$contrato->antiso}}">   
         </label>
         {!! $errors->first('antiso','<small>:message</small><br>') !!}

         
         

         <label for="">
            codicon<br>
             <input type="text" name="codicon" value="{{$contrato->codicon}}">   
         </label>
         {!! $errors->first('codicon','<small>:message</small><br>') !!}

           
 
         <label for="">
            otro<br>
             <input type="text" name="otro" value="{{$contrato->otro}}">   
         </label>
         {!! $errors->first('otro','<small>:message</small><br>') !!}

         <label for="">
            duco<br>
             <input type="text" name="duco" value="{{$contrato->duco}}">   
         </label>
         {!! $errors->first('duco','<small>:message</small><br>') !!}

         <label for="">
            feterco<br>
             <input type="text" name="feterco" value="{{$contrato->feterco}}">   
         </label>
         {!! $errors->first('feterco','<small>:message</small><br>') !!}

         <label for="">
            ajprein<br>
             <input type="text" name="ajprein" value="{{$contrato->ajprein}}">   
         </label>
         {!! $errors->first('ajprein','<small>:message</small><br>') !!}

         <label for="">
            feajuin <br>
             <input type="text" name="feajuin" value="{{$contrato->feajuin}}">   
         </label>
         {!! $errors->first('feajuin','<small>:message</small><br>') !!}

         <label for="">
            perajin <br>
             <input type="text" name="perajin" value="{{$contrato->perajin}}">   
         </label>
         {!! $errors->first('perajin','<small>:message</small><br>') !!}


         <label for="">
           ajpreprod<br>
             <input type="text" name="ajpreprod" value="{{$contrato->ajpreprod}}">   
         </label>
         {!! $errors->first('ajpreprod','<small>:message</small><br>') !!}
         
         <label for="">
            fepajprod<br>
             <input type="text" name="fepajprod" value="{{$contrato->fepajprod}}">   
         </label>
         {!! $errors->first('fepajprod','<small>:message</small><br>') !!}
         <label for="">
            peajprod<br>
             <input type="text" name="peajprod" value="{{$contrato->peajprod}}">   
         </label>
         {!! $errors->first('peajprod','<small>:message</small><br>') !!}
         
         <label for="">
             ajpreco<br>
             <input type="text" name=" ajpreco" value="{{$contrato->ajpreco}}">   
         </label>
         {!! $errors->first(' ajpreco','<small>:message</small><br>') !!}
         
         <label for="">
            fepajpre<br>
             <input type="text" name="fepajpre" value="{{$contrato->fepajpre}}">   
         </label>
         {!! $errors->first('fepajpre','<small>:message</small><br>') !!}
         
         <label for="">
            perajpre<br>
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
         
         
        <button>guardar</button>
        <button type="submit">eliminar</button>
    </form> 
@endsection
@section('footer')
prueva en los escrips 
@endsection
