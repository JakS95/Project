<?php
//  if(isset($_SESSION['user']){
///    $_SESSION['success'] = "Loged in $user";
//  }
include('login.php')
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css" type="text/css">
    <link rel="stylesheet" href="index.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!--<script src="js/jquery.min.js"></script> -->
    <!--<script src="js/bootstrap.min.js"></script> -->
    <style>
        @media (max:widht:576px){

        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav"> <span class="navbar-toggler-icon"></span></button>
      <a class="navbar-brand" href="#!"> Library </a> <!--<img src="books.png" width="40" height="40" alt="nabBrand"> </a>-->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto mt-2 mt-ms-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <?php include('errors.php'); ?> 
        <ul class="navbar-nav navbar-right">
        <!--<form class="form-inline my-2 mx-lg-5">-->
          <li class="dropdown my-auto mr-5"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Log In </a>
            <ul id="login-dp" class="dropdown-menu dropdown-menu-right my-4">
              <li>
                <div class="row">
                  <div class="col-md-12">
                    Login via
                    <div class="social-buttons">
                      <a href="#" class="btn btn-fb"> <i class="fa fa-facebook"></i> Facebook </a>
                      <a href="#" class="btn btn-tw"> <i class="fa fa-twitter"></i> Twitter </a>
                    </div>
                    or
                    <form class="form" role="form" method="post" action="index.php" id="login-nav">
                      <div class="form-group">
                        <label class="sr-only"for="email2">Email address</label>
                        <input type="email" class="form-control" id="email2" name="email" placeholder="Email address" required>
                      </div>
                      <div class="form-group">
                        <label class="sr-only" for="pswrd2">Password</label>
                        <input type="password" class="form-control" id="pswrd2" name="pass" placeholder="Password" required>
                        <div class="help-block text-right"> <a href="#">Forget the password ?</a> </div>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" name="log_user">Sign in</button>
                      </div>
                      <div class="checkbox">
                        <label> <input type="checkbox"> keep me logged-in </label>
                      </div>
                    </form>
                  </div>
                  <div class="bottom text-center col-md-12">
                    New here? <a href="SignUp/SignUp.html"> <b>Join Us</b> </a>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li><a href="SignUp/SignUp.html"> <button class="btn btn-outline-success my-2 my-sm-2" type="button">Sign Up</button> </a></li>
        <!--</form> -->
        </ul>
      </div>
    </nav>

    <div class="carousel bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="book-slider"class="owl-carousel owl-theme">
              <div class="post-slide">
                <div class="post-img">
                  <a href="#"> <img src="Carousel_pics/rsz_anakarenjina.jpg" alt=""> </a>
                </div>
                <div class="post-content">
                  <h3 class="post-title"> <a href="#">Anna Karenina </a> </h3>
                  <p class="post-description">
                      Anna Karenina is a novel by the Russian author Leo Tolstoy, first published in book form in 1878. Many authors consider Anna Karenina the greatest work of literature ever written, and Tolstoy himself called it his first true novel.
                  </p>
                  <ul class="post-bar">
                    <li> <i class="fa fa-user"></i> <a href="#">Leo Tolstoy</a></li>
                    <li> <i class="fa fa-calendar"></i> 1878</li>
                    <li> <i class="fa fa-folder"></i> <a href="#">Realistic novel</a> </li>
                  </ul>
                  <a href="#" class="btn btn-success read-more">Read more</a>
                </div>
              </div>
              <div class="post-slide">
                <div class="post-img">
                  <a href="#"> <img src="Carousel_pics/rsz_steppenwolf.jpg" alt=""> </a>
                </div>
                <div class="post-content">
                  <h3 class="post-title"> <a href="#">Steppenwolf </a> </h3>
                  <p class="post-description">
                      Anna Karenina is a novel by the Russian author Leo Tolstoy, first published in book form in 1878. Many authors consider Anna Karenina the greatest work of literature ever written, and Tolstoy himself called it his first true novel.
                  </p>
                  <ul class="post-bar">
                    <li> <i class="fa fa-user"></i> <a href="#">Leo Tolstoy</a></li>
                    <li> <i class="fa fa-calendar"></i> 1878</li>
                    <li> <i class="fa fa-folder"></i> <a href="#">Realistic novel</a> </li>
                  </ul>
                  <a href="#" class="btn btn-success read-more">Read more</a>
                </div>
              </div>
              <div class="post-slide">
                <div class="post-img">
                  <a href="#"> <img src="Carousel_pics/rsz_forrtres.jpg" alt=""> </a>
                </div>
                <div class="post-content">
                  <h3 class="post-title"> <a href="#">The Fortress </a> </h3>
                  <p class="post-description">
                      Anna Karenina is a novel by the Russian author Leo Tolstoy, first published in book form in 1878. Many authors consider Anna Karenina the greatest work of literature ever written, and Tolstoy himself called it his first true novel.
                  </p>
                  <ul class="post-bar">
                    <li> <i class="fa fa-user"></i> <a href="#">Leo Tolstoy</a></li>
                    <li> <i class="fa fa-calendar"></i> 1878</li>
                    <li> <i class="fa fa-folder"></i> <a href="#">Realistic novel</a> </li>
                  </ul>
                  <a href="#" class="btn btn-success read-more">Read more</a>
                </div>
              </div>
              <div class="post-slide">
                <div class="post-img">
                  <a href="#"> <img src="Carousel_pics/rsz_alchemist.jpg" alt=""> </a>
                </div>
                <div class="post-content">
                  <h3 class="post-title"> <a href="#">The Alchemist </a> </h3>
                  <p class="post-description">
                      Anna Karenina is a novel by the Russian author Leo Tolstoy, first published in book form in 1878. Many authors consider Anna Karenina the greatest work of literature ever written, and Tolstoy himself called it his first true novel.
                  </p>
                  <ul class="post-bar">
                    <li> <i class="fa fa-user"></i> <a href="#">Leo Tolstoy</a></li>
                    <li> <i class="fa fa-calendar"></i> 1878</li>
                    <li> <i class="fa fa-folder"></i> <a href="#">Realistic novel</a> </li>
                  </ul>
                  <a href="#" class="btn btn-success read-more">Read more</a>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js" type="text/javascript">
    </script>
    <script type="text/javascript" src="OwlCarousel2-2.3.4/dist/owl.carousel.js">
    </script>
    <script src="carousel.js">
    </script>
  </body>
</html>
