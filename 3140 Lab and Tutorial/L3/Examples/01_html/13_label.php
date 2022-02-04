<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <style>
      body { padding: 30px; }
      input, select, button, label { display: block; margin: 20px; xbackground-color: grey;}
    </style>

  </head>
  <body>
    <!-- GET to another page -->
    <!-- <form method="get" ignore-action="process.php"> -->

    <!-- GET to self -->
    <!-- <form method="get"> -->

    <!-- POST -->
    <form method="post">
      <label for="firstName">Enter your first name</label>
      <input type="text" name="first_name" id="firstName" placeholder="Your name" />

      <label for="myRadioOption1">
        <input type="radio" name="my_radio" id="myRadioOption1" value="option1" checked="checked"> Option 1
      </label>
      <label for="myRadioOption2">
        <input type="radio" name="my_radio" id="myRadioOption2" value="option2"> Option 2
      </label>
      <label for="myCheckbox1">
        <input type="checkbox" name="my_checkbox1" id="myCheckbox1" value="check1">
        Check 1
      </label>
      <label for="myCheckbox2">
        <input type="checkbox" name="my_checkbox2" id="myCheckbox2">
        Check 2
      </label>

    </form>
  </body>
</html>


