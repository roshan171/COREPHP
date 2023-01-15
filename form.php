<?php

include_once 'config.php';

if(isset($_POST['submit']))
{  
 
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

     $sql = "INSERT INTO users (name,email,mobile) VALUES ('$name','$email','$mobile')";

     if (mysqli_query($conn, $sql)) {
     	
        echo 'New record  added successfully !';

     } else {
        echo "Data not Insert Properly".mysql_error($conn);
     }

header("location: form.php");
exit;

/*
     $sqli="Select * From users";
     $res= $conn->query($sqli);


    if($res->num_rows>0) {
     	while ( $row = $res->fetch_assoc()) {
     	  echo  "id: " . $row["id"]. " - Name: " . $row["name"]. " Email:" . $row["email"].  " Mobile:" . $row["mobile"]."<br>";
     	}

     }
     else{
     	echo "No record Found";
     }
     
    */ 
}



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Submition</title>
	<style type="text/css">
		@import "http://fonts.googleapis.com/css?family=Droid+Serif";
/* The Above Line Is To Import Google Font Style */
.maindiv {
margin:30px auto;
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
form h2 {
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
<h2>Insert Data In Database Using PHP.</h2>
</div>
<form action="" method="post" id="basic-form">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Form</h2>

<label>Name:<span> (required, at least 8 characters) </span> </label>
<input class="input" name="name" type="text" minlength="8" value="" required>


<label>Email:<span> (required) </span></label>
<input class="input" name="email" type="text"  value="" required>


<label>Contact:<span>(required, at least 10 numbers)</span></label>
<input class="input" name="mobile" type="text" minlength="10" value="" required>


<input class="submit" name="submit" type="submit" value="Insert">
</form>
</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>  
$(document).ready (function () {  
  $("#basic-form").validate ();  
});  
</script>  
</body>
</html>