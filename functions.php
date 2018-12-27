<?php include "connection.php"; ?>
 
       <?php  

    function register()
{
    

if(isset($_POST['register'])){
    global $connection;
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


function login()
{
    global $connection;

    if(isset($_POST['submit']))
{
$username = ($_POST['username']);
	$password = ($_POST['password']);
	
	//Create query
	$qry="SELECT * FROM register WHERE username='$username' AND password='$password'";
	$result=mysqli_query($connection,$qry);

	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $confirmation;
			
			session_write_close();
			header("location: orderonline.php");
			exit();

		}else {
			//Login failed
			$errmsg_arr[] = 'Invalid Email add or password';
			$errflag = true;
			if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: login.php");
		exit();
	}
		}
	}else {
		die("Query failed");
	}
    }
    }
/*function display()
{
 //include('connection.php');
  $id=$_SESSION['SESS_MEMBER_ID'];
      $p3 = "SELECT * FROM members WHERE id = '$username'";
  
  $resulta = mysqli_query($connection,$p3);

			while($row = mysqli_fetch_array($resulta,))
			{
			echo $row['name'] .' '. $row['surname'];
			}
  
}*/

?>