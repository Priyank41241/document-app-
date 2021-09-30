<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu screen</title>
    <style type="text/css">
        div
        {
            text-align: center;

            width: 90%;
            height: 30px;
            padding: 10px;
            background-color: teal;
            color: white;
            border: 1px solid cyan;
            border-radius: 5px;

        }
        div:hover
        {
            animation-name: example;
        }
        a
        {
            text-decoration: none;
        }
        h1
        {
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>Menu</h1>
    <center>
        <a href="localnews.php"><div>Local news</div></a>
        <a href="sportsnews.php"><div>Sports news</div></a>
	<a href="about.php"><div>About us</div></a>
	<a href="contact.php"><div>Contact us</div></a>
	<a href="feedbackform.php"><div>Feedback</div></a>
	<a href="Logout.php"><div>Log-out</div></a>
    </center>
</body>
</html>