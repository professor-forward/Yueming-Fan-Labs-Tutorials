<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <style type="text/css">
      .error {color: red;}
    </style>
  </head>
  <body>
<?php
  error_reporting(0);

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "lab9db";
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $sql = "";

  $id = trim($_POST['id']);
  $fn = trim($_POST['firstname']);
  $ln = trim($_POST['lastname']);
  $des = trim($_POST['description']);
  $act = trim($_POST['action']);

  if ($act == "add") {
    $sql = "INSERT INTO mydb(id, firstname, lastname, description) 
    VALUE('".$id."', '".$fn."', '".$ln."', '".$des."')";
    $conn->exec($sql);
    $sql = "SELECT * FROM mydb WHERE id=".$id;
    $result = $conn->query($sql);
    echo "You have successfully added a row.<br>";
    foreach ($result as $i) {
      echo "id: ".$i[0]."<br>";
      echo "first name: ".$i[1]."<br>";
      echo "last name: ".$i[2]."<br>";
      echo "description: ".$i[3]."<br>";
    }
    
  }
  if ($act == "delete") {
    if ($id!="") {
      $sql = "DELETE FROM mydb WHERE id=".$id;
      $conn->exec($sql);
      echo "You have successfully deleted a row.";
    }
    if ($fn!="") {
      $sql = "DELETE FROM mydb WHERE firstname='".$fn."'";
      $conn->exec($sql);
      echo "You have successfully deleted a row.";
    }
    if ($ln!="") {
      $sql = "DELETE FROM mydb WHERE lastname='".$ln."'";
      $conn->exec($sql);
      echo "You have successfully deleted a row.";
    }
    if ($des!="") {
      $sql = "DELETE FROM mydb WHERE description='".$des."'";
      $conn->exec($sql);
      echo "You have successfully deleted a row.";
    }

  }
  if ($act == "update") {
    $sql = "UPDATE mydb 
    SET firstname='".$fn.
    "', lastname='".$ln.
    "', description='".$des.
    "' WHERE id='".$id."'";
    $conn->exec($sql);
    $sql = "SELECT * FROM mydb WHERE id=".$id;
    $result = $conn->query($sql);
    echo "You have successfully updated a row.<br>";
    foreach ($result as $i) {
      echo "id: ".$i[0]."<br>";
      echo "first name: ".$i[1]."<br>";
      echo "last name: ".$i[2]."<br>";
      echo "description: ".$i[3]."<br>";
    }
  }
  if ($act == "search") {
    if ($id!="") {
      $sql = "SELECT * FROM mydb WHERE id=".$id;
      $result = $conn->query($sql);
      foreach ($result as $i) {
        echo "id: ".$i[0]."<br>";
        echo "first name: ".$i[1]."<br>";
        echo "last name: ".$i[2]."<br>";
        echo "description: ".$i[3]."<br>";
      }
    }
    if ($fn!="") {
      $sql = "SELECT * FROM mydb WHERE firstname='".$fn."'";
      $result = $conn->query($sql);
      foreach ($result as $i) {
        echo "id: ".$i[0]."<br>";
        echo "first name: ".$i[1]."<br>";
        echo "last name: ".$i[2]."<br>";
        echo "description: ".$i[3]."<br>";
      }
    }
    if ($ln!="") {
      $sql = "SELECT * FROM mydb WHERE lastname='".$ln."'";
      $result = $conn->query($sql);
      foreach ($result as $i) {
        echo "id: ".$i[0]."<br>";
        echo "first name: ".$i[1]."<br>";
        echo "last name: ".$i[2]."<br>";
        echo "description: ".$i[3]."<br>";
      }
    }
    if ($des!="") {
      $sql = "SELECT * FROM mydb WHERE description='".$des."'";
      $result = $conn->query($sql);
      foreach ($result as $i) {
        echo "id: ".$i[0]."<br>";
        echo "first name: ".$i[1]."<br>";
        echo "last name: ".$i[2]."<br>";
        echo "description: ".$i[3]."<br>";
      }
    }
    
  }
  
?>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <fieldset>
        <legend>Add Information</legend>
        <label>ID: </label>
        <input type="text" name="id">
        <br>
        <label>First Name: </label>
        <input type="text" name="firstname">
        <br>
        <label>Last Name: </label>
        <input type="text" name="lastname">
        <br>
        <label>Descrptin: </label>
        <input type="text" name="description">
        <br>
        <label>Action: </label>
        <select name="action">
          <option>add</option>
          <option>delete</option>
          <option>update</option>
          <option>search</option>
        </select>
        <br>
        <input type="submit" name="submit" value="submit"> 
      </fieldset>
    <br>
    <a href="db.php">try again</a>
  </body>
</html>


