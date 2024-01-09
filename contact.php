<!DOCTYPE HTML>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" Content="IE=edge">
      <meta name="viewport" Content="width=device-width, initial-scale=1.0">
        <title>ECommerce</title>	
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="navbg.css">
        <link rel="stylesheet" href=".box.css">
        <link rel="stylesheet" href="advertisement.css">
        <link rel="stylesheet" href="contact.css">
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
      <section id="contact-section">
        <div class="container">
            <h2>Contact Me</h2>
            <p>Email us and keep up date with our latest news</p>
            <div class="contact-form">
                <div>
                    <i class="glyphicon glyphicon-info-sign"></i><span class=" form-info">oyehyheyhey St Sanjose delmonte City</span><br>
                    <i class="glyphicon glyphicon-earphone"></i><span class="form-info">091283674523</span><br>
                    <i class="glyphicon glyphicon-envelope"></i><span class=" form-info">nicolaskateann06@gmail.com</span>
                </div>

                <div>
                    <form>
                        <input type="text" placeholder="First Name" required></input>
                        <input type="text" placeholder="Last Name" required></input>
                        <input type="Email" placeholder="Your Email" required></input>
                        <input type="text" placeholder="Subject of this message" required></input>
                        <textarea name="Message" placeholder="Message"  rows="5" id="" required></textarea>
                        <button class="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
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
