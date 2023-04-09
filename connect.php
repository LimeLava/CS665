<?php

  $servername = "localhost"; //Set the server name.
  $username = "root"; //Set the username.
  $password = ""; //Set the password.
  $dbname = "cd665"; //Define the database within the SQL server.

  try {
      //Create the new connect with PDO.
      $conn = new PDO("mysql:host=$servername; Database=$dbname", "$username", "$password");
      //set the PDO error mode to exception in order to catch errors
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
  catch(PDOException $e)
      {
      echo "Connection failed: " . $e->getMessage();
      }
?>
