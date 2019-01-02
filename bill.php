<?php include "connection.php" ?>
<?php
    $username = $_SESSION['username'];
    $query = "SELECT * FROM orders where username ='$username' and isactive = 1";
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
.class
{
  background-color:#E6CBF7;
}

    </style>
    <title>Sam's Anchor Cafe</title>
    <link rel="icon" type="image/png" href="images/new.png">
</head>
<body>
<nav>
<ul>
 <li><img class="logo" src="images/download%20(1).png" width="180" height="90" alt=""></li>
  <li><a class="float" href="">ABOUT</a></li>
  <li><a class="float" href="orderonline.php">HOME</a></li>
  <li><a class="float" href="menu.php">MENU</a></li>
  <li><a class="float" href="">CONTACT</a></li>
  
</ul>
</nav>
<div class="container">      
  <table class="table">
  <thead>
      <tr>
       <th class="size2">ID</th>
        <th class="size2">NAME </th>
        <th class="size2">PRICE</th>
        <th class="size2">QUANTITY</th>
        <th class="size2">AMOUNT</th>
      </tr>
    </thead>
    <tbody>
      <tr>
           <?php
           $sum=0;
           $sum2=0;
            while($res = mysqli_fetch_assoc($result)){
              $sum = $sum+$res['total'];
              $sum2 = $sum2+$res['quantity'];
        
            ?>
                  
                <td class="size"><?php echo $res["id"] ?></td>     
          <td class="size"><?php echo $res["dish"]; ?></td>
          <td class="size"><?php echo $res["price"] ?></td>
          <td class="size"><?php echo $res["quantity"] ?></td>
          <td class="size"><?php echo $res["total"] ?></td>
      </tr>

            <?php
            }
            ?>
            <tr>
            <td></td> 
           <td></td> 
           <td></td>  
           <td></td>   
            <td></td>
           </tr>
           <tr class="class">
           	<td><b>ORDER TOTAL</b></td> 
           <td></td> 
           <td></td>  
           <td><?php echo $sum2 ?></td>   
            <td><?php echo $sum ?></td>
           </tr>
           <tr>
            <td>
              </td> 
           <td></td> 
           <td></td>  
           <td></td>   
            <td><form action="placed.php" method="POST">
              <input type="hidden" name="varname" value="<?php echo $sum ?>">
              <input class="button btn btn-success" type="submit" name="button" value="place order">
                    </form></td>
           </tr>
           </tbody> 
    </div>

</body>
</html>