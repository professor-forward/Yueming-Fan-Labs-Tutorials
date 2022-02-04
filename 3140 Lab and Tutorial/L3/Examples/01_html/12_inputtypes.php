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
    <form method="post" enctype="multipart/form-data">
      <input type="hidden" name="_method" value="put">
      <input type="text" name="my_name" placeholder="Enter name" maxlength="10">
      <input type="email" name="my_email" placeholder="Enter email">
      <input type="password" name="my_password" placeholder="Password">
      <select name="my_select">
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <select multiple="multiple" name="my_many_select[]">
        <option>Ten</option>
        <option>Twenty</option>
        <option>Thirty</option>
      </select>
      <textarea name="my_textarea" rows="3"></textarea>
      <input type="file" name="my_file" >

      <label>
        <input type="radio" name="my_radio" id="myRadioOption1" value="option1" checked="checked"> Option 1
      </label>
      <label>
        <input type="radio" name="my_radio" id="myRadioOption2" value="option2"> Option 2
      </label>
      <label>
        <input type="checkbox" name="my_checkbox1" value="check1">
        Check 1
      </label>
      <label>
        <input type="checkbox" name="my_checkbox2">
        Check 2
      </label>
      <button type="submit">Go</button>
    </form>
<?php

  if (!empty($_POST)) {
    echo "<h1>POST DATA<h1>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    echo "<h2>Uploaded file</h2>";
    echo $_FILES["my_file"]["tmp_name"] . "<br />";
  }
?>
  </body>
</html>


