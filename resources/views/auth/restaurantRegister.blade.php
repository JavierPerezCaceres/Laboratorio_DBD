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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>

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
					        Información del solicitante
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
						<input id="codigo_SIS" type="text" class="form-control @error('codigo_SIS') is-invalid @enderror" name="codigo_SIS" value="{{ old('codigo_SIS') }}" placeholder="Código de la Superintendencia de Salud" required autocomplete="codigo_SIS" autofocus>

						@error('codigo_SIS')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<h2>
					    <i class="fas fa-sign-in-alt"></i>
					    Regístrate como usuario dueño de restaurant
					</h2>

					<div class="form-row form-row-3">
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Ingrese correo electrónico" required autocomplete="email" autofocus>

						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-row form-row-3">
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Ingresa tu contraseña" required autocomplete="new-password">

						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-row">
						<div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirma tu contraseña" required autocomplete="new-password">
                        </div>
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
					<div class="form-group">
						<div class="form-row form-row">
							<input id="dir_casa_matriz" type="text" class="form-control @error('dir_casa_matriz') is-invalid @enderror" name="dir_casa_matriz" value="{{ old('dir_casa_matriz') }}" placeholder="Nombre Calle" required autocomplete="dir_casa_matriz" autofocus>

							@error('dir_casa_matriz')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-row form-row">
							<input id="num_casa_matriz" type="text" class="form-control @error('num_casa_matriz') is-invalid @enderror" name="num_casa_matriz" value="{{ old('num_casa_matriz') }}" placeholder="Numero" required autocomplete="num_casa_matriz" autofocus>

							@error('num_casa_matriz')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
					<div class="form-row">
						<select name="category_id">
						    <option value="0" disabled selected="selected">Tipo de cocina</option>
							@foreach($restaurant_categories as $category)
							<option value="{{ $category->id }}">{{ $category->name }}</option>
							@endforeach
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row">
							<input id="opening_hour" type="text" class="form-control @error('opening_hour') is-invalid @enderror" name="opening_hour" value="{{ old('opening_hour') }}" placeholder="Horario apertura" required autocomplete="opening_hour" autofocus>

							@error('opening_hour')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-row form-row">
							<input id="closing_hour" type="text" class="form-control @error('closing_hour') is-invalid @enderror" name="closing_hour" value="{{ old('closing_hour') }}" placeholder="Horario apertura" required autocomplete="closing_hour" placeholder="Horario cierre" autofocus>

							@error('closing_hour')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
							
						</div>
					</div>
					<div class="form-row">
						<input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" placeholder="Precio promedio por persona" required autofocus>

						@error('price')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-row">
						<input id="contact_number" type="text" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" value="{{ old('contact_number') }}" placeholder="Número de contacto" required autofocus>

						@error('contact_number')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
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