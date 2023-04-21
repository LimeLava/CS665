
<?php
  include_once 'connect.php';
?>


<!DOCTYPE html>
<html>

  <head>
    <!-- Initialize CSS -->
	  <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class="topnav">
      <a href="index.php">Customers</a>
      <a href="categories.php">Categories</a>
      <a class="active" href="employees.php">Employees</a>
      <a href="orders.php">Orders</a>
      <a href="query1.php">Orders customer info</a>
      <a href="query2.php">Orders employee info</a>
      <div class="topnav-right">
        <a href="insertEmployee.php">Insert</a>
        <a href="updateEmployee.php">Update</a>
        <a href="deleteEmployee.php">Delete</a>
      </div>
    </div>
    <center>
    <?php
      // Turn off all error reporting
      //error_reporting(0);
      session_start();
      include_once 'connect.php';
              $stmt = "SELECT * FROM cd665.employees";
              $sql=$conn->prepare($stmt);
              $sql->execute();
                echo "
                        <div id='table'>
                        <center>
                        <table>
                        <tr style='font-weight: bold; color:#4CAF50; text-align: center'>
                            <td>ID</td>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td>Birth Date</td>
                        </tr>
                        ";

                        // Returned the searched information in a table.
                        while ($row = $sql->FETCH(PDO::FETCH_ASSOC)) {
                            echo "
                                <tr>
                                    <td> ".$row['EmployeeID']." </td>
                                    <td> ".$row['LastName']." </td>
                                    <td> ".$row['FirstName']." </td>
                                    <td> ".$row['BirthDate']." </td>
                                </tr
                            ";
                        }
      ?>
    </div>
    </center>
  </center>
  </body>
</html>
