<?php
session_start();
$con = mysqli_connect('localhost','root','','techquiz');
$email=$_POST['email'];
$password=$_POST['password'];

$s = "select * from signupdata where email='$email' && password='$password'";

$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['email']=$email;
    header('location:subject2.html');
}else{
    echo "<script>alert ('Wrong Password');
    window.location.href='login.php';
    </script>  ";
    // header('location:login.php');
    
}

?>