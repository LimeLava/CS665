
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
      <a class="active" href="orders.php">Orders</a>
      <div class="topnav-right">
        <a href="insertOrder.php">Insert</a>
        <a href="updateOrder.php">Update</a>
        <a href="deleteOrder.php">Delete</a>
      </div>
    </div>
    <center>
    <?php
      // Turn off all error reporting
      //error_reporting(0);
      session_start();
      include_once 'connect.php';
              $stmt = "SELECT * FROM cd665.orders";
              $sql=$conn->prepare($stmt);
              $sql->execute();
                echo "
                        <div id='table'>
                        <center>
                        <table>
                        <tr style='font-weight: bold; color:#4CAF50; text-align: center'>
                            <td>ID</td>
                            <td>Customer ID</td>
                            <td>Employee ID</td>
                            <td>Order Date</td>
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
                                </tr
                            ";
                        }
      ?>
    </div>
    </center>
  </center>
  </body>
</html>
