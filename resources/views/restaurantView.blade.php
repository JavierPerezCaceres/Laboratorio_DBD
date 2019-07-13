@extends('layouts.app')

<!-- nico -->

@section('content')

<!-- Page Content -->
<div class="container">

<div class="row">

  <div class="col-lg-3">

    <h1 class="my-4">{{$restaurant->name}}</h1>
    <div class="list-group">
      <a href="#" class="list-group-item">Carta</a>
      <a href="#" class="list-group-item">Promociones</a>
      <a href="#" class="list-group-item">Recomendados</a>
    </div>

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="1.png" src="{{ asset('Img/1.png') }}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="2.png" src="{{ asset('Img/2.png') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="3.png" src="{{ asset('Img/3.png') }}" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="row">
  @foreach($menus as $menu)
    <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <!-- Se bugueo la imagen -->
              <a href="#"><img class="card-img-top" src="Img/1.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                      <a href="/">{{ $menu->name }}</a>
                  </h4>
                  <h5>${{ $menu->total_price }}</h5>
                  <p class="card-text">
                      @foreach($menu->menuProduct as $producto)
                      <i class="fas fa-utensils"></i>
                      {{$producto->product->name}}<br>  
                      @endforeach


                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
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