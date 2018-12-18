<?php
  session_start();
//  if(isset($_SESSION['user']){
///    $_SESSION['success'] = "Loged in $user";
//  }
  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['user']);
    header("location: index.php");
  }
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
      <a class="navbar-brand" href="#!"> Library </a> <!--<img src="books.png" width="40" height="40" alt="nabBrand"> </a>-->
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav"> <span class="navbar-toggler-icon"></span></button>
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
        <?php if(isset($_SESSION['user'])) : ?>
          <ul class="navbar-nav navbar-right mt-2 mt-ms-0">
            <li class="nav-item dropdown mr-5"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> Welcome <strong class="pl-2"><?php echo $_SESSION['user']; ?></strong> </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#"> <i class="fa fa-cog pr-2"></i> Preferences </a>
                <a class="dropdown-item" href="#"> <i class="fa fa-envelope pr-2"></i> Contact Support </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index_login.php?logout='1'"> <i class="fa fa-power-off pr-2"></i> Logout </a>
              </div>
            </li>
          </ul>
        <?php endif ?>
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
