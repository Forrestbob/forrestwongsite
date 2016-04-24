<?php
include_once("PHPMailer-master/PHPMailerAutoload.php");
include_once('dbConnect.php');

if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$body = $_POST['body'];
	
	mysqli_query($conn,"INSERT INTO my_db.messages(name, email, message) VALUES('$name','$email','$body')");
	
	$mail = new PHPMailer();

	$mail->IsSMTP();  // telling the class to use SMTP
	$mail->Host     = "smtp.gmail.com"; // SMTP server
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;

	$mail->From     = "luxepropertiesatlanta@gmail.com";
	$mail->Username   = "luxepropertiesatlanta@gmail.com";  // GMAIL username
	$mail->Password   = "simmigon"; 
	$mail->AddAddress("forrestbob2000@yahoo.com");
	$mail->FromName = $name . "from forrestwong.xyz";

	$mail->Subject  = "Message from " . $name;
	$mail->Body     = "Email: " . $email . "\nName: " . $name . "\n\n" . $body;
	//$mail->WordWrap = 50;

	if(!$mail->Send()) {
		//echo '<script language="javascript">';
		echo '<script language="javascript">'.'alert("Message could not be sent.")'.'</script>';
		//echo '</script>';
		//echo 'Mailer error: ' . $mail->ErrorInfo;
	}else{
		//echo 'alert("Message successfully sent to Forrest Wong!")';
		echo '<script language="javascript">'.'alert("Message successfully sent to Forrest Wong!");document.location.href = "index.html";'.'</script>';
		
	}
}
 //header("location:confirmationPage.php");

?>

<script language="JavaScript">
function CountLeft(field, count, max) {
	if (field.value.length > max)
	field.value = field.value.substring(0, max);
	else
	count.value = max - field.value.length;
}
</script>

<html>
<title>Forrest Wong</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Form styles-->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Navbar styles-->
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-navbar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
	body {
		padding-top:100px;   /* Height of the navbar */
	}
</style>

<body>

<!-- Navbar -->
<ul class="w3-navbar w3-red w3-card-2 w3-top w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="index.html" class="w3-padding-large">Home</a></li>
  <li class="w3-hide-small"><a href="fry.html" class="w3-padding-large w3-hover-white">My Cat</a></li>
  <li class="w3-hide-small w3-white"><a href="#" class="w3-padding-large w3-hover-white">Contact Me</a></li>
  <li class="w3-hide-small"><a href="#" class="w3-padding-large w3-hover-white">Link 3</a></li>
  <li class="w3-hide-small"><a href="#" class="w3-padding-large w3-hover-white">Link 4</a></li>
</ul>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:51px">
  <ul class="w3-navbar w3-left-align w3-large w3-black">
    <li><a class="w3-padding-large" href="fry.html">Kitty</a></li>
    <li><a class="w3-padding-large w3-white" href="#">Contact Me</a></li>
    <li><a class="w3-padding-large" href="#">Link 3</a></li>
    <li><a class="w3-padding-large" href="#">Link 4</a></li>
  </ul>
</div>



<div class="container">
  <h2>Contact Me</h2>
  <form role="form" method="POST" action="">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
	<div class="form-group">
      <label for="body">Message:</label>
      <textarea type="text" class="form-control" id="email" name="body" rows="6" maxlength="1000" onkeydown="CountLeft(this.form.body, this.form.left,1000);" onkeyup="CountLeft(this.form.body,this.form.left,1000);" ></textarea>
	  <div align="right">Characters left: <input class="form-group" readonly type="text" name="left" size="3" maxlength="4" value="1000"></div>
	</div>
	<button type="submit" class="btn btn-default" name="submit">Send</button>
    </div>
   
  </form>
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-hor-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-hor-32">
   <a href="#" class="w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-facebook-official"></i></a>
   <a href="#" class="w3-hover-text-red w3-show-inline-block"><i class="fa fa-pinterest-p"></i></a>
   <a href="#" class="w3-hover-text-light-blue w3-show-inline-block"><i class="fa fa-twitter"></i></a>
   <a href="#" class="w3-hover-text-grey w3-show-inline-block"><i class="fa fa-flickr"></i></a>
   <a href="#" class="w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-linkedin"></i></a>
 </div>
 <p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">Raspberry Pi</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>


