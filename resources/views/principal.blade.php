@extends('layouts.app')

@section('title','Home')

@section('style')
	<link href="css/prueba.css" rel="stylesheet">
	<link href="css/prueba2.css" rel="stylesheet">
@endsection

@section('script')
	<script src="js/prueba.js"></script>
@endsection

@section('content')
	<div id="myCarousel" class="carousel slide" data-interval="false">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="item active">
	      <img src="http://foodbakery.chimpgroup.com/wp-content/uploads/bg-image1.jpg" style="width:100%" class="img-responsive">
	      <div class="container">
	        <div class="caraous-title text-center" >
	            <div class="row">
	            <div class="col-md-12">
	                <span>Non-Profit Organization</span>
	                    <h1><span>RAISE</span> YOUR HELPING HAND</h1>
	                    <h3>We are non-profit NGO & Charity Organization</h3>
	            </div> 
	            </div>
	            <form name="ubicacion" method="POST">
	            <div class="row">
	                      <div class="col-md-offset-2 col-md-8 col-sm-12 text-center"> 
	                          <div class="search-form">
	            <!-- /.col 4 -->
	            <div class="col-sm-4">
	              <select class="form-control" name="ciudad_id" onChange="habilitar(this.form)">
	                <option value="0" selected="selected">
	                  Select your city
	                </option>
	                @foreach ($cities->all() as $citie)
                        <option value="{{$citie->id}}">{{$citie->name}}</option>
                 	@endforeach
	              </select>
	            </div>
	            
	            <div class="col-sm-6">
	              <select class="form-control" name="district_id" disabled="true" onchange="habilitar_boton_search(this.form)">
	                <option value="0" selected="selected">
	                  Select your district
	                </option>
	                @foreach ($districts->all() as $district)
                        <option value="{{$district->name}}">{{$district->name}}</option>
                 	@endforeach
	              </select>
	            </div>
	            <!-- /.col 3 -->
	            <div class="col-sm-2">
	                <a class="btn btn-lg btn-primary site-btn2" href="/search" disable>Search Now</a>
	            </div>
	            <!-- /.col 1 -->
	         
	      		</div>
          		</div>
      			</div>
      			</form>
	        </div>
	      </div>
	    </div>
	      </div>
	  <!-- Controls -->
	  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	    <span class="icon-prev"></span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" data-slide="next">
	    <span class="icon-next"></span>
	  </a>  
</div>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="box">
    <div class="container">
     	<div class="row">
			 	
			 	@foreach($restaurants as $restaurant)
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

					<div class="box-part text-center">
						<img src="https://www.clikisalud.net/wp-content/uploads/2016/03/comida-r%C3%A1pida.jpg" class="card-img-top" style="width:100%" class="img-responsive"> 
						<h4>{{$restaurant->name}}</h4>
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
                        
						<a href="/restaurantViews/{{ $restaurant->id }}">Learn More</a>
                        
					 </div>
				</div>
				@endforeach	 
		
		</div>		
    </div>
</div>

@endsection

@section('scriptPrueba')
	<script languaje="javascript">

function habilitar(form,cities)

{
    if (form.ciudad_id.selected == true)

    {

    form.district_id.disabled = true;

    }

    else

    {

    form.district_id.disabled = false;
    }

}

function habilitar_boton_search(form)
{
	if (form.district_id.selected == true)
	{
		form.boton_search.disabled =true;
	}

	else
	{
		form.boton_search.disabled =false;
	}
}



</script>
@endsection