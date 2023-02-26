<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head> -->
<?php
include('head.php');
?>
<body>
    <form action="formdat.php" method="post">
        <br><br>
        <label for="">Name :</label>
        <input type="text" name="name" placeholder="Name Here">
    <br><br><br>
    <label for="">Enrollment No.</label>
    <input type="text" name="enroll" placeholder="Enrollment here">
    <br><br>
    <input type="submit" name="submit" class="btn btn-info" value="REGISTER">
</form>    
</body>
</html>