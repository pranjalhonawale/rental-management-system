<?php
ob_start();
session_start();
include("connection_php.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>RENTAL MODULE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>



<style>
  
  .Rental_logout{

  background-color: #f44336; 
  position: fixed;
  right:50px;
  top:35px
  color: white;
  text-align: center;
  display: inline-block;
  font-size: 28px;
  cursor: pointer;
  border-radius:8px;
  border:1px solid black;

}


body
{
  background-image: url("bg1 (9).jpg"); 
 /* background-position: center; /* Center the image */ 
  background-repeat: no-repeat; /* Do not repeat the image */ 
  background-size:cover;
  height: 100%;
  width: 100%;


} 


</style>

<body>

  <div class="Rental_logout">
    <a href="rental_index.html"><button class="Rental_logout"> Logout </button> </a>
  </div>

<div class="container">
  <font size='40' face="Algerian" color="#0374ff"><center><b>Welcome </b> </center> </font>


  <table class="table table-bordered table-dark">
    <thead>
      <tr>
        <center> <br>
        <th>Customer_ID</th>
        <th>Billing Month</th>
        <th>Rent</th>
        <th>Electricity Bill</th>
        <th>Total Payment</th>
        <th>Payment date</th>
        <th>Payment ID</th>
        </center>
      </tr>

    </thead>
<tbody>

<?php
/*
$servername="localhost";
$username="root";
$password="root";
$database_name="rental_management_system";

$conn=mysqli_connect($servername,$username,$password,$database_name);
*/
if(1)
{
    $Rental_Aadhar_Number=$_SESSION['Rental_Aadhar_Number'];
    $Rental_Search_Box=$_POST['Rental_Search_Box'];
    
    $sql="select * from payment where Rental_Aadhar_Number='$Rental_Aadhar_Number' and Billing_Month='$Rental_Search_Box'";
    
    $result = mysqli_query($conn, $sql);
    
       if($conn->connect_error)
        {
            die("Failed to connect:".$conn->connect_error);
        }
    
        else
        {
          while($row = mysqli_fetch_assoc($result))
          {
    
            echo '<tr>';
            echo '<td>'.$row['Customer_ID'].'</td>';
            echo '<td>'.$row['Billing_Month'].'</td>';
            echo '<td>'.$row['Rent'].'</td>';
            echo '<td>'.$row['Electricity_Bill'].'</td>';
            echo '<td>'.$row['Total_Payment'].'</td>';
            echo '<td>'.$row['Payment_Date'].'</td>';
            echo '<td>'.$row['Payment_ID'].'</td>';
              
            echo '</tr>';
          }
        }
}
?>
    </tbody>
  </table>
</div>
<br> <br> <center> <h1><a href='rental_module2_php.php'> <input type='submit' class='btn btn-info' value=" Go To Dashboard.">   </a> </h1> </center>;
</body>
</html>
