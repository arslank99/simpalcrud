<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/all.css')}}">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Open+Sans:wght@300;400;500&family=Raleway:wght@100;200;300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/style.css')}}">
	<title>{{ $title }}</title>
</head>
<body class="bg-dark">
	<div class="container-fluid text-light">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-2">
						@include('component-display.sidebar')
					</div>
					<div class="col-md-10">
						{{$content}}
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
	<script src="{{ asset('bootstrap/js/all.js')}}"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.bundle.js')}}"></script>
</body>
</html>