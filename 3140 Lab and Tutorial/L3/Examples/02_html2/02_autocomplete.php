<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <style>
      body { padding: 30px; }
      input, select, button, label { display: block; margin: 20px; }
    </style>
  </head>
  <body>
    <form method="post" autocomplete="on">
      <input type="text" name="my_text" id="myText" placeholder="people">
      <input type="text" name="your_text" id="yourText" placeholder="shapes">
      <button type="submit">Go</button>
    </form>

<?php

  if (!empty($_POST)) {
    echo "<h1>POST DATA<h1>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
  }
?>
  </body>
</html>


