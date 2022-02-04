<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
  </head>
  <body>
    <!-- GET to another page -->
    <!-- <form method="get" ignore-action="process.php"> -->

    <!-- GET to self -->
  	<!-- <form method="get"> -->

    <!-- POST -->
    <form method="post">
      <input type="text" name="first_name" id="firstName" placeholder="Your name" />
      <input type="submit" value="Go" />
      <input type="reset" value="Clear" /> <!-- rarely used -->
  	</form>
<?php

  if (!empty($_GET)) {
    echo "<h1>GET DATA<h1>";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
  }

  if (!empty($_POST)) {
    echo "<h1>POST DATA<h1>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
  }

  if (!empty($_REQUEST)) {
    echo "<h2>REQUEST DATA<h2>";
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";    
  }

?>
  </body>
</html>


