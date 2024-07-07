<?php
session_start();
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
    <a href="index.html"><button class="Rental_logout"> Logout </button> </a>
  </div>

<div class="container">
    <center>         
            <form action="rental_search_php.php" method="POST" autocomplete="off">
            <center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="text" size="50" name="Rental_Search_Box" placeholder="Enter Billing Month You Want To Search....">&nbsp&nbsp&nbsp
            <input type="submit" name="Search" value="Search">
            </center>
            </form>
        </center>

  <font size='40' face="Algerian" color="#0374ff"><center><b>Welcome</b> </center> </font>

<?php
include 'connection_php.php';
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
    
    $sql="select Rental_First_Name, Rental_Last_Name, Rental_Email_ID, Maximum_Members, Rental_Aadhar_Number, Rental_PAN_Number, Rental_Mobile_Number from rental_registration where Rental_Aadhar_Number='$Rental_Aadhar_Number'";
    
    $result = mysqli_query($conn, $sql);
    
       if($conn->connect_error)
        {
            die("Failed to connect:".$conn->connect_error);
        }
    
        else
        {
          while($row = mysqli_fetch_assoc($result))
          {
    
            echo '<b>Name:  </b>'.$row['Rental_First_Name'].'&nbsp'.$row['Rental_Last_Name'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>';
    
            echo '<b>Email-ID: </b>'.$row['Rental_Email_ID'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>';
    
            echo '<b>Total Members: </b>'.$row['Maximum_Members'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>';
    
            echo '<b>Aadhar Number: </b>'.$row['Rental_Aadhar_Number'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>';
    
            echo '<b>PAN Number: </b>'.$row['Rental_PAN_Number'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>';
    
            echo '<b>Mobile Number: </b>'.$row['Rental_Mobile_Number'];
              
           // echo '</tr>';
          }
        }
}
?>
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
        <th>Payment ID / Payment Mode</th>
        </center>
      </tr>

    </thead>
<tbody>
<?php
include 'connection_php.php';

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
    $sql="select * from payment where Rental_Aadhar_Number='$Rental_Aadhar_Number'";
    
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
</body>
</html>