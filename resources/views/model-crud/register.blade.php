<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<title>Register</title>
	</head>
<body>
<div class="bg-light text-center p-2 text-info">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Crud With Model</h1>
			</div>
		</div>
	</div>
</div>
<div class="container p-2 m-5">
	<div class="row mb-3">
		<div class="col-md-6 offset-md-5">
			<h3>Register</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5"></div>
		<div class="col-md-4">
			<form action="" method="POST">
				@csrf
				<div class="mb-3">
					<label for="" class="form-label"><strong>Name:</strong></label>
					<input type="text" class="form-control" name="name" id="name">
				</div>
				<div class="mb-3">
					<label for="" class="form-label"><strong>Email:</strong></label>
					<input type="email" class="form-control" name="email" id="email">
				</div>
				<div class="mb-3">
					<label for="" class="form-label"><strong>Password:</strong></label>
					<input type="password" class="form-control" name="password" id="password">
				</div>
				<div class="mb-3">
					<label for="" class="form-label"><strong>Contact:</strong></label>
					<input type="text" class="form-control" name="contact" id="contact">
				</div>
				<button type="submit" class="btn btn-outline-primary">Register</button>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

</body>
</html>
