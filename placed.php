<?php include "functions.php"; ?>
<?php 
$username = $_SESSION['username'];
    $query = "UPDATE orders SET ";
    $query.= "isactive = 0 ";
    $query.= "WHERE username ='$username'";

    $result = mysqli_query($connection,$query);
    if(!$result)
    {
        die('Query failed!');
    }
    $sum=0;
    $sum = $_POST['varname'];
    $date = date("d-m-y");
    $qry = "INSERT INTO admin(name,amount,order_date) ";
    $qry.= "VALUES ('$username',$sum,'$date')";
    $res = mysqli_query($connection,$qry);
    
    ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
	<title></title>
</head>
<body>

<div>
	<ul class="left">
		<li><img src="images/download%20(1).png" width="200px" height="110px"></li>
	</ul>
	<ul class="right">
		<li><a class="bar" href="">ABOUT</a></li>
		<li><a class="bar" href="orderonline.php">HOME</a></li>
		<li><a class="bar" href="menu.php">MENU</a></li>
		<li><a class="bar" href="">CONTACT</a></li>
		<li><a class="bar" href="logout.php">LOG-OUT</a></li>
	</ul>
</div>
<div class="container login-box2">
        <div class="col-xs-6 success">
           <h1 class="text-center">ORDER PLACED..!!</h1>
         </div>
    </div>
</body>
</html>