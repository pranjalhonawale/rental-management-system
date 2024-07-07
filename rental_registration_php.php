<?php
ob_start();
session_start();
include ("connection_php.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        RENTAL MODULE
    </title>

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
    if(isset($_POST['Register']))
    {
        $Rental_First_Name = $_POST['Rental_First_Name'];
        $Rental_Last_Name = $_POST['Rental_Last_Name'];
        $Rental_City = $_POST['Rental_City'];
        $Rental_State= $_POST['Rental_State'];
        $Rental_Pincode = $_POST['Rental_Pincode'];
        $Rental_Email_ID = $_POST['Rental_Email_ID'];
        $Rental_Password = $_POST['Rental_Password'];
        $Rental_Date_of_Birth = $_POST['Rental_Date_of_Birth'];
        $Maximum_Members = $_POST['Maximum_Members'];
        $Rental_Aadhar_Number = $_POST['Rental_Aadhar_Number'];
        $Rental_PAN_Number = $_POST['Rental_PAN_Number'];
        $Rental_Mobile_Number = $_POST['Rental_Mobile_Number'];
    
        $sql_query="insert into rental_registration(Rental_First_Name,Rental_Last_Name,Rental_City,Rental_State,Rental_Pincode,Rental_Email_ID,Rental_Password,Rental_Date_of_Birth,Maximum_Members,Rental_Aadhar_Number,Rental_PAN_Number, Rental_Mobile_Number)
        values('$Rental_First_Name', '$Rental_Last_Name', '$Rental_City', '$Rental_State', '$Rental_Pincode', '$Rental_Email_ID', '$Rental_Password', '$Rental_Date_of_Birth', '$Maximum_Members','$Rental_Aadhar_Number', '$Rental_PAN_Number', '$Rental_Mobile_Number')";
    
            if(mysqli_query($conn, $sql_query))
            {
                //echo("Successfully Registered.");
                echo '<br><br><br><br><br><br><br><br><br><font color="black" align="center" size="50">'.'<h2>Successfully Registered <br> </h2>'.'</font>';
                echo '<center><a href="index.html"> <img src="home_icon.jpg" height="50" width="50"></a></center>';
            }
    
            else
            {
                echo "Error: ".$sql."".mysqli_error($conn);
            }
    
            mysqli_close($conn);
            
    }
}
?>