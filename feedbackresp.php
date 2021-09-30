<?php
	session_start();
	$feedback=$_POST["feedback"];
	if(isset($_SESSION["Username"]))
	{
		$name=$_SESSION["Username"];
		$insertquery = "insert into Feedback values('$name', '$feedback')";
		$con = mysqli_connect("localhost", "root", "", "DatabaseDemo");    
        	if (!$con) 
        	{
        	    die("Connot connect to Database : " . mysqli_connect_error());
        	}
        	else
        	{
            		if(!mysqli_query($con, $insertquery))
            		{
            		    echo "<b>Unable to get your feedback. Please try again later.</b>";
            		}
            		else
            		{
            		    echo "<b>Thank you for your feedback. Go back to <a href='main.php'>main</a> page.</b>";
            		}
            		mysqli_close($con);
        	}	
	}
?>