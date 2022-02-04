<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="first_name" id="firstName" placeholder="Your name" />
      <input type="submit" value="Go" />
    </form>
<?php
  if (!empty($_POST)) {
    
    echo "Hello" ." ". $_POST["first_name"];
  }
?>
    <a href="11b_form.php">Try Again</a>

  </body>
</html>





