Table: Customers (In 3NF)
CustomerID (int) (PK)
CustomerName (varchar 45)
ContactName (varchar 45)
Address (varchar 45)
City (varchar 45)
PostalCode (int)
Country (varchar 45)

Example Data:
CustomerID | CustomerName | ContactName |     Address    |   City   | PostalCode | Country
------------------------------------------------------------------------------------------
1          | Target       | Jane Doe    | 11536 Lake St  | Backwood | 73628      | USA    
2          | Walmart      | John Doe    | 45659 Open Dr  | Howen    | 99513      | USA

Table: Categories (In 3NF)
CategoryID (int) (PK)
CategoryName (varchar 45)
CategoryType (varchar 45)
Description (varchar 45)


Example Data:
CategoryID | CategoryName | CategoryType |    Description  
------------------------------------------------------------
1          | Outdoors     | Furniture    | Outdoor furniture
2          | Indoors      | Furniture    | Indoor furniture

Table: Employees (In 3NF)
EmployeeID (int) (PK)
LastName (varchar 45)
FirstName (varchar 45)
BirthDate (date)

Examples Data
EmployeeID | LastName | FirstName | BirthDate
----------------------------------------------
1          | Doe      | John      | 11/6/1997
2          | Doe      | Jane      | 08/3/1989

Table: Orders (In 3NF)
OrderID (int) (PK)
CustomerID (int) (FK to Customers.CustomerID)
EmployeeID (int) (FK to Employees.EmployeeID)
OrderDate (date)

Foreign Key Constraints:
CustomerID references the CategoryID column in the Categories table
EmployeeID references the EmployeeID column in the Employees table

Example Data:
OrderID | CustomerID | EmployeeID | OrderDate
----------------------------------------------
1       | 1          | 1           | 08/05/2022
2       | 2          | 1           | 08/05/2022
