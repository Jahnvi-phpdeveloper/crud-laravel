<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/css/app.css">
		<link rel="stylesheet" href="{{URL::asset('assets/css/navbar.css')}}">
		<title>Learning Laravel</title>
	</head>
	<body>
		@include('inc.navbar')
		@yield('content')
		@include('inc.sidebar')
	</body>
</html>