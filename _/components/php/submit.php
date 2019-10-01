<article id="submit" class="media">
	<?php
  $name="";
  if (empty($_POST["myname"] )) {
    $nameErr = "Please fill is required";
  } else {
    $name = test_input($_POST["myname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }

  
  }
  

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

 

  ?>

  <?php
  echo "<h2>Thankyou </h2>";
  echo "<h2>" . $name . "</h2>";
  echo " <h2> for your registration, we will inform you later!</h2>";
  ?>
</article>


