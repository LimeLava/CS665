<?php
  include_once 'connect.php';
?>

<!DOCTYPE html>
<html>
  <body>
    <center>
			<h3>Update Orders</h3>
			<form action="update.php" method="post">
				<label for="ID">Order ID:</label>
				<input type="text" name="OrderID" required id="ID">
				<button id="Q" type="button" name="button"
					onclick="javascript:alert('Enter the Order ID of the Order you would like to edit, then enter the values you want to change.')">?</button>

				<br></br>

				<div class="updateOrder">
					<table>
						<tr>
							<td class="titles"><label for="CID">Customer ID:</label></td>
							<td><input type="text" name="CustomerID" id="CID"></td>
							<td class="titles"><label for="EID">Employee ID:</label></td>
							<td><input type="text" name="EmployeeID" id="EID"></td>
						</tr>
						<tr>
							<td class="titles"><label for="OD">Order Date:</label></td>
							<td><input type="text" name="OrderDate" id="OD"></td>
						</tr>

					</table>
					<input name="updateOrder" type="submit" value="Update Order">
				</div>
			</form>
		</center>
  </body>
</html>
