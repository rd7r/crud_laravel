@extends('layouts.app')

@section('title','Trainers')

@section('content')

	<h2 class="font-italic text-center">Piratas del Caribe</h2>

	<div class="card-columns">
		@foreach($trainers as $trainer)
			<div class="card">
				<img src="/images/{{ $trainer->avatar }}" alt="" class="card-img-top img-fluid m-5 rounded-circle" style="width:250px; height:250px;">
				<div class="card-body">
					<h5 class="card-title text-center">{{ $trainer->name }}</h5>
					<p class="card-text">{{ $trainer->descripcion }}</p>
					<a href="/trainers/{{ $trainer->id }}" class="btn btn-outline-primary btn-block">Ver más</a>
				</div>
				<div class="card-footer">
					<p class="card-text">
						<small class="text-muted">{{ $trainer->created_at }}</small>
					</p>
				</div>
			</div>
		@endforeach
	</div>

@endsection
