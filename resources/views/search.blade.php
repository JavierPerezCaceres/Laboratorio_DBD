@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <form action="{{ route('search') }}" method="POST">
	      @csrf
        <div id="accordion">
          <input name="ciudad_id" id="ciudad_id" hidden type="text" class="form-control" name="" value="{{ $request->ciudad_id }}">
          <input name="district_id" id="district" hidden type="text" class="form-control" name="district" value="{{ $request->district_id }}">
          <div class="card card-header" id="headingOne">
                <a class="btn btn-link button-all" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h3>
                  <i class="fas fa-utensils"></i>
                  Tipo Restaurant
                  </h3>
                </a>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body scroll-filter">
              @foreach( $restaurant_categories as $category )
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="restaurant_category" id="restaurant_category-{{ $category->id }}" value="{{$category->id}}">
                    <label class="form-check-label" for="restaurant_category-{{ $category->id }}"> {{ $category->name }}</label>
                  </div>
              @endforeach
              </div>
            </div>
          </div>
          <div class="card card-header" id="headingTwo">
                <a class="btn btn-link button-all collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h3>
                  <i class="fas fa-check-square"></i>
                  Comida</h3>
                </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body scroll-filter">
              @foreach( $products as $product )
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="product-{{ $product->id }}" id="product-{{ $product->id }}" value="{{$product->id}}">
                    <label class="form-check-label" for="product-{{ $product->id }}"> {{ $product->name }}</label>
                  </div>
              @endforeach
              </div>
            </div>
          </div>
          <div class="card card-header" id="headingThree">
                <a class="btn btn-link button-all collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h3>
                  <i class="fas fa-star"></i>
                  Valoración
                  </h3>
                </a>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body scroll-filter">
                <h3>Mayor a:</h3>
                @for($i = 1; $i < 6; $i++)
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="evaluation" id="evaluation-{{ $i }}" value="{{$i}}">
                      @if( $i == 1)
                        <label class="form-check-label" for="evaluation-{{ $i }}"> 1 Estrella</label>
                      @else
                        <label class="form-check-label" for="evaluation-{{ $i }}"> {{ $i }} Estrellas</label>
                      @endif
                    </div>
                @endfor
              </div>
            </div>
          </div>
        </div>
        <button type="submit" id="boton_search" class="btn btn-lg btn-primary site-btn2 filtro-button">Aplicar Filtros</button>
        </form>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <div class="row">
          @if( $restaurants == null)
            <div class="card h-100 rest-not-found"><span>No pudimos encontrar restaurantes que cumplan con esos criterios de búsqueda.</span>
              <img class="sad" src="{{ asset('Img/sad.png') }}" alt="Sad">
            </div>
          @endif
          @foreach ($restaurants as $restaurant)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="/restaurantViews/{{ $restaurant->restaurant->id }}"><img class="card-img-top" src="Img/4.jpg" alt=""></a>
                <div class="card-body">
                  <h1 class="card-title">
                    <a href="/restaurantViews/{{ $restaurant->restaurant->id }}">{{ $restaurant->restaurant->name }}</a>
                  </h1>
                  <!-- calcular estrellas -->
                  <p class="card-text">{{round($restaurant->restaurant->valoration->sum('score')/$restaurant->restaurant->valoration->count(),1)}}
                    @for($i = 1; $i < 6; $i++)
                      @if($i == intval($restaurant->restaurant->valoration->sum('score')/$restaurant->restaurant->valoration->count())+1)
                        <i class="fas fa-star-half-alt"></i>
                      @else
                        @if($i>intval($restaurant->restaurant->valoration->sum('score')/$restaurant->restaurant->valoration->count())+1)
                          <i class="far fa-star"></i>
                        @else
                          <i class="fas fa-star"></i>
                        @endif
                      @endif
                    @endfor
                  </p>
                  <p class="card-text"><i class="fas fa-map-marker-alt"></i>
                    {{$restaurant->restaurant->street}} {{$restaurant->restaurant->number}}</p>
                  <p class="card-text"><i class="fas fa-clock"></i>
                    Desde {{ $restaurant->restaurant->opening_hour }} hasta {{ $restaurant->restaurant->closing_hour }}</p>
                  <p class="card-text"><i class="fas fa-motorcycle"></i>
                    Delivery disponible!</p>
                  <p class="card-text"><i class="fas fa-utensils"></i>
                    Cocina: {{ $restaurant_categories[$restaurant->restaurant->category_restaurant_id-1]->name}}</p>
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
@endsection