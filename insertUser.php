<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert New User</title>
</head>
<body>
    <?php
        $connect = mysqli_connect("localhost", "root", "123456");
        mysqli_select_db($connect, "p3337");
		
        $insertUser = "insert into users values('".
			$_POST["email"].
			"', '" .
			$_POST["password"] .
			"')";
        $result = mysqli_query($connect, $insertUser);
    ?>
</body>
</html>