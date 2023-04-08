Create Customers table:
CREATE TABLE `cd665`.`customers` (
  `CustomerID` INT NOT NULL AUTO_INCREMENT,
  `CustomerName` VARCHAR(45) NULL,
  `ContactName` VARCHAR(45) NULL,
  `Address` VARCHAR(45) NULL,
  `City` VARCHAR(45) NULL,
  `PostalCode` INT NULL,
  `Country` VARCHAR(45) NULL,
  PRIMARY KEY (`CustomerID`));

Create Categories table:
CREATE TABLE `cd665`.`categories` (
  `CategoryID` INT NOT NULL AUTO_INCREMENT,
  `CategoryName` VARCHAR(45) NULL,
  `CategoryType` VARCHAR(45) NULL,
  `Description` VARCHAR(45) NULL,
  PRIMARY KEY (`CategoryID`));

Create Employees table
CREATE TABLE `cd665`.`employees` (
  `EmployeeID` INT NOT NULL AUTO_INCREMENT,
  `LastName` VARCHAR(45) NULL,
  `FirstName` VARCHAR(45) NULL,
  `BirthDate` DATE NULL,
  PRIMARY KEY (`EmployeeID`));

Create Orders table
CREATE TABLE `cd665`.`orders` (
  `OrderID` INT NOT NULL AUTO_INCREMENT,
  `CustomerID` INT NULL,
  `EmployeeID` INT NULL,
  `OrderDate` DATE NULL,
  PRIMARY KEY (`OrderID`),
  CONSTRAINT `CustomerID`
    FOREIGN KEY (`CustomerID`)
    REFERENCES `cd665`.`customers` (`CustomerID`)
    ON DELETE SET NULL
    ON UPDATE CASCADE,
  CONSTRAINT `EmployeeID`
    FOREIGN KEY (`EmployeeID`)
    REFERENCES `cd665`.`employees` (`EmployeeID`)
    ON DELETE SET NULL
    ON UPDATE CASCADE);
