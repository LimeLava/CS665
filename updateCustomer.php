<?php
  include_once 'connect.php';
?>

<!DOCTYPE html>
<html>
  <body>
    <center>
			<h3>Update Cusomers</h3>
			<form action="update.php" method="post">
				<label for="ID">Customer ID:</label>
				<input type="text" name="CustomerID" required id="ID">
				<button id="Q" type="button" name="button"
					onclick="javascript:alert('Enter the Customer ID of the costomer you would like to edit, then enter the values you want to change.')">?</button>

				<br></br>

				<div class="updateCustomer">
					<table>
						<tr>
							<td class="titles"><label for="CSN">Customer Name:</label></td>
							<td><input type="text" name="CustomerName" id="CSN"></td>
							<td class="titles"><label for="CTN">Contact Name:</label></td>
							<td><input type="text" name="ContactName" id="CTN"></td>
						</tr>
						<tr>
							<td class="titles"><label for="AD">Address:</label></td>
							<td><input type="text" name="Address" id="AD"></td>
							<td class="titles"><label for="CT">City:</label></td>
							<td><input type="text" name="City" id="CT"></td>
						</tr>
						<tr>
							<td class="titles"><label for="PC">Postal Code:</label></td>
							<td><input type="text" name="PostalCode" id="PC"></td>
							<td class="titles"><label for="C">Country:</label></td>
							<td><input type="text" name="Country" id="C"></td>
						</tr>
					</table>
					<input name="updateCustomer" type="submit" value="Update Customer">
				</div>
			</form>
		</center>
  </body>
</html>
