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

  <title>Contect</title>

  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="additionals/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="additionals/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="additionals/css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
   <?php
   $showAlrt = false;
   $showErr = false;
   if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $q_title = $_POST['qtitle'];
    $q_desc = $_POST['qdesc'];
    
     
     require "additionals/_dbconnect.php";

     $sql = "INSERT INTO `questions` ( `q_title`, `q_desc`, `q_date`)
      VALUES ( '$q_title', '$q_title', current_timestamp())";

     $result= mysqli_query($conn, $sql);
     if ($result){
      
      $showAlrt = true;
     }
     else{
      $showErr = true;
     }

   

   }

    require "additionals/_navbar.php";


   ?>
    




  <!-- contact section -->
  <?php 
        if ($showAlrt){
            echo '<div class="alert alert-success alert-success fade show" role="alert">
            <strong>Successfull!</strong>your question has been added in Other section plaese vist that page for the answers. Wait for community to answer your querry.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';}
      if($showErr ){
        echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>SORRY!!</strong> Your question did not added !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }
      ?>

  <section class="contact_section layout_padding">
    <div class="container">

      <div class="heading_container">
        <h2>
          Ask a question?
        </h2>
      </div>
      <div class="">
        <div class="">
          <div class="row">
            <div class="col-md-9 mx-auto">
              <div class="contact-form">
                <form action="/code_solutions/h_question.php" method = "post">
                  <div>
                    <input type="text"  id= " qtitile" name = "qtitle" placeholder="Question Title ">
                  </div>
                  <div>
                  
                    <input type="text"  id= " qdesc" name = "qdesc" placeholder="Question Desc" class="input_message">
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn_on-hover" >
                      Send
                    </button>
                    <div class="d-flex justify-content-center mx-4">
                    <button type="action" class="btn_on-hover text-light " ><a href="others.php">Answer page</a>
                     
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="map_img-box">
        <img src="additionals/images/map-img.png" alt="">
      </div>
    </div> -->
  </section>


  <!-- end contact section -->
<!-- <div class="container my-4">
  <?php
require "additionals/_dbconnect.php";
$sql ="SELECT * FROM `questions`;";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)){
  $title = $row['q_title'];
  $desc = $row['q_desc'];
  $id = $row['q_id'];
  
    echo' <div class="container my-3"><div class="media">
    <img class="mr-3" src="additionals/images/userd.png" width= "54px" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0" ><a class="" href="h-ans.php?catid='.$id.'">'.$title.'</a></h5>
      '.$desc.'
    </div>
    </div>
    </div>';
}


?>
</div> -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              About Shop
            </h5>
            <div>
              <div class="img-box">
                <img src="additionals/iimages/location-white.png" width="18px" alt="">
              </div>
              <p>
                Address
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="additionals/iimages/telephone-white.png" width="12px" alt="">
              </div>
              <p>
                +01 1234567890
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="additionals/iimages/envelope-white.png" width="18px" alt="">
              </div>
              <p>
                demo@gmail.com
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
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_insta">
            <h5>
              Instagram
            </h5>
            <div class="insta_container">
              <div>
                <a href="">
                  <div class="insta-box b-1">
                    <img src="additionals/"additionals/images/insta.png" alt="">
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
                    <img src="additionals/iimages/insta.png" alt="">
                  </div>
                </a>
              </div>
              <div>
                <a href="">
                  <div class="insta-box b-3">
                    <img src="additionals/iimages/insta.png" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-4">
                    <img src="additionals/iimages/insta.png" alt="">
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
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
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

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2020 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="additionals/ijs/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="additionals/ijs/bootstrap.js"></script>
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



<div class="media">
  <img class="mr-3" src="..." alt="Generic placeholder image">
  <div class="media-body">
    <h5 class="mt-0">Media heading</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>