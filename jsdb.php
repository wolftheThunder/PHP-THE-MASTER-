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
    background: url("additionals/images/js.png") no-repeat center center; 
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
                <h1 class="display-4 mx-2 text-center"><img class="img-fluid text-left"
                        style="width: 100px; height: 50px;" src="additionals/images/pyhton.png"><b>Javascript</b></h1>
                <p class="lead my-2">This is the place where you will get to know more about Javascript. Ask the query and
                    community will
                    try to sout out your trobles.
                </p>
                <hr><br>
                <p>No Spam / Advertising / Self-promote in the forums.
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
        $js_title = $_POST['jstitle'];
        $js_desc  = $_POST['jsdesc'];

        require "additionals/_dbconnect.php";

        $sql1 ="INSERT INTO `js` (`js_title`, `js_desc`, `js_date`)
         VALUES ( '$js_title', '$js_desc', current_timestamp());";
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

    <div class="container">
        <form action="<?php echo $_SERVER['REQUEST_URI']?>"method="post">
            <div class="form-group">
                <label for="jstitlee">Question Title</label>
                <input type="textarea" class="form-control" id="jstitle" name="jstitle" aria-describedby="emailHelp"
                    placeholder="question title">

            </div>
            <div class="form-group">
                <label for="jsdesc">Example textarea</label>
                <textarea class="form-control" id="jsdesc" name="jsdesc" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-success text-center">Submit</button>
        </form>
    </div>



    <section class="contact_section layout_padding">
        <div class="container">

            <div class="heading_container">
                <h2>
                    Help out community !
                </h2>
            </div>
    </section>

    <div class="container">

        <?php
        require "additionals/_dbconnect.php";
        $sql ="SELECT * FROM `js`";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)){
            $title = $row['js_title'];
            $desc = $row['js_desc'];
            $id = $row['js_id'];
           
            echo' <div class="container my-3"><div class="media">
            <img class="mr-3" src="additionals/images/userd.png" width= "64px" alt="Generic placeholder image">
            <div class="media-body">
            <h5 class="mt-0" ><a class="" href="js-ans.php?catid='.$id.'">'.$title.'</a></h5>
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