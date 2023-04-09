<?php
  include_once 'connect.php';
?>

<!DOCTYPE html>
<html>
  <body>
    <center>
			<h3>Insert Categories</h3>
			<form action="Insert.php" method="post">
				<label for="ID">Category ID:</label>
				<input type="text" name="CategoryID" required id="ID">
				<button id="Q" type="button" name="button"
					onclick="javascript:alert('Enter the Category ID of the Category you would like to edit, then enter the values you want to change.')">?</button>

				<br></br>

				<div class="InsertCategory">
					<table>
						<tr>
							<td class="titles"><label for="CN">Category Name:</label></td>
							<td><input type="text" name="CategoryName" required id="CN"></td>
							<td class="titles"><label for="CT">Category Type:</label></td>
							<td><input type="text" name="CategoryType" required id="CT"></td>
						</tr>
						<tr>
							<td class="titles"><label for="DS">Description:</label></td>
							<td><input type="text" name="Description" required id="DS"></td>
						</tr>

					</table>
					<input name="InsertCategory" type="submit" value="Insert Category">
				</div>
			</form>
		</center>
  </body>
</html>
