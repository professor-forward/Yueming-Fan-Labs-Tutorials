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
      <input type="color" name="my_colour" id="myColour" value="#f39efb">
      <input type="date" name="my_date" id="myDate" value="2016-09-21">
      <input type="datetime" name="my_date_time" id="myDateTime" value="2016-09-21T23:59:60Z">
      <input type="datetime-local" name="my_date_time_local" id="myDateTimeLocal" value="2016-09-21T11:12">
      <input type="time" name="my_time" id="myTime" value="10:11:12">
      <input type="week" name="my_week" id="myWeek" >
      <input type="month" name="my_month" id="myMonth" value="2016-09">
      <input type="number" name="my_number" id="myNumber" min="40" max="50" step="2" value="48">
      <input type="range" name="my_range" id="myRange" min="70" max="80" step="2" value="78">
      <input type="search" name="my_search" id="mySearch" value="ponies">
      <input type="tel" name="my_tel" id="myTel" value="(613) 555-5555" pattern="\(\d{3}\) +\d{3}-\d{4}">
      <input type="url" name="my_url" id="myUrl" placeholder="url" value="http://a4word.com">
      <input type="email" name="my_email" id="myEmail" placeholder="Email address" >
      <input type="text" name="my_text" id="myText" pattern="[a-zA-Z]{4}" placeholder="4 letters" required autofocus>
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


