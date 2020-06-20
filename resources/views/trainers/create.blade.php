@extends('layouts.app')

@section('title','Piratas Create')

@section('content')

  {!! Form::open(['url'=>'trainers.store', 'method'=>'put']) !!}

      <h1 class="font-italic">Pirata Create</h1>

      <form method="POST" action="/trainers" class="control-group my-3" enctype="multipart/form-data">
        @csrf

        @include('trainers.form')

    		<button type="submit" class="btn btn-outline-success mt-5">Enviar</button>

      </form>
@endsection
