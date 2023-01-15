<?php

setcookie("user","Roshan");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cookies</title>
</head>
<body>


<?php

if(!isset($_COOKIE['user'])){
	echo "Cookie not Found"."<br>";
}
else {
  
  echo "Cookie is Set:".$_COOKIE['user'];
}	

//setcookie("Roshan","",time()-1000);

unset($_COOKIE['Roshan']);
?>

</body>
</html>