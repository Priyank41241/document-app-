<?php
	session_start();
	if(isset($_SESSION["Username"]))
	{
		echo "<center><h2>About us</h2></center>";
		echo "<h3>This is about us page</h3>";
		echo "Our website: www.xyz.com";
		echo "This are our team members:";
 		echo "<ul>";
 		echo "<li>Member 1</li>";
 		echo "<li>Member 2</li>";
 		echo "</ul>";
	}
	else
	{
		echo "Please login first";
	}
	
?>