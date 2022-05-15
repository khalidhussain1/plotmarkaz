<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Plotlist - Listing HTML5 Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <!--

TemplateMo 564 Plot Listing

https://templatemo.com/tm-564-plot-listing

-->
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="category.html">about</a></li>
              <li><a href="listing.html">contact</a></li>
              <li><a href="contact.html" class="active">Log in</a></li>
              <li>
                <div class="main-white-button"><a href="#"><i class="fa fa-plus"></i> Add Your property</a></div>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <h6>Lets Grow with us</h6>
            <h6> Welcom to the Largest Growing Real Estate network.Invest to Grow with us,& our network To Multiply Your assests. </h6>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container" style="min-width: 50%; background-color: transparent;">
    <div class="row justify-content-center mt-4">
      <div class="col-lg-6 col-sm-6 ">
      <?php if (isset($_GET['message'])) { ?>
          <div style="" class="alert alert-danger" style="" role="alert">
            <?php echo $_GET['message']; ?>
          </div>
        <?php } ?>
        <form class="row justify-content-center" style=" padding: 30px 0px 30px 0px; border: 1px solid gray" action="signup_submission.php" method="post">
          <div class="col-md-7">
            <h4 style="text-align: center; color: black;">REGISTER NOW!</h4><br>
          </div>
          <div class="col-md-7">
            Name
            <input type="text" class="form-control" id="inputemail" placeholder="" name="regname"><br>
          </div>
          <br>
          <div class="col-md-7">
            Email
            <input type="email" class="form-control" id="inputemail" placeholder="" name="regemail"><br>
          </div>
          <div class="col-md-7">
            Type
            <select class="form-select" aria-label="Default select example" name="role">
              <option selected>Open this Select menu</option>
              <option value="1">Broker </option>
              <option value="2">Customer </option>
      
            </select>
          </div>
          <div class="col-md-7 mt-3">
            Password:
            <input type="password" class="form-control" id="inputPhoneno" placeholder="" name="regpassword">
            <br>
          </div>





          <br>

          <div class="col-7 d-flex justify-content-center">
            <button style="width: 80%;" type="submit" class="btn btn-secondary" name="signup">REGISTER NOW</button><br><br>
          </div>
          <br>
          <center>Already Registered<a href="login.php">LOG IN</a></center>
        </form>

      </div>
    </div>

  </div>



























  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about">
            <div class="logo">
              <img src="assets/images/black-logo.png" alt="Plot Listing Template">
            </div>
            <h5 style="color: black;">سب سے سستا
              سب سے بہتر</h5>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Helpful Links</h4>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><a href="#">Categories</a></li>
                  <li><a href="#">Reviews</a></li>
                  <li><a href="#">Listing</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Awards</a></li>
                  <li><a href="#">Useful Sites</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-us">
            <h4>Contact Us</h4>
            <p>


              <a href=" https://www.facebook.com/Plot-Markaz-101782249199655">
                <img src="assets/images/facebook.png" style="width: 40px; height: 30px; border-radius: 50%;" class=icon></a>

              <a href=" mailto:info@plotmatkaz.com">
                <img src="assets/images/gmail.png" style="width: 40px; height: 30px; border-radius: 50%;" class=icon></a>

              <a href=" https://Wa.me/<0300-7459155>" target="_blank">
                <img src="assets/images/whatsapp.png" style="width: 40px; height: 30px; border-radius: 50%;" class=icon></a>


              <a href=" https://www.facebook.com/Plot-Markaz-101782249199655">
                <img src="assets/images/youtube.png" style="width: 40px; height: 30px; border-radius: 50%;" class=icon></a>















            </p>
            <div class="row">
              <div class="col-lg-6">
                <a href="#"></a>
              </div>
              <div class="col-lg-6">
                <a href="#"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="sub-footer">
            <p>Copyright © 2022 Plot Markaz Co., Ltd. All Rights Reserved.
              <br>
              Web Developer: <a rel="nofollow" href="https://digiviz.com" title="CSS Templates" style="color: maroon;">www.digiviz.info</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>