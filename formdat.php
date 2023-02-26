<?php
require ('check.php');


$name=$_POST['name'];
$enroll=$_POST['enroll'];

$query="INSERT INTO `formone`(`name`, `enroll`) VALUES ('$name','$enroll')";

$var=mysqli_query($obj, $query);

if($var){
	echo "<script> alert('Registration Sucessfull'); 
	window.location.href='form.php';
	</script>";

}else{
	echo "<script> alert('Failed to register'); 
	window.location.href='form.php';
	</script>";
}

?>