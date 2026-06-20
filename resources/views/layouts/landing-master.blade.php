<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-click" data-menu-position="fixed" data-theme-mode="light">

    <head>

        <!-- Meta Data -->
		<meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="Rixzo - Laravel Bootstrap 5 Premium Admin &amp; Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="laravel template, laravel, laravel admin template, laravel admin panel, laravel dashboard, laravel framework, laravel developer, template admin, template dashboard, admin, bootstrap 5 dashboard, bootstrap dashboard, dashboard, laravel vite, vite laravel">

        <!-- TITLE -->
		<title>Rixzo - Laravel Bootstrap 5 Premium Admin &amp; Dashboard Template </title>

        <!-- FAVICON -->
        <link rel="icon" href="{{asset('build/assets/images/brand-logos/favicon.ico')}}" type="image/x-icon">

        <!-- BOOTSTRAP CSS -->
	    <link  id="style" href="{{asset('build/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        
        <!-- APP SCSS -->
        @vite(['resources/sass/app.scss'])
        

        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/icon-fonts/icons.css')}}" rel="stylesheet">

        @include('layouts.components.landing.styles')
        
        @yield('styles')

	</head>

    <body class="landing-body">

        <!-- SWITCHER -->
        @include('layouts.components.landing.switcher')

        <!-- END SWITCHER -->

        <!-- PAGE -->
        <div class="landing-page-wrapper">

            <!-- HEADER -->
            @include('layouts.components.landing.header')

            <!-- END HEADER -->

            <!-- SIDEBAR -->
            @include('layouts.components.landing.sidebar')

            <!-- END SIDEBAR -->

            <!-- MAIN-CONTENT -->
            @yield('content')
            <!-- END MAIN-CONTENT -->

            <!-- FOOTER -->
            @include('layouts.components.landing.footer')

            <!-- END FOOTER -->

        </div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->

        @include('layouts.components.landing.scripts')

        @yield('scripts')

        <!-- STICKY JS -->
        <script src="{{asset('build/assets/sticky.js')}}"></script>

        <!-- END SCRIPTS -->

    </body>
</html>