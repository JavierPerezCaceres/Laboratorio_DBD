<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Ingresa</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="public/css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="public/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

	<!-- Main Style Css -->
    <link rel="stylesheet" href="/sass/loginCss.css">

    <!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/1a73430d21.js" ></script>

</head>
@include('layouts.app')
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="#" method="post" id="myform">
				<div class="form-left">
					<h2>
					<i class="fas fa-sign-in-alt"></i>
					Ingresa a tu cuenta
					</h2>
					<div class="form-row">
					</div>
					<div class="form-row">
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo" autofocus>
						@error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="form-row form-row-3">
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Contraseña" autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>

					<div class="form-check">
                    	<label class="container">Recuérdame
 							 <input type="checkbox" checked="checked">
  							<span class="checkmark"></span>
						</label>
					</div>

					<div class="forgot-password btn-link">
						<link rel="stylesheet" type="text/css" href="">
						<a class="password">¿Olvidaste tu contraseña?</a>

					<div class="card-footer button-carrito centrado">
                    	<button class="btn btn-block"> 
                    	Ingresar </button>
                  	</div>

				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>