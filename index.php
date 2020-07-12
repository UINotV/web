<!DOCTYPE html>
<html><body>
<?php

$servername = "db";

// REPLACE with your Database name
$dbname = "myDb";
// REPLACE with Database user
$username = "user";
// REPLACE with Database user password
$password = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
  $sql = "SELECT id, _name, nickname, tel FROM register";

  echo '<table cellspacing="5" cellpadding="5">
        <tr> 
          <td>ID</td> 
          <td>Name</td> 
          <td>Nickname</td>
          <td>Tel</td>
        </tr>';

  if ($result = $conn->query($sql)) 
  {
      while ($row = $result->fetch_assoc()) 
      {
          $row_id = $row["id"];
          $row_name = $row["_name"];
          $row_nname = $row["nickname"];
          $row_tel = $row["tel"];

          echo '<tr> 
                  <td>' . $row_id . '</td> 
                  <td>' . $row_name . '</td>
                  <td>' . $row_nname . '</td>
                  <td>' . $row_tel . '</td>  
                </tr>';
      }
      $result->free();
  }

  $conn->close();

?> 
</table>
</body>
</html>
