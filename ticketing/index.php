<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/313e2dff6d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400&family=Inria+Serif:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
</head>
<body class="showCart">
    <div class="container">
        <div class="navcontainer"> 
            <nav>
                <ul class="homeHeader">
                    <li><a href="../Home/home.html">HOME</a></li>
                    <li><a href="#">GALERIA</a></li>
                    <li><a href="/test-project/profile/index.html">PROFILE</a></li>
                </ul>
            </nav>
        </div>

        <div class="left">
            <div class="imgdesc">
                <h2>Galeria Sophilia Tickets - <span>Kemayoran</span></h2>
            </div>
        </div>



        <header>
            <div class="title">1. CHOOSE TICKETS</div>
            <div class="icon-cart">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1"/>
                  </svg>
                  <span>0</span>
            </div>
        </header>


        <div class="listProduct">
            <div class="item">
                <img src="/test-project/media/Group 39.png" alt="">
                <h2>NAME PRODUCT</h2>
                <div class="price">Free</div>
                <button class="addCart">
                    Add to Cart
                </button>
            </div>
        </div>

        <div class="bottomEmail">
                <h2 class="title">2. ENTER EMAIL</h2>
                <p>Make sure that email address is correct, the ticket will be sent to the written address.</p>
                <form method="post" action="send.php">
                    <input type="text" name="email" id="email" required><br><br>
                    <button type="submit" name="send" class="checkOut">checkOut</button>
                </form>
        </div>
    </div>

    <div class="cartTab">
        <h1>Shopping Cart</h1>
        <div class="listCart">
            <div class="item">

            </div>
        </div>
        <div class="btn">
            <button class="close">CLOSE</button>
            <button class="checkOut">CHECK OUT</button>
        </div>
    </div>




<script src="app.js"></script>
</body>
</html>