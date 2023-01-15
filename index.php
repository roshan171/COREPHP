<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php

$a=12;
echo $a;
-$a=-12;
echo "<br>";
echo -$a;
echo "<br>";

$a++;
echo $a;

--$a;
echo "<br>";
echo $a;
echo "<br>";
$a--;
echo $a;

echo "<br>";




for ($x=1; $x <= 50; $x++){
    if( $x % 3 == 0 ){
        echo "ping"."<br>";
    }
    if( $x % 5 == 0 ){
        echo "pong"."<br>";
    }
    if( ( $x % 3 == 0 ) && ( $x % 5 == 0 ) ){
        echo "ping-Pong"."<br>";
    }
}

echo "<br>";

$x=200;
$$x=abc;

echo $x;
echo $$x;



	?>




	<script type="text/javascript">
		console.log(5+"6"+1);


	</script>

</body>
</html>