<?php
	$CONNECTION = mysqli_connect("localhost","root","root","news@u");
	if(!$CONNECTION)
	{
		die("Couldn't connect to server!");
	}
	$cname = $_REQUEST['com_name'];
	$email = $_REQUEST['mail'];
	$password = $_REQUEST['password'];
	$pnumber = $_REQUEST['pnumber'];
	$address = $_REQUEST['address'];
	$city = $_REQUEST['city'];
	$state = $_REQUEST['state'];
	$pin = $_REQUEST['pin'];
	$gst = $_REQUEST['gst'];
	echo $email;
	
	$sql_query = "INSERT INTO `register_vendor` (`Vendor_ID`, `Company_Name`, `Company_Email`, `Password`, `Phone Number`, `Address`, `City`, `State`, `Pincode`, `Gst Number`) VALUES (NULL, '$cname', '$email', '$password', '$pnumber', '$address', '$city', '$state', '$pin', '$gst')";
	if(!mysqli_query($CONNECTION,$sql_query))
	{
		header("location: wrong.html");
	}
	else{header("location: login.html");}
	
?>