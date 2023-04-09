<!DOCTYPE html>
<html>
  <body>
    <div id="deleteEmployee" class="inputs">
	   <center>
			<h3>Delete User</h3>
			<form action="delete.php" method="post">
				<label for="EID">Employee ID:</label>
				<input type="text" name="EmployeeID" required id="EID">

				<br></br>
				<div class="deleteEmployee">
					<input name="deleteEmployee" type="submit" value="delete Employee">
				</div>
			</form>
		</center>
	 </div>
  </body>
</html>
