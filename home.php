<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Misfit Island</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/dom.js"></script>
    </head>
    <body>

          <div class="nav">
              <ul>
                  <li><a href="home.php">Logo</a></li>
                  <li><a class="active" href="home.php">Home</a></li>
                  <li><a href="shop.php">Shop</a></li>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="events.php">Events</a></li>
                  <li style="float:right"><a href="login.php">Log In</a></li>
                  <li style="float:right"><a href="cart.php">Shopping Cart</a></li>
              </ul>
          </div>


        <div class="container">
          <h1 class="center">Deals</h1>

          <?php

            $dir = glob('images/{*.jpg,*.png}',GLOB_BRACE);

            foreach($dir as $key=> $value)
            {
              ?>
              <div class="photo">
                <img src="<?php echo $value;?>" alt="<?php echo $value;?>">
              </div>
              <?php
            }
            ?>

          <div class="left-div">
            WE GOT A NEW APPLEFT LEFT LEFT LEFT LEFT LEFT LEFT LEFT LEFT
          </div>
          <div class="right-div">
            STUFF ABOUT THE APP LIKE WE SAW ON MACY'S RIGHT RIGHT RIGHT RIGHT RIGHT RIGHT RIGTH RIGHT
          </div>
        </div>

        <div class="footer">
          <div class="row">
              <div class="column">
                <a href="url">Contact Us</a>
                <br>
                <a href="url">Home</a>
                <br>
                <a href="url">Shop</a>
                <br>
                <a href="url">Events</a>
                <br>
              </div>
              <div class="column">
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-instagram"></a>
              </div>
              <div class="column">
                <p>Wanna keep up with our blog?</p><br>
                <a href="url">link text</a>
              </div>
          </div>
        </div>

    </body>

</html>
