<?php
session_start();
if(isset($_SESSION['uid']) )
{
	echo "error";
}
else
{
	//echo $_SESSION['uid'];	
}
?>


<head>
    <link rel="stylesheet" type="text/css" a href="css/login.css">
    <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>


<body>
 <div class="container">
    <div class="login-box">
    <div class="row">
        <div class="login-right">
            <h2> Sign Up</h2>
            <form method="post" action="register.php" enctype="multipart/form-data">
                <div class="form-group">
                     <label>Enter Your Mail  </label></br>
                    <input type="text" name="mid" placeholder="Enter Your Mail" required>
                </div>
                 <div class="form-group">
                    <label>Enter Your Password</label></br>
                    <input type="text" name="mname" placeholder="Enter Your Password" required>
                </div>
				<div class="form-group">
                    <label>Enter Profile Image</label>
			        <label><input type="file" name="mimg"></label>
                </div>

				<input type="submit" name="submit" value="SUBMIT"><br>
				 <label>Already have an account  ?</label><a href="login.php"> login</a></br>
				
                
            </form>
        </div>
    </div>


</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
	include('dbcon.php');
	$id=$_POST['mid'];
	$name=$_POST['mname'];
	$im =$_FILES['mimg']['name'];
	$tempname=$_FILES['mimg']['tmp_name'];
	move_uploaded_file($tempname,"dataimage/$im");
	
	$qry=" INSERT INTO profile(email,password,img)VALUES('$id','$name','$im')";
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
