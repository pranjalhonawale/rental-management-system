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
include 'connection_php.php';
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
        $Owner_First_Name = $_POST['Owner_First_Name'];
        $Owner_Last_Name = $_POST['Owner_Last_Name'];
        $Owner_City = $_POST['Owner_City'];
        $Owner_State= $_POST['Owner_State'];
        $Owner_Pincode = $_POST['Owner_Pincode'];
        $Owner_Email_ID = $_POST['Owner_Email_ID'];
        $Owner_Password = $_POST['Owner_Password'];
        $Owner_Aadhar_Number = $_POST['Owner_Aadhar_Number'];
        $Owner_PAN_Number = $_POST['Owner_PAN_Number'];
        $Owner_Mobile_Number = $_POST['Owner_Mobile_Number'];
    
        $sql_query="insert into owner_registration(Owner_First_Name,Owner_Last_Name,Owner_City,Owner_State,Owner_Pincode,Owner_Email_ID,Owner_Password,Owner_Aadhar_Number,Owner_PAN_Number,Owner_Mobile_Number)
        values('$Owner_First_Name', '$Owner_Last_Name', '$Owner_City', '$Owner_State', '$Owner_Pincode', '$Owner_Email_ID', '$Owner_Password', '$Owner_Aadhar_Number', '$Owner_PAN_Number',Owner_Mobile_Number)";
    
            if(mysqli_query($conn, $sql_query))
            {
                //echo '<Successfully Registered.';
                echo '<br><br><br><br><br><br><br><br><br><font color="black" align="center" size="50">'.'<h2>Successfully Registered <br> </h2>'.'</font>';
                echo '<center><a href="index.html"> <img src="home_icon.jpg" height="50" width="50"></a></center>';
                
            }
    
            else
            {
                echo "Error: ".$sql."".mysqli_error($conn);
            }
    
            mysqli_close($conn);
    
        if(isset($_SESSION['register'])) {
         header("Location:/index.html"); // redirects them to homepage
         exit; // for good measure
        }    
            
    }
}

?>
</body>
</html>