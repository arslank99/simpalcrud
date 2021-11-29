<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<title>Index</title>
	</head>
	<body>
<div class="bg-light text-center p-2 text-info">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1>Crud With Model</h1>
			</div>
			<div class="col-md-4">
				<a href="{{ asset('login') }}" class="btn btn-outline-danger">login</a>
				<a href="{{ asset('register') }}" class="btn btn-outline-info">Register</a>
			</div>
		</div>
	</div>
</div>
<div class="container m-5">
	<div class="row">
		<div class="col-md-6">
			<form action="" method="POST">
				@csrf
				<div class="mb-3">
					<label for="" class="form-label"><strong>Your Name:</strong></label>
					<input type="text" class="form-control" name="name" id="name">
				</div>
				<div class="mb-3">
					<label for="" class="form-label"><strong>Your City:</strong></label>
					<input type="text" class="form-control" name="city" id="name">
				</div>
				<div class="mb-3">
					<label for="" class="form-label"><strong>Your Marks:</strong></label>
					<input type="text" class="form-control"  name="marks" id="marks">
				</div>
				<button type="submit" class="btn btn-outline-primary">Submit</button>
			</form>
		</div>
<div class="col-md-6">
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">id</th>
				<th scope="col">Name</th>
				<th scope="col">Age</th>
				<th scope="col">Marks</th>
				<th scope="col">Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($students as $stu)
			<tr>
				<th>{{$stu->id}}</th>
				<td>{{$stu->name}}</td>
				<td>{{$stu->city}}</td>
				<td>{{$stu->marks}}</td>
				<td>
					<a href="{{url('edit2',$stu->id)}}" class="btn btn-outline-primary">Edit</a>
					<a href="{{url('delete2',$stu->id)}}" class="btn btn-outline-danger">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
	</div>
</div>
</body>
</html>