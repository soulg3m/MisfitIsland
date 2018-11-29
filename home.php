<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Misfit Island</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/dom.js"></script>
    </head>
    <body>

      <div class="header">
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
            <div class="foot-grid-container">
                <div class="foot-grid-item">Header Links</div>
                <div class="foot-grid-item">Social Media</div>
                <div class="foot-grid-item">Newsletter</div>
            </div>
        </div>

    </body>

</html>
