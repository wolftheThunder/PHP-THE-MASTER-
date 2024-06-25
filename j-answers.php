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
   
    <?php
    require "additionals/_navbar.php";
     $id = $_GET['catid'];
        require "additionals/_dbconnect.php";
        $sql1 ="SELECT * FROM `java` where j_id=$id";
        $result2 = mysqli_query($conn, $sql1);

        while ($row1 = mysqli_fetch_assoc($result2)){
            $title = $row1['j_title'];
            $desc = $row1['j_desc'];
            
           
            echo'<div class="container my-4">
            <div class="jumbotron jumbotron-fluid">
             <div class="container">
             <h6> Question : </h6>
               <h1 class="display-4 "><b>'.$title.'</b></h1>
               <p class="lead my-2">'.$desc.'</P
              
             </div>
           </div>
           </div>';
        }
    ?>
    <!-- this is where you can answer to that specific question -->
    <section class="contact_section layout_padding">
        <div class="container">

            <div class="heading_container">
                <h2>
                    Answer to this Question
                </h2>
            </div>
    </section>

    <!-- this is answer form -->
    <?php
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $ja_desc  = $_POST['padesc'];
        require "additionals/_dbconnect.php";

        $sql1 ="INSERT INTO `java_ans` ( `ja_titile`, `ja_cat_id`, `ja_date`) 
        VALUES ( '$ja_desc ', '$id', current_timestamp());";
        $result3 = mysqli_query($conn, $sql1);
        
        if($result3){
            echo '<div class="alert alert-success alert-success fade show" role="alert">
        <strong>thank You!</strong> for your answer, this makes us feel provd.
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
          </div>';
        }
    }
    ?>

    <div class="container">
        <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post"?> 
            

            </div>
            <div class="form-group">
                <label for="padesc">Answer to this question</label>
                <textarea class="form-control" id="padesc" name="padesc" rows="3"></textarea>
            </div>


            <button type="submit" class="btn btn-success text-center">Submit</button>
        </form>
    </div>
       <!-- this is where you can see to that specific question -->
       <section class="contact_section layout_padding">
        <div class="container">

            <div class="heading_container">
                <h2>
                    Answer to this question
                </h2>
            </div>
    </section>


    <!-- while loop to altrate the question -->

    <?php
        $id = $_GET['catid'];
        require "additionals/_dbconnect.php";
        $sql4 ="SELECT * FROM `java_ans` WHERE ja_cat_id=$id;";
        $result4 = mysqli_query($conn, $sql4);
        while ($row = mysqli_fetch_assoc($result4)){
            $answer = $row['ja_titile'];
      
            echo' <div class="container my-3"><div class="media">
            <img class="mr-3" src="additionals/images/userd.png" width= "64px" alt="Generic placeholder image">
            <div class="media-body">
            <p class=" font-weight-bold my-0" > anonymus users</p>

            <h5 class="mt-0" >'.$answer.'</a></h5>
            
           
            </div>
            </div>
            </div>';
        }
    ?>
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