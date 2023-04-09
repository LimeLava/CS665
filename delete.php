<?php
	include_once 'connect.php';

	if (isset($_POST['DeleteCustomer'])) {
    $customerID = $_POST['CustomerID'];

		$sql = "DELETE FROM cd665.customers WHERE CustomerID = $CustomerID";

		// Exception catching
  	try {
  		$conn->exec($sql);
  		// Return to admin page
  		header('Location: index.php');
  		exit;
  	} catch (PDOException $e) {
  		// Return error
  		echo "Error: " . $sql . "<br>" . $e->getMessage();
  	}
  }
	if (isset($_POST['DeleteCategory'])) {
    $CategoryID = $_POST['CategoryID'];

		$sql = "DELETE FROM cd665.Categories WHERE CategoryID = $CategoryID";

		// Exception catching
  	try {
  		$conn->exec($sql);
  		// Return to admin page
  		header('Location: index.php');
  		exit;
  	} catch (PDOException $e) {
  		// Return error
  		echo "Error: " . $sql . "<br>" . $e->getMessage();
  	}
  }
	if (isset($_POST['DeleteEmployee'])) {
    $EmployeeID = $_POST['EmployeeID'];

		$sql = "DELETE FROM cd665.employees WHERE EmployeeID = $EmployeeID";

		// Exception catching
  	try {
  		$conn->exec($sql);
  		// Return to admin page
  		header('Location: index.php');
  		exit;
  	} catch (PDOException $e) {
  		// Return error
  		echo "Error: " . $sql . "<br>" . $e->getMessage();
  	}
  }
	if (isset($_POST['DeleteOrder'])) {
    $OrderID = $_POST['OrderID'];

		$sql = "DELETE FROM cd665.orders WHERE OrderID = $OrderID";

		// Exception catching
  	try {
  		$conn->exec($sql);
  		// Return to admin page
  		header('Location: index.php');
  		exit;
  	} catch (PDOException $e) {
  		// Return error
  		echo "Error: " . $sql . "<br>" . $e->getMessage();
  	}
  }
