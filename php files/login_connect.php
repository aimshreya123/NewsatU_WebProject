<?php
$connection=mysqli_connect('localhost','root','root','news@u');
      if(!$connection)
      {
        die("Couldn't connect to server");
      }
	echo "Connected Successfully";
// Initialize the session
session_start();

$error=''; // Variable To Store Error Message
	
	$type=$_REQUEST["type"];
	
	
	if($type==="Customer")
	{
		$sql_query = "SELECT * FROM `register_customer` WHERE `Cus_EmailId` = '" . $_REQUEST["username"] . "' AND `Cus_Password` = '". $_REQUEST["password"]."'";
		$query_result = mysqli_query($connection, $sql_query);
		$rows = mysqli_num_rows($query_result);

		if ($rows == 1) 
		{
		$_SESSION['login_user']=$username; // Initializing Session
		header("location: customer_main.html"); // Redirecting To Other Page
		}else {$error = "Username or Password is invalid";}
	}
	if($type==="Vendor")
	{
		$sql_query = "SELECT * FROM `register_vendor` WHERE `Company_Email` = '" . $_REQUEST["username"] . "' AND `Password` = '". $_REQUEST["password"]."'";
		$query_result = mysqli_query($connection, $sql_query);
		$rows = mysqli_num_rows($query_result);

		if ($rows == 1) 
		{
		$_SESSION['login_user']=$username; // Initializing Session
		header("location: vendor_main.html"); // Redirecting To Other Page
		}else {$error = "Username or Password is invalid";}
	}
	if($type==="Administrator")
	{
		$sql_query = "SELECT * FROM `admin_table` WHERE `Email` = '" . $_REQUEST["username"] . "' AND `Password` = '". $_REQUEST["password"]."'";
		$query_result = mysqli_query($connection, $sql_query);
		$rows = mysqli_num_rows($query_result);

		if ($rows == 1) 
		{
		$_SESSION['login_user']=$username; // Initializing Session
		header("location: admin_main.html"); // Redirecting To Other Page
		}else {$error = "Username or Password is invalid";}
	}
	
	echo $error;
	echo $_SESSION['login_user'];
	


?>