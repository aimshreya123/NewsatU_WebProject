<?php
	$CONNECTION = mysqli_connect("localhost","root","root","news@u");
	if(!$CONNECTION)
	{
		die("Couldn't connect to server!");
	}
	$name = $_REQUEST['fname'];
	$email = $_REQUEST['mail'];
	$password = $_REQUEST['password'];
	$pnumber = $_REQUEST['pnumber'];
	
	$sql_query = "INSERT INTO `register_customer` (`Cus_Id`, `Cus_Name`, `Cus_EmailId`, `Cus_Password`, `Cus_PhoneNo.`) VALUES (NULL,'$name','$email','$password','$pnumber')";
	if(!mysqli_query($CONNECTION,$sql_query))
	{
		header("location: wrong.html");
	}
	else{header("location: login.html");}
	
?>