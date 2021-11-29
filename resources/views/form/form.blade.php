<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="show" method="POST">
		@csrf
		<input type="text" name="name" placeholder="Enter Name"><br><br>
		@error('name')
		{{$message}}
		@enderror<br>
		<input type="text" name="password" placeholder="Enter Password"><br><br>
		@error('password')
		{{$message}}
		@enderror<br><br>
		<input type="submit" value="submit">
	</form>
</body>
</html>