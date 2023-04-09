
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
      <a class="active" href="categories.php">Categories</a>
      <a href="employees.php">Employees</a>
      <a href="orders.php">Orders</a>
      <div class="topnav-right">
        <a href="insertCategory.php">Insert</a>
        <a href="updateCategory.php">Update</a>
        <a href="deleteCategory.php">Delete</a>
      </div>
    </div>
    <center>
    <?php
      // Turn off all error reporting
      //error_reporting(0);
      session_start();
      include_once 'connect.php';
              $stmt = "SELECT * FROM cd665.categories";
              $sql=$conn->prepare($stmt);
              $sql->execute();
                echo "
                        <div id='table'>
                        <center>
                        <table>
                        <tr style='font-weight: bold; color:#4CAF50; text-align: center'>
                            <td>ID</td>
                            <td>Category Name</td>
                            <td>Contact Name</td>
                            <td>Category Type</td>
                            <td>Description</td>
                        </tr>
                        ";

                        // Returned the searched information in a table.
                        while ($row = $sql->FETCH(PDO::FETCH_ASSOC)) {
                            echo "
                                <tr>
                                    <td> ".$row['CategoryID']." </td>
                                    <td> ".$row['CategoryName']." </td>
                                    <td> ".$row['CategoryType']." </td>
                                    <td> ".$row['Description']." </td>
                                </tr
                            ";
                        }
      ?>
    </div>
    </center>
  </center>
  </body>
</html>
