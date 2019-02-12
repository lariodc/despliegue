@extends('layouts.app')

	@section('title', 'Provider Edit')

		@section('content')

		{!! Form::model($provider, ['route' => ['providers.update',$provider],'method' => 'PUT', 'files' => true]) !!}
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

	{!!Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}


		{!!Form::close()!!}
	{{--<form class="form-group" method="POST" action="/providers/{{$provider->slug}}" enctype="multipart/form-data">
					    @method('PUT')
						@csrf
						<div class="form-group">
							<label for=""> Nombre </label>
							<input type="text" name="name" value="{{$provider->name}}" class="form-control">
						</div>
		
						<div class="form-group">
							<label for=""> Logos </label>
							<input type="file" name="logo">
						</div>
		
							<button type="submit" class="btn btn-primary">Actualizar</button>
					</form>--}}
		@endsection