<?php
	include_once 'connect.php';

	if (isset($_POST['InsertCusomer'])) {
    $customerID = $_POST['CustomerID'];
		$CustomerName = $_POST['CustomerName'];
		$ContactName = $_POST['ContactName'];
		$Address = $_POST['Address'];
		$City = $_POST['City'];
		$PostalCode = $_POST['PostalCode'];
		$Country = $_POST['Country'];

		$sql = "INSERT INTO cd665.customers (customerID, CustomerName, ContactName, Address, City, City, PostalCode, Country) VALUES
	  ('$customerID', '$CustomerName', '$ContactName', '$Address', '$City', '$City', '$PostalCode', '$Country')";

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
	if (isset($_POST['InsertCategory'])) {
    $CategoryID = $_POST['CategoryID'];
		$CategoryName = $_POST['CategoryName'];
		$CategoryType = $_POST['CategoryType'];
		$Description = $_POST['Description'];

		$sql = "INSERT INTO cd665.categories (CategoryID, CategoryName, CategoryType, Description) VALUES
	  ('$CategoryID', '$CategoryName', '$CategoryType', '$Description')";

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
	if (isset($_POST['InsertEmployee'])) {
    $EmployeeID = $_POST['EmployeeID'];
		$LastName = $_POST['LastName'];
		$FirstName = $_POST['FirstName'];
		$BirthDate = $_POST['BirthDate'];

		$sql = "INSERT INTO cd665.categories (EmployeeID, LastName, FirstName, BirthDate) VALUES
	  ('$EmployeeID', '$LastName', '$FirstName', '$BirthDate')";

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
	if (isset($_POST['InsertEmployee'])) {
    $OrderID = $_POST['OrderID'];
		$CustomerID = $_POST['CustomerID'];
		$EmployeeID = $_POST['EmployeeID'];
		$OrderDate = $_POST['OrderDate'];

		$sql = "INSERT INTO cd665.categories (OrderID, CustomerID, EmployeeID, OrderDate) VALUES
	  ('$OrderID', '$CustomerID', '$EmployeeID', '$OrderDate')";

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
