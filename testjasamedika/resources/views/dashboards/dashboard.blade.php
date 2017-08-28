<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'/>
	<title>Dashboard jasa Medika</title>
	<meta name='viewport' content='width=device-width,initial-scale=1, maximum-scale=1'/>
	{{HTML::style('css/bootstrap.min.css')}}
</head>
<body>
<!--menu-->
	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">
					Aplikasi Jasa Medika
				</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="logout">
						<i class="glyphicon glyphicon-off"></i>
						logout
					</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--content-->
	<div class="container">
		@yield('content')
	</div>
	<!--jscript-->
	{{HTML::script('js/jquery-3.1.0.min.js')}}
	{{HTML::script('js/bootstrap.min.js')}}

</body>
</html>