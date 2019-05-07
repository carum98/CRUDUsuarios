@extends('layout')

@section('title', 'Usuarios')

@section('content')
    <h1>{{ $title }}</h1>

    
    <p><a href="{{route('users.create')}}" class="btn btn-primary">Crear Usuario</a></p>

    @if($users->isNotEmpty())
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Accion</th>
          </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
          <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>

                    <form action="{{ route('users.destroy', $user)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <a href="{{ route('users.show',$user) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                        <a href="{{ route('users.edit',$user) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                        <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                    </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@else
      <p>No hay usuarioos registrados</p>
@endif

@endsection

@section('sidebar')
    @parent

    <h2>Barra lateral personalizada!</h2>
    
@endsection 