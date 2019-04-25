<?php include('server.php');?>
<!DOCTYPE HTML>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 2px solid #f1f1f1;
}
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("loginimage.jpg");
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

input[type=text]{
	border: none;
        font-size: 16px;
		position:absolute;
		width: 25%;
		top:31%;
		right:14%;
		padding: 21px 20px;
		margin: 8px 0;
		background: transparent;
		border: none;
		background-color: rgba(0,0,0, 0.5);
}
input[type=password] {
	border: none;
        font-size: 16px;
		position:absolute;
		width: 25%;
		top:45%;
		right:14%;
		padding: 21px 20px;
		margin: 8px 0;
		background: transparent;
		border: none;
		background-color: rgba(0,0,0, 0.5);
}
@font-face { font-family: Poppins-Regular; src: url('Poppins-Regular.otf'); } 
    .poppins { font-family: Poppins-Regular; font-size: 4.2em; }
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  position:absolute;
  top:62%;
  left:57.5%;
  color: #FFFFFF;
  text-align: center;
  font-size: 22px;
  padding: 13px;
  width: 385px;
  border-radius:35px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.button:hover{
background:rgb(0,0,0,0.5);
}
.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
@font-face { font-family: Montserrat-Bold; src: url('Montserrat-Bold.otf'); } 
    .montserrat { font-family: Montserrat-Bold; font-size: 4.2em; }

::placeholder {
    color: white;
    opacity: 1; /* Firefox */
	font-size:20px;
}
</style>
<div style="font-family: Poppins-Regular;position:absolute ;top:145px;left :900px;letter-spacing: 2px;font-family:Impact, Charcoal, sans-serif;font-size:40px;width: 100%;display: block;"><font color = "black" size = "80px">Login</font></div>
<form method = "post"action="login.php">
	<input type="text" placeholder="User Name" name="email_id" style="font-family: Poppins-Regular;color:#ffffff;">
	<?php include('errors.php');?>
	<input type="password" placeholder="Password" name="password" style="font-family: Poppins-Regular;color:#ffffff;">
	<button class = "button" name = "login" type="submit"><span>Sign In</span></button>
</form>
<div class="bg">
</div>
<button class ="button" style = "position:absolute; right:100px;top:520px;" onclick="location.href='register.php'"><span>New User?</span></button>




