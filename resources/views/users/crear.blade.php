@extends('layout')

@section('title', "Crear Usuario")

@section('content')

<h1>Crear Usuario</h1>

@if($errors->any())

    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<form action="{{url('usuarios')}}" method="POST">
    {!! csrf_field() !!}

    <input type="text" name="name" value="{{old('name')}}">

    <input type="email" name="email" value="{{old('email')}}">

    <input type="password" name="password">

    <button type="submit">Crar Usuario</button>

</form>



<p><a href="{{ route('users.index') }}">Regresar al listado de usuarios</a></p>

@endsection 