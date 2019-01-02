<?php include "connection.php";?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
	<title>Sam's Anchor Cafe</title>
  <link rel="icon" type="image/png" href="images/new.png">
	<script type="text/javascript">
function validateForm()
{

var j=document.forms["register"]["username"].value;
var a=document.forms["register"]["email"].value;
var b=document.forms["register"]["password"].value;
var d=document.forms["register"]["pass2"].value;

if ((j==null || j==""))
  {
  alert("you must enter your username");
  return false;
  }
if ((a==null || a==""))
  {
  alert("you must enter your email");
  return false;
  }
if ((b==null || b==""))
  {
  alert("you must enter your password");
  return false;
  }
if ((d==null || d==""))
  {
  alert("you must enter your password again");
  return false;
  }

if( b != d ) {
alert("Password does not match");
  return false;
}
var atpos=a.indexOf("@");
var dotpos=a.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=a.length)
  {
  alert("Not a valid e-mail address");
  return false;
  } 

}
</script>
</head>
<body>
<div>
	<ul class="left">
		<li><img src="images/download%20(1).png" width="200px" height="110px"></li>
	</ul>
	<ul class="right">
		<li><a class="bar" href="">ABOUT</a></li>
		<li><a class="bar" href="front.php">HOME</a></li>
		<li><a class="bar" href="menu.php">MENU</a></li>
		<li><a class="bar" href="">CONTACT</a></li>
	</ul>
</div>
<div class="container login-box1">
        <div class="col-xs-6">
           <h1 class="text-center">Sign-Up!</h1>
           <br>
            <form name="register" action="functions.php" onclick="return validateForm()" method="post">
                <div class="form-group">
                   <label class="text" for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                   <label class="text" for="email">Email</label>S
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                   <label class="text" for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                 <div class="form-group">
                   <label class="text" for="password2">Re-Type Password</label>
                    <input type="password" name="pass2" class="form-control">
                </div>
                
                <input class="btn btn-primary" type="submit" name="register" value="Sign-Up">
            </form>
        </div>
    </div>
</body>
</html>