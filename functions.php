<?php include "connection.php"; ?>
 
       <?php  

    function register()
{
    

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pass2 = $_POST['pass2'];
    
    $username = mysqli_real_escape_string($connection,$username);
    $email = mysqli_real_escape_string($connection,$email);
    $password = mysqli_real_escape_string($connection,$password);
    $pass2 = mysqli_real_escape_string($connection,$pass2);

    $query = "INSERT INTO register(username,email,password,pass2) ";
    $query.= "VALUES ('$username','$email', '$password','$pass2')";
    $result = mysqli_query($connection,$query);
    if(!$result)
    {
        die('query failed!');
    }
    else
    {
        echo "Record Created";
        header("Location: registered.php");
    }
   }

}

    if(isset($_POST['login']))
{

    $username = $_POST['username'];
	$password = $_POST['password'];
	

	$qry="SELECT * FROM register WHERE username='$username' AND password='$password'";
	$result=mysqli_query($connection,$qry);

	if($result) {
		if(mysqli_num_rows($result) > 0) {
    
			$member = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $username;
     
			header("location: orderonline.php");
			exit();

		}else {
			//Login failed
			$errmsg_arr[] = 'Invalid Email add or password';
			$errflag = true;
			if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
        echo "<script type='text/javascript'>alert('$errmsg_arr');</script>";
		header("location: login.php");
		exit();
	}
		}
	}else {
		die("Query failed");
	}
    }
// session_start();
    if(isset($_POST['add']))
    {
        
       // die($_SESSION['username']."session");

       $username = $_SESSION['username'];
        $id = $_POST['hidden_id'];
        $dish = $_POST['hidden_dish'];
        $price = $_POST['hidden_price'];
        $quantity = $_POST['hidden_quantity'];

        $total = $price * $quantity;
       // die($total."total");
        $query = "INSERT INTO orders(dish,price,quantity,total,username) ";
        $query.= "VALUES('$dish',$price,$quantity,$total,'$username')";

        $result = mysqli_query($connection,$query);
    if(!$result)
    {
        die('query failed!');
    }
    else
    {
        echo "Record Created";
       header("Location: order.php");
    }
    }



?>