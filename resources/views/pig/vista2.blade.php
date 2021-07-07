@extends('layouts.plantillabpig')
@section('headerdatos')
    <link rel="stylesheet" href="referencia randum"> 
@endsection
@section('contenidopvistax')
 
    <div>contenido extra </div>
    <form method="POST" action="{{route('vista2')}}"> 
        @csrf
        <label for="">
            nombres <br>
            <input type="text" name="nombres" value="{{old('nombres')}}">
        </label>
        {!! $errors->first('name','<small>:message</small><br>') !!}
        <br>
        <label for="">
            apellido paterno<br>
            <input type="text" name="app" value="{{old('app')}}">
        </label>
        <label for="">
            apellido materno<br>
            <input type="text" name="apm" value="{{old('apm')}}">
        </label>
        <label for="">
            email<br>
            <input type="email" name="email" value="{{old('email')}}">
        </label>
        <label for="">
            nivel de acceso<br>
            <input type="text" name="app" value="{{old('app')}}">   
        </label>
        <br>
        <label for="">
            kam<br>
            <input type="text" name="kam" value="{{old('kam')}}">   
        </label>
        <label for="">
            username<br>
            <input type="text" name="kam" value="{{old('kam')}}">   
        </label>
        <label for="">
           password<br>
            <input type="text" name="password" value="{{old('password ')}}">   
        </label>
        <label for="">
            verificacion de password<br>
             <input type="text" name="password" value="{{old('password ')}}">   
         </label>
         
        <button>guardar</button>
        <button>eliminar</button>
    </form> 

@endsection
@section('footer')
prueva en los escrips 
@endsection

