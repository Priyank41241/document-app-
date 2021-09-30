<?php
    session_start();
    echo "You have been logged out.<br/>";
    echo "<a href='Login Application.php'>Go to login page.</a>";
    session_destroy();
?>