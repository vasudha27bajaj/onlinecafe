<?php include "connection.php" ?>
<?php
    
    
   $newquery = "DELETE FROM orders ";
    $newquery.= "WHERE username ='$username'";
    
    $last = mysqli_query($connection,$newquery);

		session_destroy();
		?>
		<script type="text/javascript">
				window.location = "front.php?logout=1";
	    </script>	
