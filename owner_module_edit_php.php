<?php
ob_start();
session_start();
include("connection_php.php");
/*
$servername="localhost";
$username="root";
$password="root";
$database_name="rental_management_system";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed.".mysqli_connect_error());
}
*/
if(1)
{
    if(isset($_POST['edit']))
    {
        $Rental_New_Email_ID = $_POST['Rental_New_Email_ID'];
        $Aadhar_Number = $_POST['Aadhar_Number']; 
        $sql = " UPDATE rental_registration  SET Rental_Email_ID='$Rental_New_Email_ID' WHERE Rental_Aadhar_Number='$Aadhar_Number'";
    
       if(mysqli_query($conn, $sql))
        {
            echo "Data Updated Successfully.";
            echo "<br> <br> <center> <h1><a href='owner_module_php.php' <input type='submit' class='btn btn-info'> Go the Dashboard. </a> </h1> </center>";
        }
    
        else
        {
            echo "Error: ".$sql."".mysqli_error($conn);
        }
    
       mysqli_close($conn);
    }
}

?>