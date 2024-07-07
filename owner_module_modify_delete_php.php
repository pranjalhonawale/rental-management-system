<?php
$servername="localhost";
$username="root";
$password="root";
$database_name="rental_management_system";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed.".mysqli_connect_error());
}

if(isset($_POST['Delete_Record']))
{
    $Room_ID = $_POST['Room_ID'];
    $Owner_Last_Name = $_POST['Owner_Last_Name'];
    $Owner_City = $_POST['Owner_City'];
    $Owner_State= $_POST['Owner_State'];
    $Owner_Pincode = $_POST['Owner_Pincode'];
    $Owner_Email_ID = $_POST['Owner_Email_ID'];
    $Owner_Password = $_POST['Owner_Password'];
    $Owner_Aadhar_Number = $_POST['Owner_Aadhar_Number'];
    $Owner_PAN_Number = $_POST['Owner_PAN_Number'];
    $Owner_Mobile_Number = $_POST['Owner_Mobile_Number'];

    $sql_query="insert into rooms(Room_ID,Owner_Last_Name,Owner_City,Owner_State,Owner_Pincode,Owner_Email_ID,Owner_Password,Owner_Aadhar_Number,Owner_PAN_Number,Owner_Mobile_Number)
    values('$Room_ID', '$Owner_Last_Name', '$Owner_City', '$Owner_State', '$Owner_Pincode', '$Owner_Email_ID', '$Owner_Password', '$Owner_Aadhar_Number', '$Owner_PAN_Number',Owner_Mobile_Number)";

        if(mysqli_query($conn, $sql_query))
        {
            echo("Successfully Registered.");
        }

        else
        {
            echo "Error: ".$sql."".mysqli_error($conn);
        }

        mysqli_close($conn);
        
}

?>


 