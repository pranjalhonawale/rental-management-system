<!DOCTYPE html>
<html lang="en">
<head>


  <title>OWNER MODULE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
<style>
    
body
{
  background
}

  </style>
</head>
<body>

<div class="container">
               
  <table class="table table-bordered">
    <thead>
      <tr><br></tr>
      <tr>
        <th colspan="22">
            <h2> <b>Room Details</b></h2> 
        </center>
      </th>

      </tr>
      <tr>
        <th>Room_ID</th>
        <th>Room_Type</th>
        <th>Rent</th>
        <th>Location</th>
        <th>Maximum_People</th>
        <th>Customer_ID</th>
        <th>Rental_Aadhar_Number</th>

      </tr>
    </thead>
    <tbody>

<?php

$servername="localhost";
$username="root";
$password="root";
$database_name="rental_management_system";

$conn=mysqli_connect($servername,$username,$password,$database_name);

$sql="select * from rooms"; 

$result = mysqli_query($conn, $sql);

//$row = mysqli_fetch_assoc($result);

while($row = mysqli_fetch_array($result))
    {
    //$Rental_First_Name=$row['Rental_First_Name'];
     /*     echo '<tr>';
        echo '<td>'.$row['Rental_First_Name'].'</td>';
        echo '<td>'.$row['Rental_Last_Name'].'</td>';
        echo '<td>'.$row['Rental_City'].'</td>';
        echo '<td>'.$row['Rental_State'].'</td>';
        echo '<td>'.$row['Rental_Pincode'].'</td>';
        echo '<td>'.$row['Rental_Email_ID'].'</td>';
        //echo '<td>'.$row['Rental_Password'].'</td>';
        echo '<td>'.$row['Rental_Date_of_Birth'].'</td>';
        echo '<td>'.$row['Maximum_Members'].'</td>';
        echo '<td>'.$row['Rental_Aadhar_Number'].'</td>';
        echo '<td>'.$row['Rental_PAN_Number'].'</td>';
        echo '<td>'.$row['Rental_Mobile_Number'].'</td>';
*/
      
      echo '<td>'.$row['Room_ID'].'</td>';
      echo '<td>'.$row['Room_Type'].'</td>';
      echo '<td>'.$row['Rent'].'</td>';
      echo '<td>'.$row['Location'].'</td>';
      echo '<td>'.$row['Maximum_People'].'</td>';
      echo '<td>'.$row['Customer_ID'].'</td>';
      echo '<td>'.$row['Rental_Aadhar_Number'].'</td>';

      echo '</tr>';

      echo '<a href=owner_module_php.php> Go To The Dashboard </a><br>';

    }

  
?>

</tbody>
  </table>
</div>

</body>
</html>



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


if(isset($_POST['room_details']))
{
    $result = mysqli_query($conn, $sql);
//$row = mysqli_fetch_assoc($result);
    while($row = mysqli_fetch_array($result))
    {
    //$Rental_First_Name=$row['Rental_First_Name'];
        echo '<tr>';
        echo '<td>'.$row['Rental_First_Name'].'</td>';
        echo '<td>'.$row['Rental_Last_Name'].'</td>';
        echo '<td>'.$row['Rental_City'].'</td>';
        echo '<td>'.$row['Rental_State'].'</td>';
        echo '<td>'.$row['Rental_Pincode'].'</td>';
        echo '<td>'.$row['Rental_Email_ID'].'</td>';
        //echo '<td>'.$row['Rental_Password'].'</td>';
        echo '<td>'.$row['Rental_Date_of_Birth'].'</td>';
        echo '<td>'.$row['Maximum_Members'].'</td>';
        echo '<td>'.$row['Rental_Aadhar_Number'].'</td>';
        echo '<td>'.$row['Rental_PAN_Number'].'</td>';
        echo '<td>'.$row['Rental_Mobile_Number'].'</td>';


    $Billing_Month=$_POST['Billing_Month'];
    $Payment_ID=$_POST['Payment_ID'];
    $Rent=$_POST['Rent'];
    $Electricity_Bill=$_POST['Electricity_Bill'];
    $Total_Payment=$_POST['Total_Payment'];
    $Payment_Date=$_POST['Payment_Date'];
    $Customer_ID=$_POST['Customer_ID'];
    $Rental_Aadhar_Number=$_POST['Rental_Aadhar_Number'];

    $sql = " select * from rooms";

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

?>

</body>
</html>
