<!DOCTYPE html>
<html>
<head>
	<title>GRBC Library</title>
</head>
<body>

	<h3>Please enter the desired books info.</h3>

	<form action="addBook2.php" method="post">
				<input type="text" name="title" placeholder="Enter Book Title" class="inputfield1">
				<input type="text" name="publisher" placeholder="Enter Book Publisher" class="inputfield1">
				<br>
				<input type="text" name="authorf" placeholder="Enter Author's First Name" class="inputfield1">
				<input type="text" name="authorl" placeholder="Enter Author's Last Name" class="inputfield1">
				<br>
				<input type="text" name="publishDate" placeholder="Enter Publish Date" class="inputfield1">
				<input type="text" name="pageCount" placeholder="Enter Page Count" class="inputfield1">
				<br>
				<input type="text" name="isbn" placeholder="Enter Book ISBN" class="inputfield1">
				<br>
				<input type="text" name="description" placeholder="Enter Book Description" class="inputfield1">
				<br>
				<button type="submit" name="submit" class="searchbutton">Submit</button>
	</form>

</body>
</html>