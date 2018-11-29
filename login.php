<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Misfit Island</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/styles.css">
        
        <div class="header">
            <div class="nav">
                <ul id="nav">
                    <li><a href="home.php">Logo</a></li>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li style="float:right"><a href="login.php">Log In</a></li>
                    <li style="float:right"><a href="cart.php">Shopping Cart</a></li>
                </ul>
            </div>
        </div>
    </head>
    <body>
        Login
        <?php
        
        session_start();
        include("dbconnect.php");
        
            if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == 'true') {
                ?>
                    <div class="form-border">
                            <form action="logoutform.php" method="POST">
                                <fieldset>
                                    <legend class="legend"><h2>Are you sure you want to log out?</h2></legend>
                                    <input type="submit" name="submit" value="Yes, log out."><br>
                                </fieldset>
                            </form>
                        <p><a href="home.php">No, stay logged in.</a></p>
                        </div>


                <?php
            }
            else {
                ?>
                    <div class="form-border">
                            <form action="loginform.php" method="POST">
                                <fieldset>
                                    <legend class="legend"><h2>Log In</h2></legend>
                                    <input type="text" name="username" placeholder="Username"><br><br>
                                    <input type="password" name="password" placeholder="Password"><br><br>
                                    <input type="submit" name="submit" value="Submit"><br>
                                </fieldset>
                                <p>Don't have an account? <a href="createaccount.php">Create one!</a></p>
                            </form>
                        <br><br><br>
                        </div>
                <?php
            }
        ?>
    </body>
    <footer>
        
    </footer>
</html>