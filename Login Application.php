<html>
    <head>
        <title>Login Example with Session...</title>
    </head>
    <body>
        <center>
            <h3>Login</h3>
            <form action="Verify.php" method="post">
                <table border="0" cellpadding="10px" style="background-color:cyan; color: navy;">
                    <tr>
                        <td>Username : </td>
                        <td><input type="text" name="txtusername" id="txtusername" required></td>
                    </tr>
                    <tr>
                        <td>Passowrd : </td>
                        <td><input type="password" name="txtpassword" id="txtpassword" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="Login">
                            <input type="reset" value="Cancel">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right" style="font-size:13px;"><a href="New User.php" style="text-decoration:none;">Sign Up / New User</a></td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>