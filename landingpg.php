<?php
    session_start();
    if(!isset($_SESSION['User'])){
        header('location: Login&sign.php');
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hello, world!</title>
    <style type="text/css">
      body{
        font-family: Trebuchet MS;


      }


      .navbar-brand{
        font-size: 40px;
        border:solid;
        border-radius: 10px;
        padding:5px;

      }
        
      @media only screen and (max-device-width: 1366px) {
      .parallax {
         background-attachment: fixed;
         display:table;
                }
      }
      .fixed-top{
        background-color: transparent !important;

      }

      .fixed-top.scrolled {
        background-color:#212121 !important;
        transition: background-color 200ms linear;

      }
      .container-liquid{
        margin: 160px 140px 0px 140px;
        background-color: none;

      }
      .carousel slide {
            display: grid;
            height: 100%;
        }
        .d-block{
            max-width: 100%;
            max-height: 100vh;
            margin: auto;
        }
        #servicepart{
          max-width: 600px;
          margin:1% auto;
          align: center;
        }
        .ct-btn-scroll {
        width: 49px;
        height: 49px;

        bottom: 30px;
        left: 0;
        right: 0;
        margin: auto;
        padding-top: 500px;
        z-index: 9;
        border-radius: 50%;
        -webkit-transition: background-color 0.25s ease-in-out;
        transition: background-color 0.25s ease-in-out;
        }
        .footer {
    
    padding: 30px;
    color: #cccccc;
    background-color: #222222;
}


.footer .social {
    
    font-size: 20px;
    height: 30px;
    width: 30px;
    text-align: center;
    padding: 5px;
    border: 1px solid #cccccc;
    margin-bottom: 10px;
    margin-right: 5px;
}
 



    </style>
  </head>
  <body>
    <div class="parallax">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top  scrolling-navbar">
    <a class="navbar-brand bg-gradient-success"  href="landingpg.php" id="demo" onmouseover="mouseOver()" onmouseout="mouseOut()"> Event Planner </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link " href="landingpg.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="eventbooking.html">Create Event</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="viewbooked.php">View Booked Event</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ServicePg/ServPage.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.html">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.html">Contact Us</a>
      </li>
         
    </ul>
    <form class="form-inline my-2 my-lg-0" role="form" action="ClogoutSes.php" method="GET">
      
      <button type="submit" class="btn btn-dark" name="logout">Log Out</button>
    </form>
    
  </div>
  </nav>

  </div>
  <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="98.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 style="font-size:200px;color:#eeeeee;text-shadow: 0 0 3px black;">Welcome </h1>
          <p>To the Events of Your Dreams</p>
          <a class="ct-btn-scroll ct-js-btn-scroll" href="#intro"><img alt="Arrow Down Icon" src="https://www.solodev.com/assets/anchor/arrow-down.png"></a>

        </div>
      </div>
      <div class="carousel-item">
        <img src="ui11.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1 style="font-size:200px;color:white;text-shadow: 0 0 3px black;">Services</h1>
          <p>Provided by us</p>
          <a class="ct-btn-scroll ct-js-btn-scroll" href="#srvc"><img alt="Arrow Down Icon" src="https://www.solodev.com/assets/anchor/arrow-down.png"></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="bg.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h1 style="font-size:200px;color:#eeeeee;">About</h1>
          <p>us</p>
          <a class="ct-btn-scroll ct-js-btn-scroll" href="#abt"><img alt="Arrow Down Icon" src="https://www.solodev.com/assets/anchor/arrow-down.png"></a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>

</div>

<div class="carousel"  >
    <img src="ui13.jpg" class="d-block w-100" id="intro">
    <div class="carousel-caption" >
      <h1 align="center" style="padding:0 0 120px 0;font-size:100px">EVENT MANAGEMENT WEBSITE</h1>
      <p style="font-size: 20px;text-align:justify;">Where Creativity meets Definition and Expertise meets Innovation. we are specializes in creating beautiful and unique Weddings, Social Engagements, Corporate Events, product launch and many more. We provide a multitude of services ranging from Day-of to Full Service Event Coordination, and everything in between. Your coordinator will collaborate with you to produce an unforgettable event that will be tailored to you and your vision.</p>
      <a class="ct-btn-scroll ct-js-btn-scroll" href="#srvc"><img alt="Arrow Down Icon" src="https://www.solodev.com/assets/anchor/arrow-down.png"></a>
    </div>

</div>

    <!-- After imagesSlider part-->
  <div class="service text-center" id="srvc">
      <div class="row">
          <div class="col-sm-4">
            <h1 style="padding:200px 0 0 0">SERVICES</h1>
            <button type="button" class="btn btn-outline-dark"><a href="ServicePg/ServPage.php" style="color:black;text-decoration-line: none;">Discover</a></button>
          </div>
          <div class="col-sm-8" style="padding:30px 0 0 0;">
            <img src="ui3.jpg" id="servicepart" style="border-radius:10px 10px 10px 10px;">
          </div>

      </div>
  </div>
  <!--After service-->
  <div class="About text-center" id="abt">
      <div class="row">
          <div class="col-sm-4">
            <h1 style="padding:200px 0 0 0">About Us</h1>
            <button type="button" class="btn btn-outline-dark" ><a href="aboutus.html" style="color:black;text-decoration-line: none;">Discover</a></button>
          </div>
          <div class="col-sm-8" style="padding:30px 0 0 0;">
            <img src="ui3.jpg" id="servicepart" style="border-radius:10px 10px 10px 10px;">
          </div>

      </div>
  </div>
  <!--footer-->
  <div id="footer" class="footer">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-4">
                  <h4 >Contact Us</h4>
                  <p> Pillai College Of Engineering,New Panvel</p>
                  <p> info@media.com</p>
                  <p> +1 222 222 2222</p>
                  <p> www.eventplanner.com</p>
              </div>
              <div class="col-lg-4 col-md-4">
                  <h4>About</h4>
                  <p> About Us</p>
                  <p> Privacy</p>
                  <p> Term & Condition</p>
              </div>
              <div class="col-lg-4 col-md-4">
                  <h4>Stay in touch</h4>
                  <a href="#" class="fa fa-facebook-square" style="font-size: 40px;"></a>
                  <a href="#" class="fa fa-twitter-square" style="font-size: 40px;"></a>
                  <a href="#" class="fa fa-instagram" style="font-size: 40px;"></a>
                  <a href="#" class="fa fa-pinterest-square" style="font-size: 40px;"></a>
                  <br>
                 
              </div>
          </div>
      </div>
  </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      function mouseOver() {
        document.getElementById("demo").style.color = "#607D8B";
          }

      function mouseOut() {
        document.getElementById("demo").style.color = "white";
          }

      $(function () {
        $(document).scroll(function () {
          var $nav = $(".fixed-top");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
      });


      $(document).ready(function(){
        $("a").on('click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function(){
              window.location.hash = hash;
            });
          }
        });
      });


      </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="scroll-down.js"></script>

    </script>
  </body>
</html>
