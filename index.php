
<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>code solution</title>

    <!-- slider stylesheet -->
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="additionals/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="additionals/css/style.css" rel="stylesheet">
    <!-- responsive style -->
    <link href="additionals/css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg  custom_nav-container pt-3">
                    <a class="navbar-brand" href="index.php">
                        <span>
                            <b>Code Solution</b>
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse nav" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center ">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php"><i>Home </i><span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item  list-item-non">
                                    <a class="nav-link" href="h_question.php"> <i>Question</i> </a>
                                </li>

                                <a class="nav-link nav" href="contect.php"> <i>contect</i> </a>


                                <?php
                                session_start();
                                echo'
                                <div class="user_option">
                                    <form class="form-inline my-2 my-lg-0">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                            aria-label="Search">
                                        <button class="btn btn-success my-2 my-sm-0 my-2"
                                            type=" submit"><i>Search</i></button></form>';
                                            if (isset($_SESSION['loggin']) && $_SESSION['loggin'] == true){
                                             echo'<p class="text-light my-0 mx-4">welcome '.$_SESSION['uname'].'</p>
                                             <button class="btn btn-outline-success ml-2 text-light" > <a class="text-light" href="logout.php">Log Out</a>
                                    </button>';
                                            }
                                            else{
                                    echo';
                                    <button class="btn btn-outline-success ml-2" data-toggle="modal"
                                        data-target="#signupModal"> sigin  </button>
                                    <button class="btn btn-outline-success mx-2" data-toggle="modal"
                                        data-target="#loginModal"><i> login</i> </button>';
                                            }
                                    ?>
                                    <?php
    require "additionals/_loginModal.php";
    require "additionals/_registerModal.php";
   
   
    ?>



                                </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <?php
          if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == true){
            echo '<div class="alert alert-success alert-success fade show" role="alert">
        <strong>Well Come!</strong> your are sign in and you can login know.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';}
        ?>

        <!-- end header section -->
        <!-- slider section -->
        <section class=" slider_section position-relative">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1">a</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2">b</li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col">
                                    <div class="detail-box">
                                        <div>
                                            <h2>
                                                welcome to

                                            </h2>
                                            <h1>
                                                Code Solution
                                            </h1>
                                            <p>
                                                We togther build a community where we help, teach and motive one
                                                another.<br>
                                                We can we <i>programmers </i> have to build a community to grow up
                                                togther.<br>



                                            </p>
                                            <div class="">
                                                <a href="h_question.php">
                                                    Ask a Question
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="detail-box">
                                    <div>
                                        <h2>
                                            welcome to

                                        </h2>
                                        <h1>
                                            Code Solution
                                        </h1>
                                        <p>
                                            We can we <i>programmers </i> have to build a community to grow up togther.

                                        </p>
                                        <div class="">
                                            <a href="">
                                                Contact us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col">
                                <div class="detail-box">
                                    <div>
                                        <h2>
                                            welcome to

                                        </h2>
                                        <h1>
                                            Code Solution
                                        </h1>
                                        <p>
                                            We can we <i>programmers </i> have to build a community to grow up togther.

                                        </p>
                                        <div class="">
                                            <a href="additionals/contect.php">
                                                Ask a Question
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    </section>

    </div>

    <?php
   
   require "additionals/_catagries_index.php";
   ?>


    <!-- info section -->
    <section class="info_section ">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="info_contact">
                        <h5>
                            About us
                        </h5>
                        <div>
                            <div class="img-box">
                                <img src="additionals/images/location-white.png" width="18px" alt="">
                            </div>
                            <p>
                                Gilgit, GB pakistan.
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="additionals/images/telephone-white.png" width="12px" alt="">
                            </div>
                            <p>
                                +923492777660
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="additionals/images/envelope-white.png" width="18px" alt="">
                            </div>
                            <p>
                                rashid.khan.maitla13@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_info">
                        <h5>
                            Informations
                        </h5>
                        <p>
                            This is a free site where we toghter help each other to sout our problems.
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info_insta">
                        <h5>
                            Our team!
                        </h5>
                        <div class="insta_container">
                            <div>
                                <a href="">
                                    <div class="insta-box b-1">
                                        <img src="additionals/images/insta.png" alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="insta-box b-2">
                                        <img src="additionals/images/insta.png" alt="">
                                    </div>
                                </a>
                            </div>

                            <div>
                                <a href="">
                                    <div class="insta-box b-3">
                                        <img src="additionals/images/insta.png" alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="insta-box b-4">
                                        <img src="additionals/images/insta.png" alt="">
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="">
                                    <div class="insta-box b-3">
                                        <img src="additionals/images/insta.png" alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="insta-box b-4">
                                        <img src="additionals/images/insta.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_form ">
                        <h5>
                            Newsletter
                        </h5>
                        <?php

                        if($_SERVER['REQUEST_METHOD'] ==  'POST'){
                            $sub = $_POST['ptitle'];


                            require "additionals/_dbconnect.php";
                            $sql = "INSERT INTO `subsribers` (`sub_email`) 
                            VALUES ( '$sub')`";
                            $result = mysqli_query($conn, $sql);
                            if ($result){
                                echo '<div class="alert alert-success alert-success fade show" role="alert">
                                <strong>thank You!</strong> for subscribe, this makes us feel provd.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>';

                            }
                            else {
                                echo '<div class="alert alert-success alert-success fade show" role="alert">
                                <strong>Sorry !</strong> there was an error while subcribe.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>';
                            }
                          }

                        ?>
                        <form action="index.php" method="post`">
                            <!-- <div class="form-group">
                            <input   for="sub_form" name="sub_form" id="sub_form"  type="email" placeholder="Enter your email">
                        </div> -->
                            <div class="form-group">

                                <input type="textarea" class="form-control" id="ptitle" name="ptitle"
                                    aria-describedby="emailHelp" placeholder="Enter your Email: ">

                            </div>
                            <button type="submit">
                                Subscribe
                            </button>
                        </form>
                        <div class="social_box">
                            <a href="https://facebook.com">
                                <img src="additionals/images/fb.png" alt="">
                            </a>
                            <a href="">
                                <img src="additionals/images/twitter.png" alt="">
                            </a>
                            <a href="">
                                <img src="additionals/images/linkedin.png" alt="">
                            </a>
                            <a href="">
                                <img src="additionals/images/youtube.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- footer section -->
    <section class="container-fluid footer_section">
        <p>
            &copy; 2024 All Rights Reserved By
            <a href="https://codesolutions.com">code solutions</a>
        </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="additionals/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="additionals/js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- owl carousel script 
    -->
    <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 0,
        navText: [],
        center: true,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            1000: {
                items: 3
            }
        }
    });
    </script>
    <!-- end owl carousel script -->

</body>

</html>
