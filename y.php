!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<h1> ADDITION AND SUBRACTION</h1>
<body>
     <table>
            <form name="nestle" method="post" action="mod_code.php"/>
                  <tr>
                      <td>
                      <label>NAME</label>&nbsp;<th colspan="col"><input name="name" type="text"/></th>
                      </td>
                   </tr>
                   <tr>
                       <td>
                       <label>AUTH CODE</label>&nbsp;<th colspan="col"><input name="auth_code" type="text"/></th>
                       </td>
                    </tr>
                     <tr>
                       <td>
                       <label>PRODUCT NAME</label>&nbsp;<th colspan="col"><input name="prod_name" type="text"/></th>
                       </td>
                    </tr>
                    <tr>
                    <td>
                    <label>NUMBER</label>&nbsp;<th colspan="col"><input name="number" type="text"/></th>
                    </td>
                  </tr>
                  <tr>
                     <td>
                     <input name="add" type="submit" value="ADD"/>
 
 
 
 
                      <input name="subract" type="submit" value="SUBRACT"/>
                      </td>
                  </tr>
 
              </form>
            </table> 
 
 
 
 
 
 
</body>
</html>
 
,,,This is the update code 
 
<?php
 
 
require_once("db_connect.php");
$db=mysqli_connect("$host","$user","$password","$db");
 
$prod_name=$_POST['prod_name'];
 
 
if(isset($_post['add'])){
    $add = $_POST['number'];
    $query= "update products SET prod_qty = prod_qty + $add WHERE prod_name = $prod_name";
    $result=mysqli_query($db,$query);
    if(!@result)
{
    die('<p>Error Retrieving</br>');
}
 
 
}
 
 
if(isset($_POST['subract'])){
    $subract = $_POST['number'];
    $query = "update products SET prod_qty = prod_qty - $subract WHERE prod_name= $prod_name";
    $result=mysqli_query($db,$query);
    if(!@result)
{
    die('<p>Error Retrieving</br>');
}
 
}
 