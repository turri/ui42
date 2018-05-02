<!DOCTYPE html>
<html>
	<head>
		@include('partials.head')
	</head> 
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					@yield('content')
				</div>
			</div>
		</div>
	</body>
</html>