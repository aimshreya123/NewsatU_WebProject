<?php
	$option = $_REQUEST["register"];

	if($option==="customer"){header("location: registration.html");}
	else{header("location: registerr.html");}
	
?>