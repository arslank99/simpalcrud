<?php 

include 'db.php';

$studenteid = $_REQUEST['id'];

$sql = "SELECT * FROM student WHERE id = '{$studenteid}'";
$result = mysqli_query($conn,$sql) or die("Query Failed");
if (mysqli_num_rows($result) > 0) {
 while ($row = mysqli_fetch_assoc($result)) {

$html = '
<div id="modal-form">
<div id="close-btn">X</div>
<div class="text-center py-2" id="head"><h2>Edit Form</h2></div>
<div class="form-group my-2">
	<label for="" class="my-1"><b>Name :</b></label>
	<input type="hidden" class="form-control" value="'.$row['id'].'" id="stu_id">
	<input type="text" class="form-control" value="'.$row['name'].'" id="stu_name">
</div>
<div class="form-group my-2">
	<label for="" class="my-1"><b>Age :</b></label>
	<input type="text" class="form-control" value="'.$row['age'].'" id="stu_age">
</div>
<div class="form-group my-2">
	<label for="" class="my-1"><b>City :</b></label>
	<input type="text" class="form-control" value="'.$row['city'].'" id="stu_city">
</div>
<div class="form-group mt-3">
	<input type="submit" class="form-control btn btn-warning p-2" value="Save" id="save-btn">
</div></div></div>';
 } 
}
 mysqli_close($conn);
 echo $html;
?>