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
function validate()
{

var y=document.forms["login"]["username"].value;
var a=document.forms["login"]["password"].value;
if ((y==null || y==""))
  {
    
  alert("you must enter your username");
  return false;
  }
  if ((a==null || a==""))
  {
  alert("you must enter your password");
  return false;
  }
 if(y==null && a==null)
       {
  alert("you must enter your username");
  return false;
  } 
    if(y=="" && a=="")
       {
  alert("you must enter your username");
  return false;
  }
    if(y=="" && a==null)
       {
  alert("you must enter your username");
  return false;
  }
    if(y==null && a=="")
       {
  alert("you must enter your username");
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
<div class="container login-box">
        <div class="col-xs-6">
           <h1 class="text-center">Log-In Here!</h1>
           <br><br>
            <form action="functions.php" name="login" onsubmit="validate()" method="post">
                <div class="form-group">
                   <label class="text" for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                   <label class="text" for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input class="btn btn-primary " type="submit" name="login" value="Log In">
            </form>
            <p>Not a Member?</p>
            <a class="signup" href="sign-up.php">Sign-Up</a>
        </div>
    </div>
</body>
</html>