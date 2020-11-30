<?php
session_start();
header('location:1.php');
$con=mysqli_connect('localhost' ,'root','','pms');
//$con=mssqli_connect('localhost','root','');
//mysqli_select_db($con,'pms');

$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from registration where name='$name'";
$result= mysqli_query($con,$s);
$num =mysqli_num_rows($result);

if($num==1)
{
	echo "User Already Taken";
	
}
else
{
	$reg=" insert into registration (name,password) values('$name' ,'$pass')" ;
	mysqli_query($con,$reg);
	echo "sucessful";
}
?>