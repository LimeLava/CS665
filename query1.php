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
      <a class="active" href="query1.php">Join Orders and Cusomers</a>
      <a href="query2.php">Orders employee info</a>
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
              $stmt = "SELECT * FROM cd665.orders JOIN cd665.customers ON (orders.CustomerID = customers.CustomerID)";
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
                            <td>Customer ID</td>
                            <td>Customer Name</td>
                            <td>Contact Name</td>
                            <td>Address</td>
                            <td>City</td>
                            <td>Postal Code</td>
                            <td>Country</td>
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
                                    <td> ".$row['CustomerID']." </td>
                                    <td> ".$row['CustomerName']." </td>
                                    <td> ".$row['ContactName']." </td>
                                    <td> ".$row['Address']." </td>
                                    <td> ".$row['City']." </td>
                                    <td> ".$row['PostalCode']." </td>
                                    <td> ".$row['Country']." </td>
                                </tr
                            ";
                        }
      ?>
    </div>
    </center>
  </center>
  </body>
</html>
