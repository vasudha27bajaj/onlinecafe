
<?php include "connection.php";?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
    background-color:#09D656;
    background-repeat:no-repeat;
    border: 3px solid #09D656;
    cursor:pointer;
    overflow: hidden; 
    color: white;
    margin-left: 45%;
    margin-bottom:1%;
}
.btn
{
  text-decoration: none;
}

    </style>
	<title></title>
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
       <th>ID</th>
        <th>NAME </th>
        <th>PRICE</th>
        <th>QUANTITY</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
   <?php
      $query = "SELECT * FROM menu ORDER BY id ASC";
      $result = mysqli_query($connection,$query);
      if(mysqli_num_rows($result) > 0)
      {
          while($row = mysqli_fetch_array($result))
          {
          
        /*  $qry = "SELECT * FROM orders where dish ='". $row["dish"]."'";
          $qry = mysqli_query($connection,$qry);
          $res = mysqli_fetch_array($qry);
          $quantity = $res['quantity'];*/

?>        
        <form action="functions.php" method="POST"> 
         <td><?php echo $row["id"] ?></td>     
          <td><?php echo $row["dish"]; ?></td>
          <td><?php echo $row["price"] ?></td>
         <td>
         <input id="1" type="number" value=1 name="hidden_quantity" min="0" max="10">
         </td>
         <td>
         <input type="hidden" name="hidden_dish" value="<?php echo $row['dish'] ?>">
         </td>
          <td>
         <input type="hidden" name="hidden_price" value="<?php echo $row['price'] ?>">
         </td>
         <td>
         <input type="hidden" name="hidden_id" value="<?php echo $row['id'] ?>">
         </td>
             <td><input type="submit" value="ADD" name="add"></td></form>
          </tr>
          <?php 
          }
          }
      ?>
    </table>
    </div>
    <button class="button"><a class="btn" href="bill.php">ADD TO CART</a></button>
</body>
</html>