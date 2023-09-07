<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div>
    <header>
        <?php
            include "header.php";
        ?>
    </header>

        <p class="filler">filler</p>
    
        </div>
    <main>

        <!-- Highlights -->
        
        <h3 class="hili">Highlights</h3>
        <div class="portfolio-img">
        </div>

        <a href="seeAll.php" class="seeMore">See everything!</a>



        <div class="highlights">

        <div class="highlights-section">
            <img src="images/Shark_&_shrimp.jpg" alt="shark and shrimp" class="highlights-img">
            <p>Check out more of my Digital Art projects.</p>
            <a href="digitalArt.php" class="hili-button">Digital</a>
        </div>
        <div class="highlights-section">
            <img src="images/old practice.jpg" alt="old practice" class="highlights-img">
            <p>Check out more of my Traditional Art projects.</p>
            <a href="traditional.php" class="hili-button">Traditional</a>
        </div>
        <div class="highlights-section">
            <img src="images/Fennex Fox03.jpeg" alt="Fox" class="highlights-img">
            <p>Check out more of my Graphic Design projects.</p>
            <a href="graphicDesign.php" class="hili-button">Graphic Design</a>
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