<!DOCTYPE html>
<html>
  <body>
    <div id="deleteCategory" class="inputs">
	   <center>
			<h3>Delete User</h3>
			<form action="delete.php" method="post">
				<label for="CID">Category ID:</label>
				<input type="text" name="CategoryID" required id="CID">

				<br></br>
				<div class="deleteCategory">
					<input name="deleteCategory" type="submit" value="delete Category">
				</div>
			</form>
		</center>
	 </div>
  </body>
</html>
