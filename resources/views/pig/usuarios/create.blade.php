@extends('layouts.plantillabpig')
@section('headerdatos')
    <link rel="stylesheet" href="referencia randum"> 
@endsection
@section('contenidopvistax')
 
    <div>contenido extra </div>
    <form method="POST" action="/usuarios"> 
        @csrf
        <label for="">
            nombres <br>
            <input type="text" name="nombres" value="{{old('nombres')}}">
        </label>
        {!! $errors->first('nombres','<small>:message</small><br>') !!}

        <br>
        <label for="">
            apellido paterno<br>
            <input type="text" name="app" value="{{old('app')}}">
        </label>
        {!! $errors->first('app','<small>:message</small><br>') !!}

        <label for="">
            apellido materno<br>
            <input type="text" name="apm" value="{{old('apm')}}">
        </label>
        {!! $errors->first('apm','<small>:message</small><br>') !!}

        <label for="">
            email<br>
            <input type="email" name="email" value="{{old('email')}}">
        </label>
        {!! $errors->first('email','<small>:message</small><br>') !!}

        <label for="">
            nivel de acceso<br>
            <input type="text" name="nivelda" value="{{old('nivelda')}}">   
        </label>
        {!! $errors->first('nivelda','<small>:message</small><br>') !!}
        <br>

        <label for="">
            kam<br>
            <input type="text" name="kam" value="{{old('kam')}}">   
        </label>
        {!! $errors->first('kam','<small>:message</small><br>') !!}

        <label for="">
            username<br>
            <input type="text" name="username" value="{{old('username')}}">   
        </label>
        {!! $errors->first('username','<small>:message</small><br>') !!}

        <label for="">
           password<br>
            <input type="text" name="password" value="{{old('password ')}}">   
        </label>
        {!! $errors->first('password','<small>:message</small><br>') !!}

        <label for="">
            verificacion de password<br>
             <input type="text" name="vpassword" value="{{old('vpassword ')}}">   
         </label>
         {!! $errors->first('vpassword','<small>:message</small><br>') !!}

         
        <button>guardar</button>
        <button type="submit">eliminar</button>
    </form> 

@endsection
@section('footer')
prueva en los escrips 
@endsection

