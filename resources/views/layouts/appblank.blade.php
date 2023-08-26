<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Bootstrap core CSS -->

		<link href="/css/bootstrap.min.css" rel="stylesheet">

		<link href="fonts/css/font-awesome.min.css" rel="stylesheet">
		<link href="/css/animate.min.css" rel="stylesheet">

		<!-- Custom styling plus plugins -->
		<link href="/css/custom.css" rel="stylesheet">
		<link href="/css/icheck/flat/green.css" rel="stylesheet">

		<script src="/js/jquery.min.js"></script>	
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
                @yield('content')    
        </div>
    </body>
</html>
