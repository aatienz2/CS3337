<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Selling Page</title>
</head>
<body>

	<?php
		include("main_menu.php");
	?>
	<h1 align="center">
		Please submit your book information
	</h1>
	
	<form action="sellingInsert.php" enctype="multipart/form-data" method="post">
    <table align="center">
    <tr>
        <td>
        Email
        </td>
		<td>
		<input type="text" name="email">
		</td>
    </tr>
	<tr>
        <td>
        Book Name
        </td>
		<td>
		<input type="text" name="name">
		</td>
    </tr>
	<tr>
        <td>
        Book Description
        </td>
		<td>
		<input type="text" name="description">
		</td>
    </tr>
	<tr>
        <td>
        Book Picture
        </td>
		<td>
		<input type="file" name="pic">
		</td>
    </tr>
	<tr>
		<td>
		<input type="submit" value="submit">
		</td>
	</tr>
    </table>
	</form>

</body>
</html>