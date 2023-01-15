<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<?php


/**
 * 
 */
class Animal
{
	public $name;
	public $type;

	 function set_name ($name){
	 	$this->name=$name;
	 }

	 function get_name(){
	 	return $this->name;
	 }

	 function set_type($type){
	 	$this->type=$type;
	 }

	 function get_type(){
	 	return $this->type;
	 }
}


$animal = New Animal();
$animal-> set_name("Tiger");
$animal->set_type("Wild");

echo "Name Is:".$animal->get_name();
echo "<br>";
echo "Type Is:".$animal->get_type();


?>



</body>
</html>