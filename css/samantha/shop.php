<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Misfit Island</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/styles.css">
        
    </head>
    <body>
        <div class="nav">
            <ul>
                <li><a href="home.php">Logo</a></li>
                <li><a href="home.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="events.php">Events</a></li>
                <li style="float:right"><a href="login.php">Log In</a></li>
                <li style="float:right"><a href="cart.php">Shopping Cart</a></li>
            </ul>
        </div>
        <div class="shop-container">
            <h1 class="center">Shop</h1>
            <div class="shop-grid-container">
                <div id="shop-grid-item-filter">
                    <div id="filterContainer">
                        <h2>Sort By:</h2>
                        <button class="sortbtn active" onlcick="filterSelection('all')"> Show All</button>
                        <button class="sortbtn" onlick="filterSelection('color')"> Color</button>
                        <button class="sortbtn" onlick="filterSelection('size')"> Size</button>
                        <button class="sortbtn" onlick="filterSelection('style')"> Style</button>
                        <button class="sortbtn" onlick="filterSelection('brand')"> Brand</button>
                    </div>
                </div>
                <div id="shop-grid-item-main">
                    <div class="actualItem color">
                        <div class="item-content">
                            <img src="#"/><p>^IMAGE HERE</p><br>
                            <p>//$PRICE HERE</p>
                        </div>
                    </div>
                    <div class="actualItem color">
                        <div class="item-content">
                            <img src="#"/><p>^IMAGE HERE</p><br>
                            <p>//$PRICE HERE</p>
                        </div>
                    </div>
                    <div class="actualItem style">
                        <div class="item-content">
                            <img src="#"/><p>^IMAGE HERE</p><br>
                            <p>//$PRICE HERE</p>
                        </div>
                    </div>
                    <div class="actualItem brand">
                        <div class="item-content">
                            <img src="#"/><p>^IMAGE HERE</p><br>
                            <p>//$PRICE HERE</p>
                        </div>
                    </div>
                    <div class="actualItem size">
                        <div class="item-content">
                            <img src="#"/><p>^IMAGE HERE</p><br>
                            <p>//$PRICE HERE</p>
                        </div>
                    </div>
                    <div class="actualItem brand">
                        <div class="item-content">
                            <img src="#"/><p>^IMAGE HERE</p><br>
                            <p>//$PRICE HERE</p>
                        </div>
                    </div>
                </div>
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
                <a href="url">MisfitIsland Blog</a>
              </div>
          </div>
        </div>
        <script src="js/filter.js" type="text/javascript"></script>
    </body>
    <footer>

    </footer>
</html>