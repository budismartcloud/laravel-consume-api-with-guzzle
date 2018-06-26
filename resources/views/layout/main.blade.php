<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link a href="{{asset('public/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('public/js/jquery-3.1.1.min.js')}}"></script>
</head>
<body>
	@include('layout.menu')
	<br><br>
	<div class="row">
		<div class="col-xs-12">
			<div class="container">
				<div class="col-lg-12">
					@yield('content')
				</div>
			</div>
		</div>
	</div>
</body>
</html>