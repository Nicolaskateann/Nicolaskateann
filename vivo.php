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
        <style>
            .carousel{
                padding-top: 10px;
                margin-top: 20px;
            }
        </style>
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

        <section class="carousel">
            <div class="col-md-6">
                <div class="thumbnail">
                    <img src="pic/V1.jpg" style="width:100%">
                    <div class="caption">
                        <h4 class="pull-right">P30,900</h4>
                        <h4><a href="product1.php">VIVO X80</a></h4>
                        <div><button class="btn btn-danger" data-target="#buyme" data-toggle="modal" style="margin-left:10px; margin-bottom:10px">BUY</button></div>
                        <div class="modal fade" id="buyme">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal">&times;</button>
                                        <h2 class="modal-title">CHECKOUT</h2>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control input-lg" placeholder="Enter Your Name:">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control input-lg" placeholder="Enter Your Email:">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control input-lg" placeholder="Contact No:">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="5" style="font-size:20px color=gray;">Address</textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-danger" data-dismiss="modal">SUBMIT ORDER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside>
            <div class="col-md-6 col-md-offset-0">
                <div class="carousel slide" data-ride="carousel" id="mycarousel" >
                <ol class="carousel-indicators">
                    <li data-target="#mycarousel " data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel " data-slide-to="1" ></li>
                    <li data-target="#mycarousel " data-slide-to="2" ></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="pic/v11.jpg" >
                    </div>
                    <div class="item">
                        <img src="pic/v22.jpg" height="150">
                    </div>
                    <div class="item">
                        <img src="pic/v33.jpg" height="150">
                    </div>
                </div>
                <a href="#mycarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a href="#mycarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span> 
                </a>
                </div>
                <div class="list-group">
                <div class="list-group-item" style="padding:0;margin:0;">
                    <div class="col-md-4" style="padding:0;margin:0;">
                    </div>
                    <div class="col-md-10">
                        <div class="list-group-item-heading">
                            <h4>P30,900</h4>
                            <h4><b>VIVO X80</b></h4>
                            <p class="pull-right">Technology GSM / CDMA / HSPA / EVDO / LTE / 5G</p>
                            <p style="color:darkblue;">NETWORK</p>
                            <p class="pull-right">2023</p>
                            <p style="color:darkblue;">LAUNCH</p>
                            <p class="pull-right">	Dimensions	159.9 x 76.7 x 8.3 mm</p>
                            <p style="color:darkblue;">BODY</p>
                            <p class="pull-right">Resolution	1290 x 2796 pixels, 19.5:9 ratio</p>
                            <p style="color:darkblue;">DISPLAY</p>
                            <p class="pull-right">OS	iOS 17, upgradable to iOS 17.1.1</p>
                            <p style="color:darkblue;">PLATFORM</p>
                            <p class="pull-right">Internal	256GB 8GB RAM, </br>512GB 8GB RAM, 1TB 8GB RAM NVMe</p>
                            <p style="color:darkblue;">MEMORY</p>
                            <div class="clearfix"></div>
                        </div>
                        <p class="list-group-item-text">MODEL CODE: OOOX456</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </aside>
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