<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Construct</title>
</head>
<body>

	<?php 

class fruit{

	function __construct($name){
		$this->name=$name;              //Constructor
	}

	function get(){
		return $this->name."<br>";
	}

	function __destruct(){
		echo "Thank You to Watch";         //Destructor 
	}


}

$obj = new fruit("BANANA");
echo "Fruit Name Is:".$obj ->get();







	?>

</body>
</html>