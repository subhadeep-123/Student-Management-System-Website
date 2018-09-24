<?php
include "conn.php";
$name="";
$department="";
$email="";
$contact="";
$year="";
if(isset($_POST['submit']))
{
	
	$name=$_POST['name'];
	
	$department=$_POST['department'];
	
	$email=$_POST['email'];
	
	$contact=$_POST['contact'];
	
	$year=$_POST['year'];
	$ql="insert into management(name, department, email, contact, year) values('$name', '$department', '$email', '$contact', '$year')";

	$ob1=$con->query($q1);
	
	if($ob1==1)
	{
		echo "REGISTER SUCCESS";
	}
}
?>