<?php
  $mysqli = new mysqli("db", "user", "test", "myDb");
  if($mysqli->connect_error) {
    exit('Could not connect');
  }
  
  $sql = "SELECT id, _name FROM register";
  
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($id, $_name);
  $stmt->fetch();
  $stmt->close();
  
  echo $name;
?>

