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
    <link rel="stylesheet" href="_/css/bootstrap.css" crossorigin="anonymous" media="screen">
    <link rel="stylesheet" href="_/css/mystyle.css" crossorigin="anonymous" media="screen">
<title>Hello, world!</title>
</head>
<body id="register">

<section class="container">
    <div class="content row">
        <?php include "_/components/php/header.php";?>
       
      <section class="main col col-lg-8">
      <article id="submit" class="media">
	    <?php include "_/components/php/submit.php";?>
      </section>
      <section class="sidebar col col-lg-4">
       <?php include "_/components/php/aside-register.php";?>
       <?php include "_/components/php/aside-accordion.php";?>
      </section>
      
    
    </div>
    <?php include "_/components/php/footer.php";?>
  </section>
 

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="_/js/bootstrap.js" crossorigin="anonymous"></script>
  <script src="_/js/myscript.js" crossorigin="anonymous"></script>

</body>
</html>