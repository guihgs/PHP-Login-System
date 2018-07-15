<?php
//Allow the config
  define(' CONFIG ', true);
  //Require the config file
  require_once "inc/config.php";
?>


<?php 
  require_once "inc/header.php";
?>

  	<div class="uk-section uk-container">
  		<?php
        echo "Hello World, Today is: ";
        echo date('Y m d');
      ?>

      <p>
      <a href="PHP-Login-System/login.php">Login</a>
      <a href="PHP-Login-System/register.php">Register</a>
     </p> 
  	</div>


    <?php require_once "inc/footer.php"; ?>
