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
      <div class="container">
            <h3>PRODUCTS</h3>
            <div class="btn btn-block">
                <div class="btn-block">
                <a href="samsung.php">
                     <button class="btn btn-default"><img src="pic/ss.png"><br/>SAMSUNG<br/></button>
                </a>
                </div>
                <div class="btn-block">
                <a href="iphone.php">
                  <button class="btn btn-default"><img src="pic/IP.png"><br/>IPHONE</button>
                </a>
                </div>
                <div class="btn-block">
                <a href="vivo.php">
                   <button class="btn btn-default"><img src="pic/VIVO.png"><br/>VIVO</button>
                </a>
                </div>
            </div>
         </div>
      <!----Products---->
      
      <section class="product">
         <h1> PRODUCTS Information</h1>
         <p><b>🌟 Welcome to Kean's Tech Treasures! Your Gateway to Innovation! 🌟</b> <br/>
            At Kean's Tech Treasures, we pride ourselves on being the ultimate 
            destination for tech enthusiasts and gadget lovers. Step into a world where cutting-edge 
            technology meets unrivaled quality – welcome to a haven of innovation!
         </p>
         <div class="carousel">
            <div class="carousel slide" data-ride="carousel" id="mycarousel" >
               <ol class="carousel-indicators">
                  <li data-target="#mycarousel " data-slide-to="0" class="active"></li>
                  <li data-target="#mycarousel " data-slide-to="1" ></li>
                  <li data-target="#mycarousel " data-slide-to="2" ></li>
               </ol>
               <div class="carousel-inner">
                  <div class="item active">
                     <img src="pic/1.jpg" >
                  </div>
                  <div class="item">
                     <img src="pic/2.jpg" height="150">
                  </div>
                  <div class="item">
                     <img src="pic/3.jpg" height="150">
                  </div>
               </div>
               <a href="#mycarousel" class="left carousel-control" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
               </a>
               <a href="#mycarousel" class="right carousel-control" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span> 
               </a>
            </div>
         </div>
         
         <br/>
         <br/>
         <br/>
         <hr/>
         <div class="row">
            <div class="Product-col">
               <h3>iPhone: Where Elegance Meets Performance</h3>
               <p>Immerse yourself in the seamless integration of style and performance with the iconic iPhone.
                   Explore the latest models, each crafted to perfection, boasting unparalleled speed, impressive cameras,
                    and the signature Apple experience.</p>
            </div>
            <div class="Product-col">
               <h3>Samsung: Elevate Your Mobile Experience</h3>
               <p>Discover the epitome of excellence with Samsung's state-of-the-art smartphones.
                   From stunning displays to powerful cameras and cutting-edge features, 
                   Samsung devices redefine what's possible in the world of mobile technology.</p>
            </div>
            <div class="Product-col">
               <h3>Vivo: Capturing Moments, Creating Memories</h3>
               <p>Vivo's commitment to pushing the boundaries of mobile photography is evident in every device.
                   Elevate your photography game, enjoy sleek designs, and experience seamless performance with 
                   Vivo smartphones.</p>
            </div>
         </div>
      </section>

      <!------advertisement---->
      <section class="advertisement">
         <h1>📱 Explore the Best Brands: Samsung, iPhone, and ViVO</h1>
         <p>Discover a curated collection of the latest and greatest from renowned brands such as 
            Samsung, iPhone, and Vivo. We handpick each product to ensure you experience the
             pinnacle of technological advancement.</p>
         <div class="row">
            <div class="advertisement-col">
               <img src="pic/VVADS.jpg">
               <div class="layer">
                  <h3>VIVO</h3>
               </div>
            </div>
            <div class="advertisement-col">
               <img src="pic/SSAD.jpg">
               <div class="layer">
                  <h3>SAMSUNG</h3>
               </div>
            </div>
            <div class="advertisement-col">
               <img src="pic/IPADS.jpg">
               <div class="layer">
                  <h3>IPHONE</h3>
               </div>
            </div>
         </div>
         <h1>🔍 Unveil Tomorrow's Gadgets Today!</h1>
         <p>Our commitment goes beyond selling gadgets; we're here to redefine your tech experience. 
            From sleek smartphones to powerful devices, Kean's Tech Treasures 
            is your go-to destination for staying ahead of the curve.</p>
         <div class="row">
            <div class="advertisement-col">
               <img src="pic/V1.jpg">
               <div class="layer">
                  <h3>VIVO X80</h3>
               </div>
            </div>
            <div class="advertisement-col">
               <img src="pic/S22.jpg">
               <div class="layer">
                  <h3>SAMSUNG S22</h3>
               </div>
            </div>
            <div class="advertisement-col">
               <img src="pic/IP.jpg">
               <div class="layer">
                  <h3>IPHONE 15 PROMAX</h3>
               </div>
            </div>
         </div>
      </section>

      <!---------testimonials--->
      <section class="cta">
         <h1>🌐 "Experience Excellence, Anywhere You Are! 🚀</h1>
         <a href="contact.php" class="click-btn">CONTACT US</CONTACT></a>
      </section>

      <!-----footer--->
      <section class="footer">
         <div class="copyright">
            <p>&copy; [Kean's tech treasures] [2023]. All rights reserved.</p>
         </div>
      </footer>
      </section>


      

















<!-----------------------JavaScript for toggle menu ---------------------->
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