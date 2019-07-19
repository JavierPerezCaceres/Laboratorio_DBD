<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Regístrate</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>

    <!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/1a73430d21.js"></script>

</head>
@include('layouts.app')
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
            <form method="POST" action="{{ route('newRegister') }}">
                @csrf
				<div class="form-left">
					<h2>
					<i class="fas fa-sign-in-alt"></i>
					Regístrate
					</h2>
					<div class="form-row">
					</div>
					<div class="form-row">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nombre" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="form-row form-row-3">
                            <input id="lastname" type="text" class="form-control @error('last name') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" placeholder="Apellido" autofocus>

                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
					</div>

					<div class="form-row form-row-3">
                            <input id="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" required placeholder="Número de teléfono" autocomplete="phoneNumber">

                            @error('phoneNumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
					</div>

					<div class="form-row form-row-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Correo electrónico" autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
					</div>

					<div class="form-row form-row-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Contraseña" autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
					</div>

					<div class="form-row form-row-3">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirma tu contraseña" autocomplete="new-password">
					</div>

					<div class="card-footer button-register centrado">
                        <button type="submit" class="btn btn-primary">
                        <i class="fas fa-key"></i> Registrarse
                        </button>
                  	</div>

				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>