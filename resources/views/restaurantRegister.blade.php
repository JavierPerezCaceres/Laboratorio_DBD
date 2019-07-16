<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Registra tu Restaurant</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>

    <!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/1a73430d21.js"></script>

</head>
<body class="form-v10">
@include('layouts.app')
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="{{ route('restaurantRegister') }}" method="post" id="solicitud_restaurante">
                @csrf
				<div class="form-left">
					<h2>
					    <i class="fas fa-info-circle"></i>
					        Información de registro
					    </h2>
					<div class="form-row">
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
                            <input id="nombre_solicitante" type="text" class="form-control @error('nombre_solicitante') is-invalid @enderror" name="nombre_solicitante" value="{{ old('nombre_solicitante') }}" placeholder="Nombre solicitante" required autocomplete="nombre_solicitante" autofocus>

                            @error('nombre_solicitante')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="form-row form-row-2">
                            <input id="apellido_solicitante" type="text" class="form-control @error('apellido_solicitante') is-invalid @enderror" name="apellido_solicitante" value="{{ old('apellido_solicitante') }}" placeholder="Apellido solicitante" required autocomplete="apellido_solicitante" autofocus>

                            @error('apellido_solicitante')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
					</div>
					<div class="form-row">
						<input id="rut_empresa" type="text" class="form-control @error('rut_empresa') is-invalid @enderror" name="rut_empresa" value="{{ old('rut_empresa') }}" placeholder="Rut de Empresa" required autocomplete="rut_empresa" autofocus>

                            @error('rut_empresa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
					</div>
					<div class="form-row form-row-3">
							<input id="csis" type="text" class="form-control @error('csis') is-invalid @enderror" name="csis" value="{{ old('csis') }}" placeholder="Código de la Superintendencia de salud" required autocomplete="csis" autofocus>

                            @error('csis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
					</div>
					<div class="centrado">
					<img class= "picture1" src="Img/solicitud.svg" >
					</div>
				</div>
				<div class="form-right">
					<h2>
					<i class="fas fa-utensils"></i>
					Información general del Restaurant
					</h2>
					<div class="form-row">
						<input id="nombre_restaurant" type="text" class="form-control @error('nombre_restaurant') is-invalid @enderror" name="nombre_restaurant" value="{{ old('nombre_restaurant') }}" placeholder="Nombre del Restaurant" required autocomplete="nombre_restaurant" autofocus>

                        @error('nombre_restaurant')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="form-row">
						<input type="text" name="street" class="street" id="street" placeholder="Dirección de la casa matriz" required>
						<input id="dir_rest" type="text" class="form-control @error('dir_rest') is-invalid @enderror" name="dir_rest" value="{{ old('dir_rest') }}" placeholder="Dirección de la casa matriz" required autocomplete="dir_rest" autofocus>

                        @error('dir_rest')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="form-row">
						<select name="country">
						    <option value="country">Tipo de cocina</option>
						    <option value="Vietnam">China</option>
						    <option value="Malaysia">Tradicional</option>
						    <option value="India">Blabla</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row">
							<input type="text" name="open" class="code" id="code" placeholder="Horario apertura" required>
						</div>
						<div class="form-row form-row">
							<input type="text" name="close" class="code" id="code" placeholder="Horario cierre" required>
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="your_email" id="your_email" class="input-text" placeholder="Precio promedio por persona">
					</div>
					<div class="form-row">
						<input type="text" name="phone" class="phone" id="phone" placeholder="Número de contacto" required>
					</div>
					<div class="form-checkbox">
						<label class="container"><p>Acepto los <a href="#" class="text">Términos y condiciones</a> de Pedidos Rightnow.</p>
						  	<input type="checkbox" name="checkbox">
						  	<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Enviar solicitud">
					</div>
				</div>
			</form>
		</div>
    </div>
@include('layouts.footer')
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>