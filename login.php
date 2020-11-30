<!DOCTYPE html>
<html>
<head>
	<title> Login in Tailor Man</title>
	<link rel="stylesheet" a href="css/login.css">
	<script src="https://kit.fontawesome.com/bded391350.js" crossorigin="anonymous"></script>
</head>
<body>


<!DOCTYPE html>
<html>
<head>
 <title></title>
 <link rel="stylesheet" type="text/css" href="css/styleHome.css">
 <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<div class="main_body">
 <div class="center_body">
  <a href="register.php" target="_blank">Signup</a>
 </div>
</div>
</body>
</html>

	<div class="container">
	<img src="images/img2-author.png"/>
		<form action="login.php" method="post">
			<div class="form_input">
				<input type="text" name="uname" placeholder="User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="pass" placeholder="password"/>
			</div>
			<input type="submit" name="login" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>


<?php

if(isset($_POST['submit']))
	{
	//include('../dbcon.php');
	include('dbcon.php');
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	
	
	$qry=" INSERT INTO x(username,password)VALUES('$uname','$pass')";
	$run = mysqli_query($con,$qry);
	
		if($run==true)
		{
		?>
		<script>
		 alert('Data inserterd successfully');
		</script>
		
		<?php
		}

}
?>