Customers:
  Create:
    INSERT INTO `cd665`.`customers` (`CustomerName`, `ContactName`, `Address`, `City`, `PostalCode`, `Country`) VALUES ('CustomerName', 'ContactName', 'Address', 'City', 'PostalCode', 'Country');
  Read:
    SELECT * FROM `cd665`.`customers`;
  Update:
    UPDATE `cd665`.`customers` SET `Column` = 'Data' WHERE (`EmployeeID` = 'EmployeeID');
  Delete:
    DELETE FROM `cd665`.`customers` WHERE (`CustomerID` = 'CustomerID');


Categories:
  Create:
    INSERT INTO `cd665`.`categories` (`CategoryName`, `CategoryType`, `Description`) VALUES ('CategoryName', 'CategoryType', 'Description');
  Read:
    SELECT * FROM `cd665`.`categories`;
  Update:
    UPDATE `cd665`.`categories` SET `Column` = 'Data' WHERE (`CategoryID` = 'CategoryID');
  Delete:
    DELETE FROM `cd665`.`categories` WHERE (`CategoryID` = 'CategoryID');

Employees:
  Create:
    INSERT INTO `cd665`.`employees` (`LastName`, `FirstName`, `BirthDate`) VALUES ('LastName', 'FirstName', 'BirthDate');
  Read:
    SELECT * FROM `cd665`.`employees`;
  Update:
    UPDATE `cd665`.`employees` SET `Column` = 'Data' WHERE (`EmployeeID` = 'EmployeeID');
  Delete:
    DELETE FROM `cd665`.`employees` WHERE (`EmployeeID` = 'EmployeeID');

Orders:
  Create:
    INSERT INTO `cd665`.`orders` (`CustomerID`, `EmployeeID`, `OrderDate`) VALUES ('CustomerID', 'EmployeeID', 'OrderDate');
  Read:
    SELECT * FROM `cd665`.`orders`;
  Update:
    UPDATE `cd665`.`orders` SET `Column` = 'Data' WHERE (`OrderID` = 'OrderID');
  Delete:
    DELETE FROM `cd665`.`orders` WHERE (`OrderID` = 'OrderID');
