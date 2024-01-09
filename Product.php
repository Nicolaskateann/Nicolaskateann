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
        <link rel="stylesheet" href="product.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
</head>
<body>
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
         </div>
         </section>
         <br/>
         <br/>
         <br/>
         <br/>
         <hr/>
         <div class="container">
            <h3>PRODUCTS</h3>
            <div class="btn btn-block">
                <div class="btn-block">
                 <a href="samsung.php">
                     <button class="btn btn-default "><img src="pic/ss.png"><br/>SAMSUNG<br/></button>
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
         
      <section class="comment">
        <h1>Hear what our customers are saying about us.</h1>
        <p>Customer comments provide valuable insights into their experiences, 
            allowing businesses to understand what aspects of their products or services resonate positively.
        <br/> customer comments are a powerful tool for businesses, offering valuable insights, 
        fostering improvement, building trust, and creating a positive and engaged customer community.</p>
        <div class="row">
            <div class="comment-col">
                <img src="pic/kate.jpg">
                <div>
                    <p> Iloveit </p>
                    <h3>Kate</h3>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                </div>
            </div>
            <div class="comment-col">
                <img src="pic/kate.jpg">
                <div>
                    <p>So lovable Iloveit </p>
                    <h3>Kate</h3>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                </div>
            </div>
            <div class="comment-col">
                <img src="pic/kate.jpg">
                <div>
                    <p>So cool Iloveit </p>
                    <h3>Kate</h3>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
                    <i class="glyphicon glyphicon-star"></i>
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