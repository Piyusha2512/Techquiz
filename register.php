<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>REGISTER</title>
	<link rel="stylesheet" type="text/css" href="register.css">
	<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Shadows+Into+Light&display=swap" rel="stylesheet">
</head>
<body>
	<section class="showcase1" id="showcase">

        <header>
            <nav class="navbar navbar-dark navbar-expand-sm fixed-top" style="background-color: azure;">
    
                <a href="#" class="navbar-brand " id="logohere"><img src="lq.png" class="ml-1 "  alt="logo here"></a>
                <div id="b1" style="margin: 30px 240px">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#downme" style="background-color:skyblue;color: black;">
                    <!--<span class="navbar-toggler-icon text-dark"></span>-->
                    MENU
                </button>
                  </div>
                   
                    <div class="collapse navbar-collapse" style="background-color: azure;" id="downme">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item text-uppercase" id="navtab"><a href="indexresponsive.html" class="nav-link text-uppercase" id="linkshere"> HOME </a></li>
                        <li class="nav-item text-uppercase" id="navtab"><a href="About us.html" class="nav-link text-uppercase" id="linkshere"> About us </a></li>
                        <li class="nav-item text-uppercase" id="navtab"><a href="helpresponsive.html" class="nav-link text-uppercase" id="linkshere"> Help </a></li>
                    </ul>
                </div>
              </nav>
            </header>
	<img src="Sky.jpg">
    <div class="bg">
<form method="POST" action="datafile.php">
	<div class="formhere1">
		<fieldset id="fieldset1">
				<legend id="legend1">REGISTRATION</legend>

		<label>Name*: </label>
		<input type="text" name="name" id="fname" required placeholder="First Name">
		  <input type="text" id="lname" name="lname" required placeholder="Last Name"><br><br>
		<label>Email*: </label>
		<input type="email" name="email" id="mail" required placeholder="abc@gmail.com"><br><br>
		<label>Phone*: </label>
		<input type="tel" name="phone" pattern="[0-9]{10}" required placeholder="Phone here" id="phone"><br><br>
		<label>Gender*: </label> <label id="lmale"> Male</label>
		<input type="radio" name="gender" required id="male" value="male">
		<label id="lfemale">Female</label>
		<input type="radio" name="gender" required id="female" value="female"><br><br>

		<div id="Birthdate"> <p>Birth Date*: <input type="number" itemid="day" required max="31" min="1" name="day" id="day" placeholder="Day">
           <select name="month" required id="month">
                <option value="">Month</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
            <input type="number" name="year" required placeholder="Year" id="year" min="1950" max="2022">
        </p>   </div><br>
        <p>
            Department*: <select name="department" required id="dept">
                <option value="">---Select Your Department---</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Computer Technology">Computer Technology</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Computer Engineering">Computer Engineering</option>
                <option value="Other">Other</option>
            </select>
        </p><br>
        <label>Password*: </label>
        <input type="password" name="password" id="password" required placeholder="*******"><br><br>
        <label>Confirm Password*: </label>
        <input type="password" name="cpassword" id="cpassword" required placeholder="*******"><br><br>
        <p id="note"> * indicates the required field</p><br>
        <h3> <button type="submit" name="submit" value="REGISTER">REGISTER</button></h3>
         </fieldset>
	</div>
</form>


</div >
</section>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>