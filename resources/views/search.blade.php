@extends('layouts.app')

@section('content')
	<!-- Page Content -->
	<div class="container">

<div class="row">

	<div class="col-lg-3">
		<div class="list-group">
			  <a href="#" class="list-group-item">Tipo comida</a>
			  <a href="#" class="list-group-item">Comida</a>
			  <a href="#" class="list-group-item">Valoración</a>
		</div>
	</div>
	<!-- /.col-lg-3 -->

	<div class="col-lg-9">

		<div class="row">

			@foreach ($restaurants as $restaurant)

				<div class="col-lg-4 col-md-6 mb-4">
					<div class="card h-100">
						  <a href="/restaurantViews/{{ $restaurant->id }}"><img class="card-img-top" src="Img/4.jpg" alt=""></a>
						  <div class="card-body">
							<h1 class="card-title">
								<a href="/restaurantViews/{{ $restaurant->id }}">{{ $restaurant->name }}</a>
							</h1>
							<!-- calcular estrellas -->
							<p class="card-text">{{round($restaurant->valoration->sum('score')/$restaurant->valoration->count(),1)}}
								@for($i = 1; $i <6; $i++)
									@if($i == intval($restaurant->valoration->sum('score')/$restaurant->valoration->count())+1)
									  <i class="fas fa-star-half-alt"></i>
									@else
										@if($i>intval($restaurant->valoration->sum('score')/$restaurant->valoration->count())+1)
											<i class="far fa-star"></i>
										@else
											<i class="fas fa-star"></i>
										@endif
									@endif
								@endfor
							  </p>
							<p class="card-text"><i class="fas fa-map-marker-alt"></i>
							{{ $restaurant->direction }}</p>
							<p class="card-text"><i class="fas fa-clock"></i>
							Desde {{ $restaurant->opening_hour }} hasta {{ $restaurant->closing_hour }}</p>
							<p class="card-text"><i class="fas fa-motorcycle"></i>
							Delivery disponible!</p>
							<p class="card-text"><i class="fas fa-utensils"></i>
							Cocina: {{ $restaurant_categories[$restaurant->category_restaurant_id-1]->name}}</p>
						  </div>
					</div>
				  </div>

			@endforeach

		</div>
		<!-- /.row -->

	  </div>
	  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->

@endsection