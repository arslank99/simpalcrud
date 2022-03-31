<?php 


include 'db.php';

$id   = $_REQUEST['s_id'];
$name = $_REQUEST['s_name'];
$age  = $_REQUEST['s_age'];
$city = $_REQUEST['s_city'];

$sql = "UPDATE student SET name = '$name', age = '$age', city = '$city' WhERE id = '$id'";
$result = mysqli_query($conn,$sql) or die('Query Failed');

if ($result == 1) {
	echo 1 ;
}else{
	echo 0 ;
}

 ?>