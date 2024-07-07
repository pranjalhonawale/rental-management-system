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
    if(isset($_POST['Fill_Details']))
    {
        $Billing_Month=$_POST['Billing_Month'];
        $Payment_ID=$_POST['Payment_ID'];
        $Rent=$_POST['Rent'];
        $Electricity_Bill=$_POST['Electricity_Bill'];
        $Total_Payment=$_POST['Total_Payment'];
        $Payment_Date=$_POST['Payment_Date'];
        $Customer_ID=$_POST['Customer_ID'];
        $Rental_Aadhar_Number=$_POST['Rental_Aadhar_Number'];
    
        $sql = " insert into payment(Billing_Month, Payment_ID, Rent, Electricity_Bill, Total_Payment, Payment_Date, Customer_ID, Rental_Aadhar_Number) values('$Billing_Month','$Payment_ID','$Rent', '$Electricity_Bill', '$Total_Payment', '$Payment_Date', '$Customer_ID', '$Rental_Aadhar_Number')";
    
       if(mysqli_query($conn, $sql))
        {
            echo "<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <center> <font color='black' align='center' size='50'> Data Updated Successfully. </font> </center>";
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

   
   
 