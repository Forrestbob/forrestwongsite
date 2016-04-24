<?php
include('dbConnect.php');
session_start();

$result = mysqli_query($conn,"SELECT * FROM my_db.messages");

?>

<html lang="en">
<head>
  <title>Forrest Wong</title>
<link rel="icon"
     href="images/favicon-16x16.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1>Messages</h1>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
		<th>Email</th>
		<th>Date/Time</th>
		<th>Message</th>
      </tr>
    </thead>
    <tbody>
<?php 
	
	while($row = $result->fetch_assoc()){
		echo 
		'<tr>
			<td>'.$row['idmessages'].'</td>
			<td>'.$row['name'].'</td>
			<td>'.$row['email'].'</td>
			<td>'.$row['date'].'</td>
			<td>'.$row['message'].'</td>
		</tr>';
	}
mysqli_close($conn);
?>

    </tbody>
  </table>
</div>

</body>