<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/313e2dff6d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400&family=Inria+Serif:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Landing Page -->
    <div id="header">
        <div class="container">
            <nav>
                <ul class="homeHeader">
                    <li><a href="/sem3/test-project/home/home.php">HOME</a></li>
                    <li><a href="../Gallery/gallery.html">GALERIA</a></li>
                    <li><a href="/sem3/test-project/profile/index.php">PROFILE</a></li>
                </ul>
            </nav>
            <div class="hero">
                <div class="homeTitle">
                    <h1>GALERIA<span><br>SOPHILIA</span></h1>
                </div>
                <div class="homeDescription">
                    <p>AVAILABLE ONLY</p>
                    <br>
                    <p><span>SUNDAY:</span> 12:00-15.00</p>
                </div>
                <a href="/sem3/test-project/ticketing/index.php" class="button">Tickets</a>
            </div>
        </div>
        
    </div>
    <!-- Description Below landing page -->
    <div id="overview">
        <div class="overviewContainer">
            <div class="row">
                <div class="leftOverview">
                    <h2>Step into time's embrace, experience the whispers of <span>HISTORY</span>.</h2>
                </div>
                <div class="rightOverview">
                    <p><i class="fa-solid fa-ticket"></i>Tickets - <span>Buy Online</span></p>
                    <p><i class="fa-regular fa-clock"></i>Open Sunday: 12.00 - 15.00</p>
                    <p><i class="fa-solid fa-location-crosshairs"></i>Calvin Tower Lt.6-7</p>
                </div>
            </div>
            <hr id="rightOverviewLine">
        </div>
    </div>
    <!-- Exhibition Section -->
    <div id="exhibition">
        <h3 id="exhibition_title">EXHIBITIONS</h3>
        <div class="grid">
            <div class="gridList">
                <div class="titleandtext">
                    <img src="https://i.ibb.co/FX4CnQT/exEur.png" alt="europeExhbition">
                    <h4>European Exhibit</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tristique eu nisi non vulputate. Donec nunc nisi, finibus ut molestie eu, blandit et dolor. Donec sodales velit vulputate elit tincidunt posuere.</p>
                </div>
                
            </div>

            <div class="gridList">
                <div class="titleandtext">
                    <img src="https://i.ibb.co/MM79qVy/exChin.png" alt="chinaExhibition">
                    <h4>Chinese Exhibit</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tristique eu nisi non vulputate. Donec nunc nisi, finibus ut molestie eu, blandit et dolor. Donec sodales velit vulputate elit tincidunt posuere.</p>
            </div>
            </div>
        </div>
    </div>

    <!-- Account Registration Promotion -->
    <div id="member">
        <div class="container1">
            <div class="left">
                <h2>Become a <span>MEMBER</span></h2>
            </div>
            <div class="right">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tristique eu nisi non vulputate.
                </p>
                <br><a href="#" class="btn">Find out more</a>
            </div>
        </div>
    </div>

    <!-- Contact Us Page -->
    <div class="contactContainer">
        <div class="contactLeft">
            <h2>Contact <span>us</span></h2>
            <div class="contactIcons">
                <a href="https://linktr.ee/GaleriaSophilia"><i class="fa-brands fa-whatsapp"></i> linktr.ee/GaleriaSophilia</a> 
                <br>
                <br>
                <a href="https://www.instagram.com/galeriasophilia/"><i class="fa-brands fa-instagram"></i> @galeriasophilia</a>     
            </div>
        </div>
        <div class="contactRight">
            <form>
                <input type="text" name="Name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                <button type="submit" class="btn btn2">Submit</button>
            </form>
        </div>
    </div>
    
</body>
</html>