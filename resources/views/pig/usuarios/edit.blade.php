@extends('layouts.plantillabpig')
@section('headerdatos')
    <link rel="stylesheet" href="referencia randum"> 
@endsection

@section('contenidopvistax')
 
    <div>contenido extra </div>
    <form  action="/usuarios/{{$usuario->id}}" method="POST"> 
        @csrf 
        @method('PUT')
        <label for="">
            nombres <br>
            <input type="text" name="nombres" value="{{$usuario->nombres}}">
        </label>
        {!! $errors->first('nombres','<small>:message</small><br>') !!}

        <br>
        <label for="">
            apellido paterno<br>
            <input type="text" name="app" value="{{$usuario->app}}">
        </label>
        {!! $errors->first('app','<small>:message</small><br>') !!}

        <label for="">
            apellido materno<br>
            <input type="text" name="apm" value="{{$usuario->apm}}">
        </label>
        {!! $errors->first('apm','<small>:message</small><br>') !!}

        <label for="">
            email<br>
            <input type="email" name="email" value="{{$usuario->email}}">
        </label>
        {!! $errors->first('email','<small>:message</small><br>') !!}

        <label for="">
            nivel de acceso<br>
            <input type="text" name="nivelda" value="{{$usuario->nivelda}}">   
        </label>
        {!! $errors->first('nivelda','<small>:message</small><br>') !!}
        <br>

        <label for="">
            kam<br>
            <input type="text" name="kam" value="{{$usuario->kam}}">   
        </label>
        {!! $errors->first('kam','<small>:message</small><br>') !!}

        <label for="">
            username<br>
            <input type="text" name="username" value="{{$usuario->username}}">   
        </label>
        {!! $errors->first('username','<small>:message</small><br>') !!}

        <label for="">
           password<br>
            <input type="text" name="password" value="{{$usuario->password}}">   
        </label>
        {!! $errors->first('password','<small>:message</small><br>') !!}

        <label for="">
            verificacion de password<br>
             <input type="text" name="vpassword" value="{{$usuario->vpassword}}">   
         </label>
         {!! $errors->first('vpassword','<small>:message</small><br>') !!}

         
        <button>cancelar </button>
        <button type="submit">guardar </button>
    </form> 

@endsection
@section('footer')
prueva en los escrips 
@endsection