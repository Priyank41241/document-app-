<?php
    $username=$_POST["txtusername"];
    $password=$_POST["txtpassword"];        

    $query = "select * from User_info where Username = '$username' and Password = '$password'";

    $con = mysqli_connect("localhost", "root", "", "DatabaseDemo");    
    if (!$con) 
    {
        die("Error : Connot connect to Database.");
    }
    else
    {

        if($result = mysqli_query($con, $query))
        {
            if(mysqli_num_rows($result) > 0)
            {
                session_start();
                while($row = mysqli_fetch_array($result))
                {        
                    $_SESSION["Username"]=$username;
                    $_SESSION["Name"]=$row["Name"];
                    echo "Welcome, <b>" .$_SESSION['Name'] . "</b><br/>";
                    echo "Goto <a href='main.php'>Main</a> Page.";
                }
            }
            else
            {
                echo "<b>Invalid Credentials.</b><br/>";    
            }
        }
        else
        {
            echo "<b>Unable to execute Query.</b><br/>";
        }
        mysqli_close($con);
    }
?>