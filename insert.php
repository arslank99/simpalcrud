<?php 

include 'db.php';

$name = $_REQUEST['Name'];
$age  = $_REQUEST['Age'];
$city = $_REQUEST['City'];


$sql = "INSERT INTO student(name,age,city) VALUES('$name','$age','$city')";
$result = mysqli_query($conn,$sql) or die("SQL Query Failed");
if ($result == 1) {
	echo 1;
}else{
	echo 0;
}




 ?>