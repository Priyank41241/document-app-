<?php
	session_start();
	if(isset($_SESSION["Username"]))
	{
		echo "<center>";
		echo "<h2>Feedback form</h2>";
		echo "<h4>Write your feedback here</h4>";
		echo "<form action='feedbackresp.php' method='post'>";
		echo "<textarea name='feedback' id='feedback' placeholder='Write something here'></textarea> <br/><br/>";
		echo "<input type='submit' value='Submit'>";
		echo "</form>";
		echo "</center>";
	}
	else { echo "Please login first!!"; }
?>