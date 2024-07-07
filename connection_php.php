<?php
$servername="localhost";
$username="id17200094_prabhukunjrms";
$password="Yogesh2000@24";
$database_name="id17200094_rental_management_system";

$conn=mysqli_connect($servername,$username,$password,$database_name);

   if($conn->connect_error)
    {
        die("Failed to connect:".$conn->connect_error);
    }

    else
    {
      return 1;
    }
?>