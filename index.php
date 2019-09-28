<!doctype html>
<html lang="en">
  <head>
  <title>website</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Merriweather&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="_/css/flaticon.css">
    <link rel="stylesheet" href="_/css/bootstrap.css" crossorigin="anonymous" media="screen">
    <link rel="stylesheet" href="_/css/mystyle.css" crossorigin="anonymous" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <title>Hello, world!</title>
  </head>
  <body id="home">

    <section class="container">
      <div class="content row">
          <?php include "_/components/php/header.php";?>
          <?php include "_/components/php/snippet-carousel.php";?>
        <section class="main col col-lg-8">
           <?php include "_/components/php/article-intro.php";?>
           <?php include "_/components/php/article-aboutartist.php";?>
           <?php include "_/components/php/article-aboutvenue.php";?>
           <?php include "_/components/php/footer.php";?>
        </section>
        <section class="sidebar col col-lg-4">
        <?php include "_/components/php/aside-register.php";?>
        <?php include "_/components/php/aside-lastyear.php";?>
        <?php include "_/components/php/aside-accordion.php";?>
        </section>
        
      
      </div>
     
    </section>
<!--    
  <section class="services">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-3 ftco-animate fadeInUp align-self-stretch">
          <div class="media block-6 services d-block">
            <div class="icon animated bounceInRight">
              <span class="flaticon-pin"></span>
            </div>
            <div class="media-body">
              <h3 class="heading mb-3">Venue</h3>
              <p>203 Fake St. Mountain View, San Francisco, California, US</p>
            </div>
          </div>


        </div>

      </div>
    </div>

  </section> -->

  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="_/js/bootstrap.js" crossorigin="anonymous"></script>
    <script src="_/js/myscript.js" crossorigin="anonymous"></script>
  
   
  </body>
</html>