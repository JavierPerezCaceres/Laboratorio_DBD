<!DOCTYPE html>
<html>
<head>
	<!-- Título página -->
	<title>Pedidos Rightnow</title>

	<!-- template -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	
	<!-- Estilos en archivo prueba.css -->
	<link href="css/prueba.css" rel="stylesheet">
	<link href="css/prueba2.css" rel="stylesheet">

	<!-- Funcion en archivo prueba.js -->
	<script src="js/prueba.js"></script>
	
</head>
<body>
@include('layouts.app')
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
	        <form action="{{ route('search') }}" method="POST">
	          @csrf
	          <div class="row">
	            <div class="col-md-offset-2 col-md-8 col-sm-12 text-center"> 
	              <div class="search-form">
	                <!-- /.col 4 -->
	                <div class="col-sm-4">
	                  <select class="form-control" name="ciudad_id" id="ciudad_id" onChange="habilitar(this.form)">
	                    <option value="0" selected="selected">
							Selecciona tu ciudad
	                    </option>
	                    @foreach ($cities as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                 	    @endforeach
	                  </select>
	                </div>
	            
	                <div class="col-sm-6">
	                  <select class="form-control" name="district_id" id="district" disabled="true" onchange="habilitar_boton_search(this.form) ">
	                    <option value="0" selected="selected">
							Selecciona tu distrito
	                    </option>
	                    <option value=""></option>
	                  </select>
	                </div>
	                <!-- /.col 3 -->
	                <div class="col-sm-2">
	                  <button type="submit" id="boton_search" class="btn btn-lg btn-primary site-btn2" disabled="true">Search Now</button>
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
			 	@foreach($best_restaurants as $restaurant)
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

<!-- Boostrap -->
<script src="js/prueba.js"></script>

<script languaje="javascript">

function habilitar(form,cities)
{
  if (form.ciudad_id.selected == true && form.cuidad_id.value != 0)

  {
    form.district_id.disabled = true;
  }
  else
  {
    form.district_id.disabled = false;
  }
}

function habilitar_boton_search(form, districts)
{
	if (form.district_id.selected == true && form.district_id.value != 0)
	{
		form.boton_search.disabled =true;
	}
	else
	{
		form.boton_search.disabled =false;
	}
}
/////
$('#ciudad_id').on('change', function(e){
  console.log(e);
  var ciudad_id = e.target.value;
 
  $.get('/districts/' + ciudad_id, function(data) {
    console.log(data);
    $('#district').empty();
	$('#district').append('<option value="0" selected="selected">Selecciona tu distrito</option>');          
    $.each(data, function(index,subCatObj){
      $('#district').append('<option value="'+subCatObj.id+'">'+subCatObj.name+'</option>');          
    });
  });
});
////
// @foreach ($districts as $district)
//                         <option value="{{$district->id}}">{{$district->name}}</option>
//                  	    @endforeach
</script>
</body>
</html>