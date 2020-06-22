@extends('layouts.app')

@section('title','Pirata')

@section('content')

      @include('common.alert')

      <img src="/images/{{ $trainer->avatar }}"class="card-img-top img-fluid m-5 rounded-circle mx-auto d-block" style="width:250px; height:250px;">
      <div class="text-center">
        <h3>{{ $trainer->name }}</h3>
        <p>{{ $trainer->descripcion }}</p>
      </div>
      <a href="/trainers/{{ $trainer->slug }}/edit" class="btn btn-outline-primary btn-block"><i class="fa fa-edit"> Editar</i></a>
      
      <form action="/trainers/{{ $trainer->slug }}" method="post" class="mt-2">
        @csrf
        @method('DELETE')
        <button type="submit" value="" class="btn btn-outline-danger btn-block"><span class="fa fa-trash">  Eliminar</span></button>

      </form>
@endsection
