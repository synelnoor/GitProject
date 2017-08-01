<html>
<head>
	<title>Latihan</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	
</head>
<body>
	@include('includes.navbar')

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
			
				@yield('content')
			</div>	
		</div>
	</div>

	@include('includes.footer')

	<script type="text/javascript" src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>

