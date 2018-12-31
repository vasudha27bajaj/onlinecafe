<?php
   

   $connection=mysqli_connect('localhost','root','','myapp');
    if(!$connection)
    {
        die("database connection failed");
    }
session_start();
?>