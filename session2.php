<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Session2</title>
</head>
<body>

	<?php

echo "Welcome User:".$_SESSION['Username'];    //Get information


	?>

</body>
</html>