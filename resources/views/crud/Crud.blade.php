<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<body>
<div class="header bg-success text-light text-center p-1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Crud</h1>
			</div>
		</div>
	</div>
</div>
<div class="container mt-5">
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
					<input type="text" class="form-control"  name="marks" id="Marks">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			@if (session()->has('status'))
				<div class="alert alert-success">
					{{session('status')}}
				</div>
			@endif
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
					<a href="{{url('edit',$stu->id)}}" class="btn btn-outline-primary">Edit</a>
					<a href="{{url('delete',$stu->id)}}" class="btn btn-outline-danger">Delete</a>
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