<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Pedidos Rightnow')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Estilos en archivo prueba.css -->
    @yield('style')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/1a73430d21.js"></script>


</head>
<body>

<!-- PIE DE PAGINA -->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center ">
                        <div class="copyright-text">
                            <p>CopyRight © 2019 Digital All Rights Reserved</p>
                        </div>
                    </div> <!-- End Col -->
                </div>
            </div>
        </div>
</body>
</html>
