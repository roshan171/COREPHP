<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
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
<h2>Welcome To Login Page</h2>
</div>
<form action="" method="post" id="basic-form">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Login Form</h2>

<label>Username:<span> (required, at least 6 characters) </span> </label>
<input class="input" name="username" type="text" minlength="8" value="" required>



<label>Password:<span>(required, at least 8 characters)</span></label>
<input class="input" name="password" type="text" minlength="10" value="" required>


<input class="submit" name="submit" type="submit" value="Login">
</form>
</div>
</div>


</body>
</html>