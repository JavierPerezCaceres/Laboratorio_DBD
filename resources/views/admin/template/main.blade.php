<!DOCTYPE html>
<html>
<head>
	<!-- Título página -->
	<title>@yield('title','Default') | Panel de Administración</title>

	<!-- template -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	
	<!-- Estilos en archivo prueba.css -->
	@yield('style')

	<!-- Funcion en archivo prueba.js -->
	@yield('script')
	
</head>
<body>

	<!-- NAVBAR -->

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	      <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Brand</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	          <li class="active"><a href="#">Home</a></li>
	        <li><a href="#">About Us</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	           
	            <li><a href="#">Separated link</a></li>
	            
	            <li><a href="#">One more separated link</a></li>
	          </ul>
	        </li>
	        <li><a href="#">Portfolio</a></li>
	        <li><a href="#">Contact Us</a></li>   
	        
	      </ul>
	    </div><!-- /.navbar-collapse -->
	      </div><!-- /.container-collapse -->
	  </nav>


	<!-- ACA AGREGO EL CONTENIDO DE LA PAGINA CON YIELD CONTENT -->
		@yield('content')




<!-- PIE DE PAGINA -->

	<div class="footer-section">
	    <div class="footer">
		<div class="container">
			<div class="col-md-4 footer-one">
				<h5>About Us </h5>
			    <p>Cras sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
			    	<div class="social-icons"> 
	               <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	               <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
		            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
		            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
		        </div>	
			</div>
			<div class="col-md-3 footer-two">
			    <h5>Information </h5>
			    <ul>
										<li><a href="maintenance.html">Maintenance Tips</a></li>
										<li><a href="contact.html">Locations</a></li>
										<li><a href="about.html">Testimonials</a></li>
										<li><a href="about.html">Careers</a></li>
										<li><a href="about.html">Partners</a></li>
									</ul>
			</div>
			<div class="col-md-3 footer-three">
			    <h5>Helpful Links </h5>
			    <ul>
										<li><a href="maintenance.html">Maintenance Tips</a></li>
										<li><a href="contact.html">Locations</a></li>
										<li><a href="about.html">Testimonials</a></li>
										<li><a href="about.html">Careers</a></li>
										<li><a href="about.html">Partners</a></li>
									</ul>
			</div>
			<div class="col-md-2 footer-four">
			    <h5>Helpful Links </h5>
			    <ul>
										<li><a href="maintenance.html">Maintenance Tips</a></li>
										<li><a href="contact.html">Locations</a></li>
										<li><a href="about.html">Testimonials</a></li>
										<li><a href="about.html">Careers</a></li>
										<li><a href="about.html">Partners</a></li>
									</ul>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
	    <div class="footer-bottom">
	        <div class="container">
						<div class="row">
							<div class="col-sm-12 text-center ">
								<div class="copyright-text">
									<p>CopyRight © 2017 Digital All Rights Reserved</p>
								</div>
							</div> <!-- End Col -->
							
						</div>
					</div>
	    </div>
	</div>

	<!-- Boostrap -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	@yield('scriptPrueba')
</body>
</html>