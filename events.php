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
                    
                    <?php
                    
                    session_start();
                    include("dbconnect.php");
                    
                    if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == 'true') {
                  ?>
                    <li style="float:right"><a href="login.php">Log Out</a></li>
                  <?php
                    }
                    else {
                  ?>
                    <li style="float:right"><a href="login.php">Log In</a></li>
                  <?php } ?>
                    
                    <li style="float:right"><a href="cart.php">Shopping Cart</a></li>
                </ul>
            </div>
        </div>
    </head>
    <body>

        <div class="container">
          <h1>Events</h1>

        <div class="outer-div">
          <img src="https://students.cah.ucf.edu/~az645191/dig3134/Group%20Project/img/Grand-Opening-Banner.jpg"></img>
          <div class="inner-div">
            <p>Lorem ipsum dolor amet cliche tote bag meggings brooklyn tumeric blue bottle trust fund quinoa narwhal. Helvetica sustainable seitan biodiesel, keffiyeh tousled la croix pug everyday carry air plant schlitz pabst typewriter asymmetrical. Pork belly humblebrag iceland, gentrify YOLO tacos church-key. Gochujang man braid coloring book pop-up ugh.</p>
          </div>
        </div>


        <div class="outer-div">
          <img src="https://students.cah.ucf.edu/~az645191/dig3134/Group%20Project/img/Grand-Opening-Banner.jpg"></img>
          <div class="inner-div">
            <p>Lorem ipsum dolor amet cliche tote bag meggings brooklyn tumeric blue bottle trust fund quinoa narwhal. Helvetica sustainable seitan biodiesel, keffiyeh tousled la croix pug everyday carry air plant schlitz pabst typewriter asymmetrical. Pork belly humblebrag iceland, gentrify YOLO tacos church-key. Gochujang man braid coloring book pop-up ugh.</p>
          </div>
        </div>

        <div class="outer-div">
          <img src="https://students.cah.ucf.edu/~az645191/dig3134/Group%20Project/img/Grand-Opening-Banner.jpg"></img>
          <div class="inner-div">
            <p>Lorem ipsum dolor amet cliche tote bag meggings brooklyn tumeric blue bottle trust fund quinoa narwhal. Helvetica sustainable seitan biodiesel, keffiyeh tousled la croix pug everyday carry air plant schlitz pabst typewriter asymmetrical. Pork belly humblebrag iceland, gentrify YOLO tacos church-key. Gochujang man braid coloring book pop-up ugh.</p>
          </div>
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
    <footer>

    </footer>
</html>
