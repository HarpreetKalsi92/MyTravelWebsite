<?php
$message = "";
 $link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_connect_error());
 //$link = mysqli_connect("localhost", "root", "", "mysql") or die("Connection Error: " . mysqli_connect_error()) ;



 if (isset($_POST["login"])){

	$useremail= $_POST['useremail'];
	$password = $_POST['password'];
}
$Write_Query = mysqli_query($link,"SELECT password FROM agents WHERE AgtEmail='$useremail'");
print("<p>Login Failure</p>");
$Pass_Query = mysqli_fetch_assoc($Write_Query);
$hashed = $Pass_Query['password'];


$loginresult = password_verify($password,$hashed);
if ($loginresult){
	print("<p>Login Success</p>");
	header("Location:Agent.php");
}
else{
	include 'login.php';

}
 ?>
