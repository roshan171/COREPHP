<?php

include_once 'config.php';

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contact=$_POST['mobile'];

	$sql="INSERT INTO details (username,email,password,mobile) VALUES ('$username','$email','$password','$contact')";
	if(mysqli_query($conn,$sql)){
		echo "DATA INSERT SUCCESSFULY";
	}
	else{
		echo "DATA NOT INSERT PROPERLY".mysql_error($conn);
	}

	header("location:csv.php");
	exit;
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CSV File</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
	.maindiv {
margin:20px ;
width:980px;
height:500px;
background:#fff;
padding-top:20px;
font-family:'Droid Serif',serif;
font-size:14px;
margin-left: 350px;

}
.title {
width:500px;
height:70px;
text-shadow:2px 2px 2px #cfcfcf;
font-size:16px;
text-align:center
}
.form_div {
width:70%;
float:left
}
form {
width:300px;
border:1px dashed #aaa;
padding:10px 30px 40px;
margin-left:70px;
background-color:#f0f8ff
}
 h2 {
text-align:center;
text-shadow:2px 2px 2px #cfcfcf
}
textarea {
width:100%;
height:60px;
border-radius:1px;
box-shadow:0 0 1px 2px #123456;
margin-top:10px;
padding:7px;
border:none
}
.input {
width:100%;
height:30px;
border-radius:2px;
box-shadow:0 0 1px 2px #123456;
margin-top:10px;
padding:7px;
border:none;
margin-bottom:20px
}
.submit {
color:#fff;
border-radius:3px;
background:#1F8DD6;
padding:5px;
margin-top:40px;
border:none;
width:100%;
height:30px;
box-shadow:0 0 1px 2px #123456;
font-size:18px
}
p {
color:red;
text-align:center
}
span {
text-align:center;
color:green
}

</style>
</head>
<body>



<div class="maindiv">
<!--HTML Form -->
<div class="form_div">
<div class="title">
<h2>CSV FILE OPERATION.</h2>
</div>
<form action="" method="post" id="basic-form">
<!-- Method can be set as POST for hiding values in URL-->
<h2> ORDER FORM</h2>

<label> Username: </label>
<input class="input" name="username" type="text"  value="" required>


<label>Email:</label>
<input class="input" name="email" type="text"  value="" required>

<label>Password:</label>
<input class="input" name="password" type="text"  value="" required>


<label>Contact:</label>
<input class="input" name="mobile" type="text"  value="" required>


<input class="submit" name="submit" type="submit" value="Submit">
</form>
</div>
</div>
</body>
</html>