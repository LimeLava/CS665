<!DOCTYPE html>
<html>
  <body>
    <div id="deleteCustomer" class="inputs">
	   <center>
			<h3>Delete User</h3>
			<form action="delete.php" method="post">
				<label for="CID">Customer ID:</label>
				<input type="text" name="CustomerID" required id="CID">

				<br></br>
				<div class="deleteCustomer">
					<input name="deleteCustomer" type="submit" value="delete Customer">
				</div>
			</form>
		</center>
	 </div>
  </body>
</html>
