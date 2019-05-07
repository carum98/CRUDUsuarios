@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')
    <h1>Usuario {{ $user->id }}</h1>

    <p>Mostrando detalle del usuario: {{ $user->id }}</p>

    <p>Nombre {{$user->name}}</p>
    <p> Correo {{$user->email}}</p>
    <p><a href="{{ route('users.index') }}">Regresar al listado de usuarios</a></p>

@endsection 