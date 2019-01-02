<?php include "connection.php" ?>
<?php
    //$username = $_SESSION['username'];
    $query = "SELECT * FROM admin";
    $result = mysqli_query($connection,$query);
    if(!$result)
    {
        die('query failed!');
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 

	<style>
    body{
	background-color: aliceblue;
}
        
nav ul {
    margin: 0;
    padding: 5px;
    background-color: #141e1c;
}

nav ul li {
    display: inline;
    color: rgb(255,255,255);
    margin: 13px;
}
        
a.float
        {
            color: white;
            text-decoration: none;
            font-size: 22px;
        }
        .logo
        {
            margin-right: 40%;
        }
   a.float:hover
        {
            color: #CF273E;
        }
        .button
{
	clear: both;
    background-color:#09D656;
    border: 3px solid #09D656;
    color: white;

}
.size
{
	font-size: 15px;
}
.size2
{
	font-size: 18px;
}
.btn
{
  text-decoration: none;
}


    </style>
    <title>Sam's Anchor Cafe</title>
    <link rel="icon" type="image/png" href="images/new.png">
</head>
<body>
<nav>
<ul>
 <li><img class="logo" src="images/download%20(1).png" width="180" height="90" alt=""></li>
 
  <li><a class="float" href="front.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HOME</a></li>
  
</ul>
</nav>
<div class="container">      
  <table class="table">
  <thead>
      <tr>
       <th class="size2">ORDER_ID</th>
        <th class="size2">NAME </th>
        <th class="size2">ORDER_AMOUNT</th>
        <th class="size2">DATE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
           <?php
            while($res = mysqli_fetch_assoc($result)){
        
            ?>
                  
                <td class="size"><?php echo $res["order_id"] ?></td>     
          <td class="size"><?php echo $res["name"]; ?></td>
          <td class="size"><?php echo $res["amount"] ?></td>
          <td class="size"><?php echo $res["order_date"] ?></td>
      </tr>

            <?php
            }
            ?>
           </tbody> 
    </div>

</body>
</html>