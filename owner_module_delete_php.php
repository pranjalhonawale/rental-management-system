<?php
ob_start();
session_start();
include("connection_php.php");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style>

    body
    {
        background-image: url("rental_index_BG_img.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }

</style>

</head>

<?php
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

    if(isset($_POST['delete']))
    {
        $Aadhar_Number = $_POST['Aadhar_Number']; 
        $PAN_Number = $_POST['PAN_Number'];
    
        $sql = "delete from rental_registration where Rental_Aadhar_Number='$Aadhar_Number' and Rental_PAN_Number='$PAN_Number'";
    
       if(mysqli_query($conn, $sql))
        {
            echo "<center> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <font color='black' align='center' size='50'> Record Deleted Successfully.</font> </center>";
            echo "<br> <center> <h1><a href='owner_module_php.php' <input type='submit' class='btn btn-danger'> Go the Dashboard </a> </h1> </center>";
        }
    
        else
        {
            echo "Error: ".$sql."".mysqli_error($conn);
        }
    
       mysqli_close($conn);
    }
}
?>
</body>
</html>