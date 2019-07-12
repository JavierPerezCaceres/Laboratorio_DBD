<!DOCTYPE html>
<html lang="en">
<!-- Todos -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

  	<title>Pedidos Rightnow</title>

  	<!-- Bootstrap core CSS -->
  	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
  	<link href="{{ asset('css/shop-homepage.css') }}" rel="stylesheet">


	
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/1a73430d21.js"></script>

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    	<div class="container">
			<a class="navbar-brand" href="/">Pedidos Rightnow</a>
      		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	        	<span class="navbar-toggler-icon"></span>
      		</button>
      		<div class="collapse navbar-collapse" id="navbarResponsive">
        		<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/">Menú principal
							<span class="sr-only">(current)</span>
						</a>
					</li>



                    <li class="nav-item">
						<a class="nav-link" href="/search">Search</a>
					</li>



					<li class="nav-item">
						<a class="nav-link" href="/">Sobre Nosotros</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/">Carrito de Compras</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/">Contacto</a>
					</li>

					<li>|</li>

					<li class="nav-item">
						<a class="nav-link" href="/login">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/register">Register</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/restaurantRegister">Restaurant Register</a>
					</li>
        		</ul>
      		</div>
    	</div>
  	</nav>

  	@yield('content')

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
