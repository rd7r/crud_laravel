@extends('layouts.app')

@section('title','Pirata')

@section('content')

      <img src="/images/{{ $trainer->avatar }}"class="card-img-top img-fluid m-5 rounded-circle mx-auto d-block" style="width:250px; height:250px;">
      <div class="text-center">
        <h3>{{ $trainer->name }}</h3>
        <p>{{ $trainer->descripcion }}</p>
      </div>

@endsection
