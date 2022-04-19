<?php
include 'conn.php';
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rental House Management System</title>
    <link rel="icon" href="rent.ico">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor1/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor1/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor1/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor1/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css1/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css1/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header mb-5">
      <!--
      *** TOPBAR ***
      _________________________________________________________
      -->

      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="index.php" class="navbar-brand home"><img src="rent_2.png" alt="RHMS logo" class="d-none d-md-inline-block"></a>
          <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="index.php" class="ml-1"><b><b><b><b><b><b>RENTAL HOUSE MANAGEMENT SYSTEM</b></b></b></b></b></b></a></div>
          <div class="col-lg-6 text-center text-lg-right">
            <ul class="menu list-inline mb-0">
              <li class="list-inline-item"><a href="login.php">Login</a></li>
              <li class="list-inline-item"><a href="register.php">Register</a></li>
            </ul>
          </div>

        </div>
      </nav>
      <div id="search" class="collapse">
        <div class="container">
          <form role="search" class="ml-auto">
            <div class="input-group">
              <input type="text" placeholder="Search" class="form-control">
              <div class="input-group-append">
                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </header>
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="main-slider" class="owl-carousel owl-theme">
                <div class="item"><img src="house_1.jpg" alt="" class="img-fluid"></div>
              </div>
              <!-- /#main-slider-->
            </div>
          </div>
        </div>
        <!--
        *** ADVANTAGES HOMEPAGE ***
        _________________________________________________________

        <!--
        *** HOT PRODUCT SLIDESHOW ***
        _________________________________________________________
        -->
        <div id="hot">
          <div class="box py-4">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-0">Houses</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="product-slider owl-carousel owl-theme">
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a><img src="rent_1.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a><img src="rent_1.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a class="invisible"><img src="rent_1.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a>List of Houses</a></h3>
                    <p class="price">
                      To Rent
                    </p>
                  </div>
                  <!-- /.text-->

                  <!-- /.ribbon-->

                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="login.php"><img src="house1_1.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="login.php"><img src="house2_1.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="login.php" class="invisible"><img src="house1_1.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="login.php">Tsh. 50,000/=</a></h3>
                    <p class="price">
                      Available Rooms:<br/><?php
                      $sql = "SELECT * FROM house WHERE rent_per_month = 50000 AND status = 'Empty'";
                      $query = mysqli_query($con,$sql);
                      $num = mysqli_num_rows($query);
                      echo $num;
                       ?>
                    </p>
                  </div>
                  <!-- /.text-->

                  <!-- /.ribbon-->

                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="login.php"><img src="house3_2.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="login.php"><img src="house1_1.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="login.php" class="invisible"><img src="house3_2.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="login.php">Tsh. 60,000/=</a></h3>
                    <p class="price">
                      Available Rooms:<br/><?php
                      $sql = "SELECT * FROM house WHERE rent_per_month = 60000 AND status = 'Empty'";
                      $query = mysqli_query($con,$sql);
                      $num = mysqli_num_rows($query);
                      echo $num;
                       ?>
                    </p>
                  </div>
                  <!-- /.text-->

                  <!-- /.ribbon-->

                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="login.php"><img src="house4_1.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="login.php"><img src="house2_1.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="login.php" class="invisible"><img src="house4_1.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="login.php">Tsh. 70,000/=</a></h3>
                    <p class="price">
                      Available Rooms:<br/><?php
                      $sql = "SELECT * FROM house WHERE rent_per_month = 70000 AND status = 'Empty'";
                      $query = mysqli_query($con,$sql);
                      $num = mysqli_num_rows($query);
                      echo $num;
                       ?>
                    </p>
                  </div>
                  <!-- /.text-->

                  <!-- /.ribbon-->

                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="login.php"><img src="house2_1.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="login.php"><img src="house1_1.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="login.php" class="invisible"><img src="house2_1.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="login.php">Tsh. 80,000/=</a></h3>
                    <p class="price">
                      Available Rooms:<br/><?php
                      $sql = "SELECT * FROM house WHERE rent_per_month = 80000 AND status = 'Empty'";
                      $query = mysqli_query($con,$sql);
                      $num = mysqli_num_rows($query);
                      echo $num;
                       ?>
                    </p>
                  </div>
                  <!-- /.text-->

                  <!-- /.ribbon-->

                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <!-- /.product-slider-->
            </div>
            <!-- /.container-->
          </div>
          <!-- /#hot-->
          <!-- *** HOT END ***-->
        </div>

      </div>
    </div>


    <!-- /#footer-->
    <!-- *** FOOTER END ***-->


    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-2 mb-lg-0">
            <p class="text-center text-lg-left">Copyright &copy; RHMS 2019</p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src="vendor1/jquery/jquery.min.js"></script>
    <script src="vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor1/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor1/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor1/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="js1/front.js"></script>
  </body>
</html>
