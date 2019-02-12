@extends('layouts.app')

	@section('title', 'Providers Create')

	@section('content')

	@include('common.errors')

	{!! Form::open(['route' => 'providers.store', 'method' => 'POST', 'files' => true]) !!}

	{{--<div class="form-group">
				{!!Form::label('name','Nombre') !!}
				{!!Form::text('name',null,['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!!Form::label('slug','Slug') !!}
				{!!Form::text('slug',null,['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!!Form::label('logo','Logo') !!}
				{!!Form::file('logo') !!}
			</div>--}}
			@include('providers.form');
		
			{!!Form::submit('Guardar',['class' => 'btn btn-primary']) !!}


	{!!Form::close()!!}

			{{--<form class="form-group" method="POST" action="/providers" enctype="multipart/form-data">
										@csrf
										<div class="form-group">
											<label for=""> Nombre </label>
											<input type="text" name="name" class=" form-control">
										</div>
						
										<div class="form-group">
											<label for=""> Logos </label>
											<input type="file" name="logo">
										</div>
						
											<button type="submit" class="btn btn-primary"> Guardar </button>
									</form>--}}
		@endsection


