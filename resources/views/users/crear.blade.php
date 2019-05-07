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

    <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name">
    </div>
    
    <div class="form-group">
        <label for="email">Correo</label>
        <input type="email" name="email" value="{{old('email')}}" class="form-control" id="email">
    </div>
    
    <div class="form-group">
        <label for="clave">Contraseña</label>
        <input type="password" name="password" class="form-control" id="clave">
    </div>

    <button type="submit" class="btn btn-primary">Crar Usuario</button>
    <a href="{{ route('users.index') }}" class="btn btn-link">Regresar al listado de usuarios</a>
</form>




@endsection 