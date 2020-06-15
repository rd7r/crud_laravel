@extends('layouts.app')

@section('title','Piratas Create')

@section('content')

    <h1 class="font-italic">Pirata Create</h1>

    <form method="POST" action="/trainers" class="control-group my-3" enctype="multipart/form-data">
    @csrf
		<div class="row">
			<div class="col-lg-2">
				<label class="my-1" style="font-size: 20px;">Name:</label>
        <label class="my-1" style="font-size:20px;">Descripción</label>
				<label class="my-1" style="font-size: 20px; padding-top:120%;">Avatar:</label>
			</div>
			<div class="col-lg-8">
				<input name="name" type="text" class="form-control col-lg-6 my-2" placeholder="Enter Name">
        <textarea name="descripcion" rows="8" cols="80" class="form-control col-lg-6 my-2" placeholder="Enter Descripcion"></textarea>
        <input name="avatar" type="file" class="col-lg-6 my-2">
			</div>
		</div>

		<button type="submit" class="btn btn-outline-success mt-5">Enviar</button>

    </form>

@endsection
