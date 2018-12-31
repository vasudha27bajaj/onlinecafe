<?php include "connection.php" ?>
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

		session_destroy();
		?>
		<script type="text/javascript">
				window.location = "front.php?logout=1";
	    </script>	
