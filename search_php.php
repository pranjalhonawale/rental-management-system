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
$servername="localhost";
$username="root";
$password="root";
$database_name="rental_management_system";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed.".mysqli_connect_error());
}

if(isset($_POST['Search']))
{
    $Owner_Search_Box=$_POST['Owner_Search_Box'];

    $sql = "select Rental_First_Name,Rental_Last_Name, Rental_City, Rental_State, Rental_Pincode, Rental_Email_ID, Rental_Date_of_Birth, Maximum_Members, Rental_Aadhar_Number, Rental_PAN_Number, Rental_Mobile_Number from rental_registration where Rental_First_Name='$Owner_Search_Box'"; 

    $result = mysqli_query($conn, $sql);
   
   if($result)
    {
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
        
            echo "<td> <a href='owner_module_allocate.html' <input type='submit' class='btn btn-info' name='Allocate Room' value='Allocate Room'> Allocate Room </td>";
        
            echo "<td> <a href='owner_module_edit.html' <input type='submit' class='btn btn-warning' name='Edit' value='Edit'> Edit </td>";
      
            echo "<td> <a href='owner_module_fill_details.html' <input type='submit' class='btn btn-info' name='fill_details' value='Fill Details'> Fill Details </td>";

            echo "<td> <a href='owner_module_delete.html' <input type='submit' class='btn btn-danger' name='delete' value='Delete Record'> Delete Record </td>";

            echo '</tr>';

        
        }


    }

    else
    {
        echo "Error: ".$sql."".mysqli_error($conn);
    }
   mysqli_close($conn);
}

?>
    </tbody>
  </table>
</div>
<br> <br> <center> <h1><a href='owner_module_php.php'> <input type='submit' class='btn btn-info' value=" Go the Dashboard.">   </a> </h1> </center>;
</body>
</html>
