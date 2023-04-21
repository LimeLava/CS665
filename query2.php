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
      <a href="employees.php">Employees</a>
      <a href="orders.php">Orders</a>
      <a href="query1.php">Orders customer info</a>
      <a class="active" href="query2.php">Orders employee info</a>
        <div class="topnav-right">
          <a href="insertCustomer.php">Insert</a>
          <a href="updateCustomer.php">Update</a>
          <a href="deleteCustomer.php">Delete</a>
        </div>
    </div>
    <center>
    <?php
      // Turn off all error reporting
      //error_reporting(0);
      session_start();
      include_once 'connect.php';
              $stmt = "SELECT * FROM cd665.orders JOIN cd665.employees ON (orders.EmployeeID = employees.EmployeeID)";
              $sql=$conn->prepare($stmt);
              $sql->execute();
                echo "
                        <div id='table'>
                        <center>
                        <table>
                        <tr style='font-weight: bold; color:#4CAF50; text-align: center'>
                            <td>Customer ID</td>
                            <td>Customer ID</td>
                            <td>Employee ID</td>
                            <td>Order Date</td>
                            <td>Employee ID</td>
                            <td>Last Name</td>
                            <td>First Name</td>
                            <td>Birth Date</td>
                        </tr>
                        ";

                        // Returned the searched information in a table.
                        while ($row = $sql->FETCH(PDO::FETCH_ASSOC)) {
                            echo "
                                <tr>
                                    <td> ".$row['OrderID']." </td>
                                    <td> ".$row['CustomerID']." </td>
                                    <td> ".$row['EmployeeID']." </td>
                                    <td> ".$row['OrderDate']." </td>
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
