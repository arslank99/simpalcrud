<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "ajax";
$conn = mysqli_connect($servername,$username,$password,$database);

$student_id = $_REQUEST['id'];

$sql = "DELETE FROM student WHERE id = '{$student_id}'";
$result = mysqli_query($conn,$sql) or die("Query Failed");

if ($result == 1) {
	echo 1;
}else{
	echo 0;
}

 ?>