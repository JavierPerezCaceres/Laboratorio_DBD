@extends('admin.template.main')

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
	              <select class="form-control" name="comuna_id" disabled="true" >
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
	                <a class="btn btn-lg btn-primary site-btn2" href="/search">Search Now</a>
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
			 
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
                        
                        <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                        
						<div class="title">
							<h4>Instagram</h4>
						</div>
                        
						<div class="text">
							<span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
						</div>
                        
						<a href="#">Learn More</a>
                        
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
					    
					    <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
                    
						<div class="title">
							<h4>Twitter</h4>
						</div>
                        
						<div class="text">
							<span id="restaurants">Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
						</div>
                        
						<a href="#">Learn More</a>
                        
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
                        
                        <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
                        
						<div class="title">
							<h4>Facebook</h4>
						</div>
                        
						<div class="text">
							<span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
						</div>
                        
						<a href="#">Learn More</a>
                        
					 </div>
				</div>	 
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
                        
                        <i class="fa fa-pinterest-p fa-3x" aria-hidden="true"></i>
                        
						<div class="title">
							<h4>Pinterest</h4>
						</div>
                        
						<div class="text">
							<span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
						</div>
                        
						<a href="#">Learn More</a>
                        
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
					    
					    <i class="fa fa-google-plus fa-3x" aria-hidden="true"></i>
                    
						<div class="title">
							<h4>Google</h4>
						</div>
                        
						<div class="text">
							<span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
						</div>
                        
						<a href="#">Learn More</a>
                        
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
                        
                        <i class="fa fa-github fa-3x" aria-hidden="true"></i>
                        
						<div class="title">
							<h4>Github</h4>
						</div>
                        
						<div class="text">
							<span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
						</div>
                        
						<a href="#">Learn More</a>
                        
					 </div>
				</div>
		
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

    form.comuna_id.disabled = true;

    }

    else

    {

    form.comuna_id.disabled = false;
    }

}



</script>
@endsection