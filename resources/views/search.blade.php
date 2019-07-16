<!DOCTYPE html>
<html>
<head>

  @section('style')

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/1a73430d21.js"></script>

  @endsection

	<!-- Título página -->
	<title>Pedidos Rightnow</title>
	<!-- Funcion en archivo prueba.js -->
	
</head>
<body>
  @include('layouts.app')
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h3>
                  <i class="fas fa-book-reader"></i>
                  Tipo de comida</h1>
                </button>
              </h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              @foreach( $restaurant_categories as $category )
                <div class="card-body">
                  <input type="checkbox" name="test-1" id="test-1" value="{{$category->id}}">
                  <label for="test-1"> {{ $category->name }}</label>
                </div>
              @endforeach
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h3>
                  <i class="fas fa-check-square"></i>
                  Categorías</h3>
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              @foreach( $products as $product )
                <div class="card-body">
                  <input type="checkbox" name="test-1" id="test-1" value="{{$product->id}}">
                  <label for="test-1"> {{ $product->name }}</label>
                </div>
              @endforeach
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h3>
                  <i class="fas fa-star"></i>
                  Valoración</h3>
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                <h3>Mayor a:</h3>
                @for($i = 1; $i < 6; $i++)
                  <div class="card-body">
                    <input type="checkbox" name="test-1" id="test-1" value="{{$i}}">
                    @if( $i == 1)
                      <label for="test-1"> 1 Estrella</label>
                    @else
                      <label for="test-1"> {{ $i }} Estrellas</label>
                    @endif
                  </div>
                @endfor
              </div>
            </div>
          </div>
        </div>
        <button>Aplicar Filtros</button>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <div class="row">
          @foreach ($restaurants as $restaurant)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="/restaurantViews/{{ $restaurant->id }}"><img class="card-img-top" src="Img/4.jpg" alt=""></a>
                <div class="card-body">
                  <h1 class="card-title text-center">
                    <a href="/restaurantViews/{{ $restaurant->id }}">{{ $restaurant->name }}</a>
                  </h1>
                  <!-- calcular estrellas -->
                  <p class="card-text">{{round($restaurant->valoration->sum('score')/$restaurant->valoration->count(),1)}}
                    @for($i = 1; $i < 6; $i++)
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
                    {{$restaurant->street}} {{$restaurant->number}}, {{ $restaurant->district->name }}</p>
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
</body>
</html>