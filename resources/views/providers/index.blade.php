@extends('layouts.app')

	@section('title', 'Providers')

		@section('content')


			<div class="row">
				@foreach($providers as $provider)
					<div class="col-sm">
				   		<div class="card text-center" style="width: 18rem;margin-top: 100px">
  						<img style="height: 200px;width: 200px;background-color:#eaefa0;    margin: 20px;"class="card-img-top rounded-circle mx-auto d-block" src="images/{{$provider->logo}}" alt="">
  							<div class="card-body">
   					 			<h5 class="card-title">{{$provider->name}}</h5>
   								 <p class="card-text">Este operador tiene los siguientes paquetes disponibles </p>
   					 			<a href="/providers/{{$provider->slug}}" class="btn btn-primary">Ir a la oferta</a>
  							</div>
						</div>
					</div>
				@endforeach
			</div>
		@endsection
