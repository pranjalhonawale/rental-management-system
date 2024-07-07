<?php
ob_start();
session_start();
include ("connection_php.php");
?>

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
      .Owner_logout
      {
        text-align: right;
        font-size: 15px;
        border-radius:8px;

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

        <center>         
            <form action="owner_search_php.php" method="POST" autocomplete="off">
            <center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="text" size="50" name="Owner_Search_Box" placeholder="Enter First Name Of Rental You Want To Search....">&nbsp&nbsp&nbsp
            <input type="submit" name="Search" value="Search">
            </center>
            </form>

            <h2> <b>Registered Rental Details</b></h2> 
        </center>
        <div class="Owner_logout">
          <a href="index.html"> <input type="submit" name="Logout" value="Logout"></a>
        </div>


      </th>

      </tr>
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
    $Owner_Aadhar_Number=$_SESSION['Owner_Aadhar_Number'];
    $sql="select Owner_First_Name, Owner_Last_Name, Owner_Email_IDOwner, Owner_Aadhar_Number, Owner_PAN_Number, Owner_Mobile_Number from owner_registration where Owner_Aadhar_Number='$Owner_Aadhar_Number'";
    
    $result = mysqli_query($conn, $sql);
    
       if($conn->connect_error)
        {
            die("Failed to connect:".$conn->connect_error);
        }
    
        else
        {
          while($row = mysqli_fetch_assoc($result))
          {
    
            echo '<b>Name:  </b>'.$row['Owner_First_Name'].'&nbsp&nbsp&nbsp'.$row['Owner_Last_Name'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
            echo '<b>Email-ID: </b>'.$row['Owner_Email_ID'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>';
            echo '<b>Aadhar Number: </b>'.$row['Owner_Aadhar_Number'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
            echo '<b>PAN Number: </b>'.$row['Owner_PAN_Number'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
            echo '<b>Mobile Number: </b>'.$row['Owner_Mobile_Number'];
              
           // echo '</tr>';
          }
        }
}
?>
      <tr>
        <th>Rental_First_Name</th>
        <th>Rental_Last_Name</th>
        <th>Rental_City</th>
        <th>Rental_State</th>
        <th>Rental_Pincode</th>
        <th>Rental_Email_ID</th>
        <th>Rental_Date_of_Birth</th>
        <th>Maximum_Members</th>
        <th>Rental_Aadhar_Number</th>
        <th>Rental_PAN_Number</th>
        <th>Rental_Mobile_Number</th>
        <th colspan="4"> <center>Modify Details </center> </th>

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
    $sql="select Rental_First_Name,Rental_Last_Name, Rental_City, Rental_State, Rental_Pincode, Rental_Email_ID, Rental_Date_of_Birth, Maximum_Members, Rental_Aadhar_Number, Rental_PAN_Number, Rental_Mobile_Number from rental_registration"; 
    
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
    /*
          echo '<td>'.$row['Customer_ID'].'</td>';
          echo '<td>'.$row['Room_ID'].'</td>';
          echo '<td>'.$row['Room_Type'].'</td>';
          echo '<td>'.$row['Rent'].'</td>';
          echo '<td>'.$row['Location'].'</td>';
          echo '<td>'.$row['Maximum_People'].'</td>';
    
          
    */
    
    	    echo "<td> <a href='owner_module_allocate.html' <input type='submit' class='btn btn-info' name='Allocate Room' value='Allocate Room'> Allocate Room </td>";
      		
          echo "<td> <a href='owner_module_edit.html' <input type='submit' class='btn btn-warning' name='Edit' value='Edit'> Edit </td>";
          
          echo "<td> <a href='owner_module_fill_details.html' <input type='submit' class='btn btn-info' name='fill_details' value='Fill Details'> Fill Details </td>";
    
          echo "<td> <a href='owner_module_delete.html' <input type='submit' class='btn btn-danger' name='delete' value='Delete Record'> Delete Record </td>";
    
    	    echo '</tr>';
    
    	}
    
      echo "<td colspan='15' align='right'> <a href='owner_module_room_details_php.php' <input type='submit' class='btn btn-info' name='room_details' value='Room Details'>Room Details</td>";
}

?>
</tbody>
  </table>
</div>

</body>
</html>



