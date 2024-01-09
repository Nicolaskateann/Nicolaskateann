<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="navbg.css">
        <link rel="stylesheet" href=".box.css">
        <link rel="stylesheet" href="advertisement.css">
        <link rel="stylesheet" href="aboutme.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
</head>
<body>
<section class="header">
         <nav>
            <a href="index.php"><img src="pic/logo2.png" width="200"></a>
            <div class="nav-links" id="navlinks">
               <span class="glyphicon glyphicon-remove-sign" onclick="hideMenu()"></span>
               <ul>
                  <li><a href="index.php">HOME</a>
                  <li><a href="aboutme.php">ABOUT ME</a>
                  <li><a href="Product.php">PRODUCTS</a>
                  <li><a href="contact.php">CONTACT US</a>
               </ul>            
            </div>
            <span class="glyphicon glyphicon-menu-hamburger"onclick="showMenu()"></span>
         </nav>
         <div class="box">
            <h1>Kean's Tech Treasures</h1>
            <p>"Discover Innovation at Kean's Tech Treasures: Unveiling Tomorrow's Gadgets Today!"</p>
            <a href="Product.php" class="click-btn">SHOP NOW</a>
         </div>

      </section>
    <section id="about">
        <div class="about-1">
            <h1>ABOUT ME</h1>
            <p><img src="pic/kate.jpg"> <br/> <p class="lead">🌟Meet Kean Nicolas 👩 <br/> Founder & CEO <br/>With a fervor for technology and an unyielding 
            commitment to quality, I, Kate Nicolas, am the driving force behind Kean's tech tresures.<br/> As a tech enthusiast and entrepreneur, my journey began with a vision — a vision to curate a collection of cutting-edge gadgets that redefine the way we experience technology.</p>
        </div>
        <div id="about-2">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="about-item text-center">
                                <span class="glyphicon glyphicon-book"></span>
                                <h3>MISSION</h3>
                                <hr>
                                <p>Kean's Tech Tresures isn't just a business; it's a commitment to providing you with the latest in tech innovation. From handpicked selections to personalized recommendations, we strive to make your tech journey seamless, exciting, and tailored to your unique preferences.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-item text-center">
                                <span class="glyphicon glyphicon-eye-open"></span>
                                <h3>VISION</h3>
                                <hr>
                                <p>Empower individuals with innovative and accessible technology that enhances their lives. We aspire to be a trailblazer in the tech industry, inspiring positive change by seamlessly integrating cutting-edge solutions into the daily experiences of our customers. Through our commitment to excellence and a customer-centric approach, we envision a future where technology becomes a personalized and enriching part of everyone's journey."</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-item text-center">
                                <span class="glyphicon glyphicon-pencil"></span>
                                <h3>ACHIEVEMENTS</h3>
                                <hr>
                                <p>In the past year, we've taken significant strides toward realizing our vision. Our introduction of IPHONE 15 PRO MAX has not only received overwhelming positive feedback but has also been recognized by industry experts for its groundbreaking features and user-centric design. We are proud to have expanded our customer base by 30%, reaching individuals in many places in ASIA. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
         <div class="copyright">
            <p>&copy; [Kean's tech treasures] [2023]. All rights reserved.</p>
         </div>
      </footer>
      </section>
      
      <script>
         var navlinks =document.getElementById("navlinks");
         function showMenu() {
            navlinks.style.right="0";
         }
         function hideMenu() {
            navlinks.style.right="-200px";
         }
      </script>

</body>
</html>
