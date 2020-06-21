@extends('layouts.app')

@section('title','Edit Pirata')

@section('content')

<h1 class="font-italic">Pirata Edit</h1>

<form method="POST" action="/trainers/{{ $trainer->slug }}" class="control-group my-3" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  
    @include('trainers/form',['trainer'=>$trainer])

  <button type="submit" class="btn btn-outline-success mt-5">Actualizar</button>

</form>

@endsection
