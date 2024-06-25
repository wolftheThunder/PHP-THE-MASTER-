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
    <style>
    .jumbotron {
        /* background-image: url("additionals/images/pyhton.png");
    background-size: cover; */
        background: url("additionals/images/pyhton.png") no-repeat center center;
        -webkit-background-size: 100% 100%;
        -moz-background-size: 100% 100%;
        -o-background-size: 100% 100%;
        background-size: 100% 100%;
    }
    </style>
</head>

<body>
    <?php
   require "additionals/_navbar.php";
   ?>
    <div class="container my-4">
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-light">
                <h1 class="display-4 mx-2 text-center my-4 "><b>Python</b></h1>
                <p class="lead my-2 text-center text-light">This is the place where you will get to know more about
                    python. Ask the query and
                    community will
                    try to sout out your trobles.
                </p>
                <hr class="text-dark"><br>
                <p class="lead my-2 text-center text-light">No Spam / Advertising / Self-promote in the forums.
                    These forums define spam as unsolicited advertisement for goods, services or other web sites and
                    don't post uncompletely unrelated content</p>

            </div>
        </div>
    </div>
    <section class="contact_section layout_padding">
        <div class="container">

            <div class="heading_container">
                <h2>
                    Ask a Question?
                </h2>
            </div>
    </section>
    <div class="container">
        <?php
    $showresult = false;
    $noresult = false;
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $p_title = $_POST['ptitle'];
        $p_desc  = $_POST['pdesc'];

        require "additionals/_dbconnect.php";

        $sql1 ="INSERT INTO `pyhton` ( `p_title`, `p_desc`, `p-date`) 
        VALUES ('$p_title', '$p_desc', current_timestamp());";
        $result1 = mysqli_query($conn, $sql1);
        $noresult = true;
        if($result1){
            echo '<div class="alert alert-success alert-success fade show" role="alert">
            <strong>Successfully!</strong> Your Query has been added! Wait for the community to responce to your Query.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
        else{
            echo '<div class="alert alert-success alert-success fade show" role="alert">
            <strong>Sorry!</strong> there was an ERROR  while uploading your answer.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';;
        }
    }
    ?>
    </div>
    <?php
   if (isset($_SESSION['loggin']) && $_SESSION['loggin'] == true){
    echo'< div class="container">
        <form action="'. $_SERVER["REQUEST_URI"].'"method="post">
    <div class="form-group">
        <label for="ptitile">Question Title</label>
        <input type="textarea" class="form-control" id="ptitle" name="ptitle" aria-describedby="emailHelp"
            placeholder="question title">

    </div>
    <div class="form-group">
        <label for="pdesc">Question Desc </label>
        <textarea class="form-control" id="pdesc" name="pdesc" rows="3" placeholder="question Desc"></textarea>
    </div>

    <button type="submit" class="btn btn-success text-center">Submit</button>
    </form>
    </div>';
    }
    else{
    echo'<div class="container my-4">
        <div class="jumbotron. jumbotron-fluid">
            <div class="container text-center">
                <h5><marquee><b> your are not logged in, please log in to ask a question.</b></marquee> </h5>

               
            </div>
        </div>';
        }
        ?>



        <section class="contact_section layout_padding">
            <div class="container">

                <div class="heading_container">
                    <h2>
                        Help out community !
                    </h2>
                    <h4>
                        <marquee><i>please answer to the question help out the community!</i></marquee>
                </div>
        </section>

        <div class="container">

            <?php
        require "additionals/_dbconnect.php";
        $sql ="SELECT * FROM `pyhton`";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)){
            $title = $row['p_title'];
            $desc = $row['p_desc'];
            $id = $row['p_id'];
           
            echo' <div class="container my-3"><div class="media">
            <img class="mr-3 " src="additionals/images/userd.png" width= "64px" alt="Generic placeholder image">
            <div class="media-body">
           
             <h5 class="mt-0 my-0" ><a class="" href="p-answers.php?catid='.$id.'">'.$title.'</a></h5>
             <p class=" font-weight-bold my-0 text-right my-0" > anonymus users</p>
            '.$desc.'

           
            </div>
            </div>
            </div>';
        }
    ?>
        </div>
        <script type="text/javascript" src="additionals/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="additionals/js/bootstrap.js"></script>
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
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