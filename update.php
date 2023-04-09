<?php
	include_once 'connect.php';

	if (isset($_POST['updateCustomer'])) {
    $customerID = $_POST['CustomerID'];

    // If the POST returns nothing
  	if($_POST['CustomerName'] === '') {
  		$result_CSN = $conn->query("SELECT CustomerName FROM cd665.customers WHERE (customerID =	$customerID)");
  		$row_CSN = $result_CSN->fetch(PDO::FETCH_ASSOC);
  		$CustomerName = $row_CSN['CustomerName'];
  	} else {
  		$CustomerName = $_POST['CustomerName'];
  	}
    if($_POST['ContactName'] === '') {
  		$result_CTN = $conn->query("SELECT ContactName FROM cd665.customers WHERE (customerID =	$customerID)");
  		$row_CTN = $result_CTN->fetch(PDO::FETCH_ASSOC);
  		$ContactName = $row_CTN['ContactName'];
  	} else {
  		$ContactName = $_POST['ContactName'];
  	}
    if($_POST['Address'] === '') {
  		$result_AD = $conn->query("SELECT Address FROM cd665.customers WHERE (customerID =	$customerID)");
  		$row_AD = $result_AD->fetch(PDO::FETCH_ASSOC);
  		$Address = $row_AD['Address'];
  	} else {
  		$Address = $_POST['Address'];
  	}
    if($_POST['City'] === '') {
  		$result_CT = $conn->query("SELECT City FROM cd665.customers WHERE (customerID =	$customerID)");
  		$row_CT = $result_CT->fetch(PDO::FETCH_ASSOC);
  		$City = $row_CT['City'];
  	} else {
  		$City = $_POST['City'];
  	}
    if($_POST['PostalCode'] === '') {
  		$result_PC = $conn->query("SELECT PostalCode FROM cd665.customers WHERE (customerID =	$customerID)");
  		$row_PC = $result_PC->fetch(PDO::FETCH_ASSOC);
  		$PostalCode = $row_PC['PostalCode'];
  	} else {
  		$PostalCode = $_POST['PostalCode'];
  	}
    if($_POST['Country'] === '') {
  		$result_C = $conn->query("SELECT Country FROM cd665.customers WHERE (customerID =	$customerID)");
  		$row_C = $result_C->fetch(PDO::FETCH_ASSOC);
  		$Country = $row_C['Country'];
  	} else {
  		$Country = $_POST['Country'];
  	}

    $CustID = (string)$customerID;

    $sql = "UPDATE cd665.customers SET CustomerName = '$CustomerName', ContactName = '$ContactName', Address = '$Address', City = '$City', PostalCode = '$PostalCode', Country = '$Country'  WHERE (customerID = $CustID);";

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

  if (isset($_POST['updateCategory'])) {
    $CategoryID = $_POST['CategoryID'];

    // If the POST returns nothing
  	if($_POST['CategoryName'] === '') {
  		$result_CN = $conn->query("SELECT CategoryName FROM cd665.categories WHERE (CategoryID =	$CategoryID)");
  		$row_CN = $result_CN->fetch(PDO::FETCH_ASSOC);
  		$CategoryName = $row_CN['CategoryName'];
  	} else {
  		$CategoryName = $_POST['CategoryName'];
  	}
    if($_POST['CategoryType'] === '') {
  		$result_CT = $conn->query("SELECT CategoryType FROM cd665.categories WHERE (CategoryID =	$CategoryID)");
  		$row_CT = $result_CT->fetch(PDO::FETCH_ASSOC);
  		$CategoryType = $row_CT['CategoryType'];
  	} else {
  		$CategoryType = $_POST['CategoryType'];
  	}
    if($_POST['Description'] === '') {
  		$result_DS = $conn->query("SELECT Description FROM cd665.categories WHERE (CategoryID =	$CategoryID)");
  		$row_DS = $result_DS->fetch(PDO::FETCH_ASSOC);
  		$Address = $row_DS['Description'];
  	} else {
  		$Description = $_POST['Description'];
  	}

    $CatID = (string)$CategoryID;

    $sql = "UPDATE cd665.categories SET CategoryName = '$CategoryName', CategoryType = '$CategoryType', Description = '$Description'WHERE (CategoryID = $CatID);";

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

  if (isset($_POST['updateEmployee'])) {
    $EmployeeID = $_POST['EmployeeID'];

    // If the POST returns nothing
  	if($_POST['LastName'] === '') {
  		$result_LN = $conn->query("SELECT LastName FROM cd665.employees WHERE (EmployeeID =	$EmployeeID)");
  		$row_LN = $result_LN->fetch(PDO::FETCH_ASSOC);
  		$LastName = $row_LN['LastName'];
  	} else {
  		$LastName = $_POST['LastName'];
  	}
    if($_POST['FirstName'] === '') {
  		$result_FN = $conn->query("SELECT FirstName FROM cd665.employees WHERE (EmployeeID =	$EmployeeID)");
  		$row_FN = $result_FN->fetch(PDO::FETCH_ASSOC);
  		$FirstName = $row_FN['FirstName'];
  	} else {
  		$FirstName = $_POST['FirstName'];
  	}
    if($_POST['BirthDate'] === '') {
  		$result_BD = $conn->query("SELECT BirthDate FROM cd665.employees WHERE (EmployeeID =	$EmployeeID)");
  		$row_BD = $result_BD->fetch(PDO::FETCH_ASSOC);
  		$BirthDate = $row_BD['BirthDate'];
  	} else {
  		$BirthDate = $_POST['BirthDate'];
  	}

    $EmpID = (string)$EmployeeID;

    $sql = "UPDATE cd665.employees SET LastName = '$LastName', FirstName = '$FirstName', BirthDate = '$BirthDate'WHERE (EmployeeID = $EmpID);";

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

  if (isset($_POST['updateOrder'])) {
    $OrderID = $_POST['OrderID'];

    // If the POST returns nothing
  	if($_POST['CustomerID'] === '') {
  		$result_CID = $conn->query("SELECT CustomerID FROM cd665.orders WHERE (OrderID =	$OrderID)");
  		$row_CID = $result_CID->fetch(PDO::FETCH_ASSOC);
  		$CustomerID = $row_CID['CustomerID'];
  	} else {
  		$CustomerID = $_POST['CustomerID'];
  	}
    if($_POST['EmployeeID'] === '') {
  		$result_EID = $conn->query("SELECT EmployeeID FROM cd665.orders WHERE (OrderID =	$OrderID)");
  		$row_EID = $result_EID->fetch(PDO::FETCH_ASSOC);
  		$EmployeeID = $row_EID['EmployeeID'];
  	} else {
  		$EmployeeID = $_POST['EmployeeID'];
  	}
    if($_POST['OrderDate'] === '') {
  		$result_OD = $conn->query("SELECT OrderDate FROM cd665.orders WHERE (OrderID =	$OrderID)");
  		$row_OD = $result_OD->fetch(PDO::FETCH_ASSOC);
  		$OrderDate = $row_OD['OrderDate'];
  	} else {
  		$OrderDate = $_POST['OrderDate'];
  	}

    $OID = (string)$OrderID;

    $sql = "UPDATE cd665.orders SET CustomerID = '$CustomerID', EmployeeID = '$EmployeeID', OrderDate = '$OrderDate'WHERE (OrderID = $OID);";

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
