<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Bootstrap Material Admin by Bootstrapious.com</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="robots" content="all,follow">
<!-- Bootstrap CSS-->
<link rel="stylesheet" href="{{ asset('distribution/vendor/bootstrap/css/bootstrap.min.css') }}">
<!-- Font Awesome CSS-->
<link rel="stylesheet" href="{{ asset('distribution/vendor/font-awesome/css/font-awesome.min.css') }}">
<!-- Fontastic Custom icon font-->
<link rel="stylesheet" href="{{ asset('distribution/css/fontastic.css') }}">
<!-- Google fonts - Poppins -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
<!-- theme stylesheet-->
<link rel="stylesheet" href="{{ asset('distribution/css/style.default.css') }}" id="theme-stylesheet">
<!-- Custom stylesheet - for your changes-->
<link rel="stylesheet" href="{{ asset('distribution/css/custom.css') }}">
<!-- Favicon-->
<link rel="shortcut icon" href="{{ asset('distribution/img/favicon.ico') }}">

@yield('librariesCSS')