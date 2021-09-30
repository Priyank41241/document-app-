<?php
	session_start();
	if(isset($_SESSION["Username"]))
	{
		echo "<center><h2>Contact us</h2></center>";
		echo "<center>";
		echo "Email: xyz@gmail.com<br/>";
		echo "Phone: 123456789<br/>";
 		echo "Facebook: fb_xyz<br/>";
		echo "instagram: Insta_xyz<br/>";
		echo "</center>";
	}
	else
	{
		echo "Please login first";
	}
	
	
?>