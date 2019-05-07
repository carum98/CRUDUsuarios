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

<form action="{{ url("usuarios/{$user->id}") }}" method="POST">

    {{ method_field('PUT') }}
    {!! csrf_field() !!}

    <input type="text" name="name" value="{{old('name', $user->name)}}">

    <input type="email" name="email" value="{{old('email', $user->email)}}">

    <input type="password" name="password">

    <button type="submit">Actualizar Usuario</button>

</form>



<p><a href="{{ route('users.index') }}">Regresar al listado de usuarios</a></p>

@endsection 