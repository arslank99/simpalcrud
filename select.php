<?php 


include 'db.php';


$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql) or die("Query Failed");
$output = "";
if (mysqli_num_rows($result) > 0 ) {
	$output = "<table>
	    <thead>
        <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Age</th>
           <th>City</th>
           <th>Edit</th>
           <th>Delete</th>
        </tr>
        </thead>";
        while ($row = mysqli_fetch_assoc($result)) {
         	 $output.= "<tr>
         	            <td>{$row['id']}</td>
         	            <td>{$row['name']}</td>
         	            <td>{$row['age']}</td>
         	            <td>{$row['city']}</td>
                      <td class='edit-btn' data-eid='{$row['id']}'>
                        <button class='btn btn-warning'>Edit</button>
                      </td>
                      <td class='delete-btn' data-id='{$row['id']}'>
                        <button class='btn btn-danger'>Delete</button>
                      </td>
         	           </tr>"; 
         }
        $output .= "</table>";  
        mysqli_close($conn);
        echo $output;
}else{
   echo "<h3> No Record Found </h3>";
}

 ?>