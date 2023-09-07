<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
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

        <h3>Services</h3>

        <div class="services">
            <div class="services-content">
                <!-- Flyers -->
                <h4>Flyers</h4>
                <p>I specialize in creating captivating flyers that leave a lasting impression. By using tools like Photoshop and Illustrator I bring your ideas to life. Whether it's for an event, promotion or an announment each flyer is designed to convey your message effectively and engages your target audience.</p>
                <div class="services-img-block">
    
                    <img src="images/flyer-1.jpeg" alt="Kaitlyn Woodard" class="services-img">
                    <img src="images/Mod1Pod2-1.jpeg" alt="Kaitlyn Woodard" class="services-img">
                    <img src="images/Mod2Pod2-1.jpeg" alt="Kaitlyn Woodard" class="services-img">
    
                </div>
                
            </div>
    
            <div class="services-content">
                <!-- Logos -->
                <h4>Logos</h4>
                <p>Through the skills in Procreate, Photoshop, and Illustrator I'm able to combine the power of visual aesthetics and meaningful symbolism. Through a careful collaboration and attention to detail I can create you a logo that is both distinctive and resourceful, leaving a mark with your audience.</p>
    
                <div class="services-img-block">
    
                    <img src="images/Down to Earth - COLOR copy.png" alt="Down to Earth LOGO" class="services-img">
                    <img src="images/Campaign-01 copy.jpeg" alt="Woodard Logo" class="services-img">
                    <img src="images/Redesign for Mobile (2)-01 copy.jpeg" alt="Air Design Logo" class="services-img">
    
                </div>
    
                
            </div>
    
            <div class="services-content">
                <!-- Websites -->
                <h4>Custom Commissions</h4>
                <p>Raise the bar on your projects with a unique custom artwork that stands out from the crowd. By using Procreate and Illustrator (and some Photoshop), I transform your ideas into a one-of-a-kind artwork that captures attention. Each piece is carefully crafted to what you envision and bring your ideas to life. Whether it's for professional branding or personal enjoyment, I am dedicated to creating high quality artworks and piece for you.</p>
                <div class="services-img-block">
    
                    <img src="images/shark - start being awesome copy.png" alt="Woodard wireframe site" class="services-img">
                    <img src="images/Shark_&_shrimp.jpg" alt="Kaitlyn Woodard" class="services-img">
                    <img src="images/IMG_8226_Original.PNG" alt="Kaitlyn Woodard" class="services-img">
    
                </div>
                
            </div>

            <div class="services-content">
                <!-- Websites -->
                <h4>Websites</h4>
                <p>Efficient in HTML and CSS, I blend functionality with stylish designs to create a visually stunning and user-friendly website. From personal portfolios to business platforms, I ensure that your website reflects your unique style and caters the needs of your visitors.</p>
                <div class="services-img-block">
    
                    <img src="images/Campaign-01 copy 2.jpeg" alt="Woodard Website Wireframe" class="services-img">
                    <img src="images/Redesign for Mobile (2)-01.jpeg" alt="Air Design Site" class="services-img">
                    <img src="images/Screenshot 2023-08-17 at 10.39.28 AM.png" alt="Tiara Tunes" class="services-img">

                </div>
                
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

                        <div id="selection-contact-form">

                            <p class="hili">Select the service you're looking for</p>

                        <label for="Flyer">Flyer</label><input type="radio" name="services">
                        <label for="Logo">Logo</label><input type="radio" name="services">
                        <label for="Website">Website</label><input type="radio" name="services">
                        <label for="Flyer">Custom Commission</label><input type="radio" name="services">

                        </div>
                        
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