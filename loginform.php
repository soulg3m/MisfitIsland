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
            include("dbconnect.php"); //connect to database
        
            $un = $_POST["username"];
            $pw = sha1($_POST["password"]);
        
    		$sql = "SELECT * FROM users WHERE username='" . $un . "' AND password='".$pw."' LIMIT 1"; //See if entered username/pass == username/pass in database
            $result = mysqli_query($connection, $sql); //Execute the sql query and store result in $result
            if (mysqli_num_rows($result) == 1){		//if account exists
                $row = mysqli_fetch_row($result);	//$row stores numerical array of data returned from sql query
                $_SESSION['logged_in'] = true;
                $_SESSION['logged_in_user'] = $un;
                
                echo "Welcome, " . $_SESSION['logged_in_user'] . "! You are now logged in. You will be redirected to the homepage.";
            }else{
                echo "Invalid username and password";
                header("Refresh: 5; url=login.php");
            }


            if (isset($_SESSION['logged_in'])) {
                header("Refresh: 5; url=home.php");
            }
        ?>
    </body>
</html>