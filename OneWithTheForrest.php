<?php 

  $dbname = "brain_db";
  $server = "52.32.192.113";
  $username = "root";
  $password = "qW042862!";


  $connect = mysqli_connect($server, $username, $password, $dbname);

  if($connect->connect_error) {
    die("Connection failed");
   }

  $result = mysqli_query($connect,"SELECT * FROM brain_db.friends_table");

?>

<html lang="en">
<head>
  <title>Test - Displaying Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Birthday</th>
        <th>Ethnicity</th>

      </tr>
    </thead>

    <tbody>

      <?php
          while($row = $result->fetch_assoc()){
            echo 
              '<tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['first_name'].'</td>
                <td>'.$row['last_name'].'</td>
                <td>'.$row['birthday'].'</td>
                <td>'.$row['ethnicity'].'</td>
               </tr>';
		  }
          mysqli_close($connect);

      ?>

    </tbody>
  </table>
</div>

</body>
</html>
