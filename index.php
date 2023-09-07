<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta description="Kaitlyn Woodard's Portfolio">
    <title>Woodard's Workshop</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    
    <header>
        <?php
            include "header.php";
        ?>
    </header>

    <main>
        <p class="filler">filler</p>
        <!-- hero image -->

        <div id="hero-img">
            
        </div>


        <!-- Award -->


        <div class="hero-section">

            <a href="about.php">About</a>
            <a href="services.php">Services</a>
            <a href="portfolio.php">Portfolio</a>

        </div>


        <div class="about">



            <!-- About -->
            <h3>About Kaitlyn</h3>
            <div class="about-content">
                    <p>Welcome to Woodard's Workshop! This portfolio is organized and produced by Kaitlyn Woodard! You'll be taking a step into her digital haven, where imagination knows no bounds. This portfolio serves as a window into the creative world Kaitlyn resides in!</p>
                <img src="images/IMG_9153 copy 2.jpeg" alt="Kaitlyn Woodard" height="200px" class="about-img">
            </div>
        </div>

        <div>
            <div class="services-home">
            <!-- Services -->
            <div class="services-home-title">
                <h3>What do I offer?</h3>
                <p>Woodard’s Workshop offers many different services. From logo design and web design, to custom commissions and graphic designs. Check out our services page to go into depth on all of our options.</p>
            </div>
            <div class="services-home-content">
                <img src="images/portfolio.png" alt="Digital Art" height="150px" class="home-services-img">
                <p>Want to see what I can do? Check out my portfolio!</p>
                <a href="portfolio.php">See my Portfolio</a>
            </div>
            <div class="services-home-content">
                <img src="images/flyer services.png" alt="Services" height="150px" class="home-services-img">
                <p>Need a logo? Need a flyer? Need a website? I got you.</p>
                <a href="services.php">See more Services</a>
            </div>
            <div class="services-home-content">
                <img src="images/services.png" alt="Graphic Design" height="150px" class="home-services-img">
                <p>Need to get in contact with someone?</p>
                <a href="contact.php">Send us a Message</a>
            </div>

            <div class="special-award-block">
                <a href="specialAwards.php" class="special-award">Special</a>
            </div>

        </div>


        



        <!-- Contact -->
        <div class="contact-home-block">
        <h3 class="hili">Contact Me!</h3>
            <div class="contact-home">
                    
                <form action="form.php" method="POST">
                    <input type="text" name="firstName" id="firstName" placeholder="* First Name"required>
                    <input type="text" name="lastName"id="lastName" placeholder="* Last Name" required>
                    
                    <input type="text" name="email" id="email" placeholder="* Email" required>
                    
                    <textarea name="message" id="message" placeholder="Message" cols="30" rows="10"></textarea>
                    <br>
                    
                    <input type="submit" id="submit">
                </form>
                
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer>
        <?php
            include "footer.php";
        ?>
    </footer>
</body>
</html>