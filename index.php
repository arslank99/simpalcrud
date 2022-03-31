<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Stylesheet-->
	<link rel="stylesheet" href="css/style.css">
	<title>index</title>
</head>
<body style="background-color:rgba(0,111,173,0.63);">
<div class="bg-custom">
<div class="container p-2">
	<div class="row">
		<div class="col-md-7 text-center">
			<h1>Ajax-PhP Crud</h1>
		</div>
		<div class="col-md-5 mt-2">
			<strong><label>Search : </label></strong>
			<input type="search" id="search" name="search" class="w-75 p-1">
		</div>
	</div>
</div>
</div>
<div class="container mt-5 p-3">
	<div class="row">
		<div class="col-md-6">
			<div class="bg-custom p-4">
				<strong><label for=""> Name :</label></strong><br>
				<input type="text" name="Name" id="Name" class="my-2 w-75 p-1" ><br>
			    <strong><label for=""> Age  :</label></strong><br>
				<input type="text" name="Age" id="Age" class="my-2 w-75 p-1" ><br>
				<strong><label for=""> city :</label></strong><br>
				<input type="text" name="City" id="City" class="my-2 w-75 p-1"><br>
				<input type="submit" class="btn btn-success mt-3 " id="save-data">
				
			</div>
		</div>
		<div class="col-md-6">
		<table id="table" class="p-3 bg-success text-light text-center table table-bordered table-hover mt-1"></table>
		<div id="custom-modal"></div>
	</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Ajax Code Start From here-->
<script type="text/JavaScript">

$(document).ready(function(){

//this is loadtable function
function loadtable(){
$.ajax({
url: 'select.php',
type: 'GET',
success: function(data){
$('#table').html(data);
}
});
}
loadtable();

//this is now live search data start here
$('#search').on('keyup',function(){
	var search_item = $(this).val();
	$.ajax({
		url:'search.php',
		type:'POST',
		data:{search : search_item},
		success : function(data){
           $('#table').html(data);
		}
	});
});
       
// this is a form insert data
$("#save-data").on('click', function(e){
e.preventDefault();
var name = $("#Name").val();
var stage  = $("#Age").val();
var city = $('#City').val();
$.ajax({
url: 'insert.php',
type: 'POST',
data: {
Name:name,
Age:stage,
City:city
},
success: function(data){
if (data == 1) {
$("#Name").val("");
$("#Age").val("");
$('#City').val("");
loadtable();
}else{
alert("Can't Save Record");
}

}
});
});

//this is edit select part now start
$(document).on('click' ,'.edit-btn', function(){
$("#custom-modal").show();
var studenteid = $(this).data('eid');
$.ajax({
url: "edit.php",
type: "POST",
data: {id:studenteid},
success:function(data){
var popupdata = data;
$("#custom-modal").html(popupdata);

}
});
});

//this is now update part of data
$(document).on('click','#save-btn',function(){
var student_id   = $('#stu_id').val();
var student_name = $('#stu_name').val();
var student_age  = $('#stu_age').val();
var student_city = $('#stu_city').val();
$.ajax({
url  : 'update.php',
type : 'POST',
data : {s_id :student_id, s_name : student_name, s_age : student_age, s_city: student_city},
success : function(data){
if (data == 1) {
$("#custom-modal").hide();
loadtable();
}
}
});
});

//this is close btn modal
$(document).on('click' ,'#close-btn', function(){
$("#custom-modal").hide();
});
		
// this is form delete data
$(document).on('click', '.delete-btn', function() {
var studentid = $(this).data('id');
var element = this;
$.ajax({
url: 'delete.php',
type: 'POST',
data: {id:studentid},
success:function(data){
if (data == 1) {
$(element).closest('tr').fadeOut();
}else{
alert('cannot delete data');
}
}
});

});
	});
</script>
</body>
</html>