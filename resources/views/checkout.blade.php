@extends('layouts.app')

@section('style')
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('Checkout/css/montserrat-font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Checkout/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('Checkout/fonts/themify-icons/themify-icons.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('Checkout/css/style.css') }}">


@endsection

@section('content')

    <div class="main">

        <div class="container-checkout">
            <h2>Confirmación de pedido</h2>
                <form method="POST" class="form-detail" action="{{ route('checkout') }}">
                    <h3>
                        <span class="icon"><i class="ti-user"></i></span>
                        <span class="title_text">Contacto</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">
                            <i class="fas fa-info-circle"></i>
                            Información personal: </span>
                            <span class="step-number">Paso 1 de 4</span>
                        </legend>
                        <div class="form-group">
                            <label for="first_name" class="form-label  required">Nombre</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="last_name" class="form-label required">Apellidos</label>
                            <input type="text" name="last_name" id="last_name" />
                            
                        </div>

                        <div class="form-group">
                            <label for="user_name" class="form-label required">Número de contacto</label>
                            <input type="text" name="phone_number" id="user_name" />
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label required">Correo electrónico</label>
                            <input type="email" name="email" id="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" />
                        </div>

                                            <div class="form-group">
                            <label for="address" class="form-label required">Nombre de la calle y número</label>
                            <input type="text" name="address" id="address" />
                        </div>

                        <div class="form-select">
                            <label for="country" class="form-label">Ciudad</label>
                            <div class="select-list required">
                                <select name="country" id="country">
                                    <option value="">Ciudad</option>
                                    <option value="Santiago">Santiago</option>
                                    <option value="Concepción">Concepción</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-select">
                            <label for="district" class="form-label">Comuna</label>
                            <div class="select-list">
                                <select name="district" id="gender">
                                    <option value="">Comuna</option>
                                    <option value="Quilicura">Quilicura</option>
                                    <option value="Conchalí">Conchalí</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>

                    <h3>
                        <span class="icon"><i class="ti-email"></i></span>
                        <span class="title_text">Entrega</span>
                    </h3>
                    <fieldset>
                        <legend>
                        <div class="form-select">
                            <span class="step-heading">
                            <i class="fas fa-motorcycle"></i>
                            Método de entrega: </span>
                            <span class="step-number">Paso 2 de 4</span>

                            <div class="select-list">
                                <select name="delivery" id="delivery">
                                    <option value="">Método de entrega</option>
                                    <option value="Delivery">Delivery</option>
                                    <option value="Reservar Mesa">Reservar Mesa</option>
                                </select>
                            </div>

        <!-- Opción Delivery -->
        <!-- Acá se debe seedear con las direcciones guardadas del usuario, si no esta logeado, se pasa al input siguiente -->
                            <div class="select-list">
                                <select name="delivery" id="delivery">
                                    <option value="">Dirección de entrega</option>
                                    <option value="Casa 1">Casa 1</option>
                                    <option value="Casa 2">Casa 2</option>
                                </select>
                            </div>

                            <div>
                                <label for="delivery" class="form-label form-row required">
                                Dirección de entrega</label>
                                <input type="text" name="delivery" class="delivery" />
                            </div>

        <!-- Opción Reservar Mesa -->
        <!-- En caso de Reservar mesa, después de la confirmación del pedido se retorna a la vista de orden de compra (resumen), no pasa por la de pago -->
                            <div>
                                <label for="book-date" class="form-label form-row required">
                                Fecha de reserva</label>
                                <input type="text" name="book-date" class="book-date" />
                            </div>

                            <div class="select-list">
                                <select name="book-time" id="book-time">
                                    <option value="">Hora de reserva</option>
                                    <option value="9:00">9:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                </select>
                            </div>

                            <div>
                                <label for="people-qty" class="form-label form-row required">
                                Cantidad de Personas </label>
                                <input type="text" name="people-qty" class="people-qty" />
                            </div>


                        </div>
                    </fieldset>

                    <h3>
                        <span class="icon"><i class="ti-star"></i></span>
                        <span class="title_text">Resumen</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">
                            <i class="fas fa-shopping-cart"></i>
                            Resumen de tu compra: </span>
                            <span class="step-number">Paso 3 de 4</span>
                        </legend>
                        
                        <!-- CARRITO DE COMPRAS -->
                    </fieldset>

                    <h3>
                        <span class="icon"><i class="ti-credit-card"></i></span>
                        <span class="title_text">Pago</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">
                            <i class="fas fa-money-bill-wave"></i>
                            Información de pago: </span>
                            <span class="step-number">Step 4 / 4</span>
                        </legend>
                            <div class="select-list">
                                <select name="payment" id="payment">
                                    <option value="">Medio de pago</option>
                                    <option value="Delivery">Efectivo</option>
                                    <option value="Reservar Mesa">Webpay</option>
                                    <option value="Reservar Mesa">Redcompra</option>
                                </select>
                            </div>

            <!-- Opción WebPay -->

                            <div>
                                <button class="btn btn-block">
                                <i class="fas fa-certificate"></i>         Ir a Webpay 
                                </button>
                            </div>

                        <!-- <div class="form-row">
                            <div class="form-date">
                                <label for="expiry_date" class="form-label">Expiry Date</label>
                                <div class="form-date-group">
                                    <div class="form-date-item">
                                        <select id="expiry_date" name="expiry_date"></select>
                                        <span class="select-icon"><i class="ti-angle-down"></i></span>
                                    </div>
                                    <div class="form-date-item">
                                        <select id="expiry_month" name="expiry_month"></select>
                                        <span class="select-icon"><i class="ti-angle-down"></i></span>
                                    </div>
                                    <div class="form-date-item">
                                        <select id="expiry_year" name="expiry_year"></select>
                                        <span class="select-icon"><i class="ti-angle-down"></i></span>
                                    </div>
                                </div>
                            </div> -->
    
                <!-- Opción Redcompra -->

                            <div class="form-select">
                                <label for="payment_type" class="form-label">Tipo de Tarjeta</label>
                                <div class="select-list">
                                    <select name="payment_type" id="payment_type">
                                        <option value="">Tipo de Tarjeta</option>
                                        <option value="Débito">Débito</option>
                                        <option value="Crédito">Crédito</option>
                                    </select>
                                </div>
                            </div>
                        </div> 

                    </fieldset>
            </form>
        </div>

    </div>
    <div class="footer">
        
    </div>
@endsection

@section('scriptPrueba')
    <!-- JS -->
    <script src="{{ asset('Checkout/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('Checkout/vendor/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('Checkout/vendor/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('Checkout/vendor/minimalist-picker/dobpicker.js') }}"></script>
    <script src="{{ asset('Checkout/js/main.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript"> 
        $.fn.datepicker.defaults.format = "dd/mm/yyyy";
        $.fn.datepicker.dates['es'] = {
            days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
            daysShort: ["Dom", "Lun", "Man", "Mier", "Jue", "Vier", "Sab"],
            daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
            months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            monthsShort: ["Ene", "Febr", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            today: "Hoy",
            clear: "Limpiar",
            format: "dd/mm/yyyy",
            titleFormat: "DD yyyy", /* Leverages same syntax as 'format' */
            weekStart: 0
            };
        $('.book-date').datepicker({language: "es"});

    </script>
@endsection
