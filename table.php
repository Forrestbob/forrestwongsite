<?php
include('dbConnect.php');
session_start();

$result = mysqli_query($conn,"SELECT * FROM my_db.test_table");

mysqli_close($conn);
?>

<div class="container">
  <h1>Test Database Connection</h1>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
      </tr>
    </thead>
    <tbody>
<?php 
	
	while($row = $result->fetch_assoc()){
		echo 
		'<tr>
			<td>'.$row['column1'].'</td>
			<td>'.$row['column2'].'</td>
			<td>'.$row['column3'].'</td>
		</tr>';
	}
mysqli_close($conn);
?>

    </tbody>
  </table>
</div>

</body>