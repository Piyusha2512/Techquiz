<?php
require('checkdata.php');


$name=$_POST['name'].''.$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$birthdate=$_POST['day']." ".$_POST['month']." ".$_POST['year'];
$department=$_POST['department'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

$query="INSERT INTO `signupdata`(`name`, `email`, `phone`, `gender`, `birthdate`, `department`, `password`, `cpassword`) VALUES ('$name','$email','$phone','$gender','$birthdate','$department','$password','$cpassword')";

$var=mysqli_query($obj, $query);

if($var){
	echo "<script> alert('Registration Sucessfull'); 
	window.location.href='subject2.html';
	</script>";

}else{
	echo "<script> alert('Failed to register'); 
	window.location.href='register.php';
	</script>";
}


?>