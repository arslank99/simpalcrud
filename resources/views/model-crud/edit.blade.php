<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<title>Update</title>
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
<div class="container m-5">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-6">
			<form action="" method="POST">
				@csrf
				@method('PUT')
				<div class="mb-3">
					<label for="" class="form-label"><strong>Your Name:</strong></label>
					<input type="text" class="form-control" name="name" id="name" value="{{ $student->name }}">
				</div>
				<div class="mb-3">
					<label for="" class="form-label"><strong>Your City:</strong></label>
					<input type="text" class="form-control" name="city" id="name" value="{{ $student->city }}">
				</div>
				<div class="mb-3">
					<label for="" class="form-label"><strong>Your Marks:</strong></label>
					<input type="text" class="form-control"  name="marks" id="marks" value="{{ $student->marks }}">
				</div>
				<button type="submit" class="btn btn-outline-primary">Submit</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
</body>
</html>