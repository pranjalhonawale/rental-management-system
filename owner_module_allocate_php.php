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

<body>


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
    if(isset($_POST['Allocate']))
    {
        $Room_ID = $_POST['Room_ID'];
        $Room_Type = $_POST['Room_Type'];
        $Rent = $_POST['Rent'];
        $Location= $_POST['Location'];
        $Maximum_People = $_POST['Maximum_People'];
        $Customer_ID = $_POST['Customer_ID'];
        $Rental_Aadhar_Number = $_POST['Rental_Aadhar_Number'];
    
        $sql_query="insert into rooms(Room_ID, Room_Type, Rent, Location, Maximum_People, Customer_ID, Rental_Aadhar_Number)values('$Room_ID', '$Room_Type', '$Rent', '$Location', '$Maximum_People', '$Customer_ID', '$Rental_Aadhar_Number')";
    
            if(mysqli_query($conn, $sql_query))
            {
                echo "<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <center> <font color='black' align='center' size='50'> Room Successfully Allocated.</font> </center>";
                echo "<br> <br> <center> <h1><a href='owner_module_php.php' <input type='submit' class='btn btn-danger'> Go the Dashboard. </a> </h1> </center>";
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