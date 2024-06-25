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

    <title>pyhton-questions</title>

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
    <link href="additionals/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="additionals/css/responsive.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand"> Code solution</a>
        
        <form class="form-inline">
        
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


            <!-- <!-- <button class="btn btn-outline-success mx-2" class="form-control" data-toggle="modal" data-target="#signupModal">sign up</button>
            <button class="btn btn-outline-success mx-2"  class="form-control" data-toggle="modal" data-target="#loginModal">log in </button> -->
            <button class="btn btn-outline-success ml-2" data-toggle="modal"
                    data-target="#signupModal"> sigin  </button>
            <button class="btn btn-outline-success mx-2" data-toggle="modal"
                   data-target="#loginModal"><i> login </i> </button>
          
   
        </form>
        <div class="container">
            
        <?php
            require "additionals/_loginModal.php";
            require "additionals/_registerModal.php";
        ?>
        </div> -->
       
    </nav>
  

    <!-- <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand"> Code solution</a>
                                    <form class="form-inline my-2 my-lg-0">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                            aria-label="Search">
                                        <button class="btn btn-success my-2 my-sm-0 my-2"
                                            type=" submit"><i>Search</i></button>
                                    </form>
                                    <button class="btn btn-outline-success ml-2" data-toggle="modal"
                                        data-target="#signupModal"> sigin
                                    </button>
                                    <button class="btn btn-outline-success mx-2" data-toggle="modal"
                                        data-target="#loginModal"><i> login</i>
                                    </button>
                                    
</nav> -->


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