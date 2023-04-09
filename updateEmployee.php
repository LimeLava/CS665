<?php
  include_once 'connect.php';
?>

<!DOCTYPE html>
<html>
  <body>
    <center>
			<h3>Update Employees</h3>
			<form action="update.php" method="post">
				<label for="ID">Employee ID:</label>
				<input type="text" name="EmployeeID" required id="ID">
				<button id="Q" type="button" name="button"
					onclick="javascript:alert('Enter the Employee ID of the Employee you would like to edit, then enter the values you want to change.')">?</button>

				<br></br>

				<div class="updateEmployee">
					<table>
						<tr>
							<td class="titles"><label for="LN">Last Name:</label></td>
							<td><input type="text" name="LastName" id="LN"></td>
							<td class="titles"><label for="FN">First Name:</label></td>
							<td><input type="text" name="FirstName" id="FN"></td>
						</tr>
						<tr>
							<td class="titles"><label for="BD">Birth Date:</label></td>
							<td><input type="text" name="BirthDate" id="BD"></td>
						</tr>

					</table>
					<input name="updateEmployee" type="submit" value="Update Employee">
				</div>
			</form>
		</center>
  </body>
</html>
