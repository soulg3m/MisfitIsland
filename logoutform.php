<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome!</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php
            session_start();
            include("dbconnect.php");

            $_SESSION['logged_in'] = false;

            print "You have successfully logged out. You will be redirected to the home page.";
        
            header("refresh:5; url=home.php");
        ?>
    </body>
</html>