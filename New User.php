<html>
    <head>
        <title>New User Registration...</title>        
    </head>
    <body>
        <center>
            <h3>... User Registration ...</h3>
            <div>
            <form action="Register User.php" method="post">
                <table border="1" cellpadding="10px">
                    <tr>
                        <td>Name </td>
                        <td><input type="text" name="txtname" id="txtname" size="30" placeholder="Name" required></td>
                    </tr>
                    <tr>
                        <td>Username </td>
                        <td><input type="text" name="txtusername" id="txtusername" size="30" placeholder="Username" required></td>
                    </tr>
                    <tr>
                        <td>Password </td>
                        <td><input type="password" name="txtpassword" id="txtpassword" size="30" placeholder="Password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"> 
                            <input type="submit" name="submit" value="Register">
                            <input type="reset" value="Clear">
                        </td>
                    </tr>
                </table>
            </form>
            </div>
        </center>
    </body>
</html>