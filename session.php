
<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Session</title>
</head>
<body>

	<?php

$_SESSION['Username']="Roshan";     //Store Session Value

echo "Session information Store Successfully"."<br>";

?>

<a href="session2.php">Visit next page</a> 


<!--echo $_SESSION['Username'];     //get the session value-->




</body>
</html>