<?php
        $name=$_POST["txtname"];
        $username=$_POST["txtusername"];        
        $password=$_POST["txtpassword"];

        $insertquery = "insert into User_info values('$name', '$username', '$password')";
        
        $con = mysqli_connect("localhost", "root", "", "DatabaseDemo");    
        if (!$con) 
        {
            die("Connot connect to Database : " . mysqli_connect_error());
        }
        else
        {
            if(!mysqli_query($con, $insertquery))
            {
                echo "<b>Unable to register a new user.</b>";
            }
            else
            {
                echo "<b>Registration successful. Goto <a href='Login Application.php'>Login</a> page.</b>";
            }
            mysqli_close($con);
        }
?>