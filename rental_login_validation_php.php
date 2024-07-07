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
//ob_start();
//include 'connection_php.php';
if(1)
{
    
    $Rental_Aadhar_Number = $_POST['Rental_Aadhar_Number'];
    $Rental_Password = $_POST['Rental_Password'];

   // $conn =new mysqli("localhost","root","root","rental_management_system");

   // if($conn->connect_error){
   //     die("Failed to connect:".$conn->connect_error);
   // }
   // else
   // {
        $stmt =$conn->prepare("select * from rental_registration where Rental_Aadhar_Number= ?");
        $stmt->bind_param("s",$Rental_Aadhar_Number);
        $stmt->execute();
        $stmt_result =$stmt->get_result();
        if($stmt_result->num_rows > 0)
        {
            $data = $stmt_result->fetch_assoc();
            if($data['Rental_Password']==$Rental_Password)
            {   
                $_SESSION['Rental_Aadhar_Number']=$Rental_Aadhar_Number;
                header('Location:rental_module2_php.php');
                
            }
           /* else{
               // echo "<h2>Invalid Email or Password</h2>";
                  echo '<br><br><br><br><br><br><br><br><br><font color="black" align="center" size="50">'.'<h2>Invalid Email or Password<br> Please Try Again </h2>'.'</font>';
            echo '<center><h1><a href="rental_login.html"> <input type="submit" class="btn btn-danger" value="Try Again"> </a> </h1> </center>';
            }*/
        }
        else
        {
            echo '<center><br><br><br><br><br><br><br><br><br>'.'<font color="black" align="center" size="50">'.'Invalid Email or Password<br> Please Try Again '.'</font> </center><br>';

            echo '<center><a href="rental_login.html"> <input type="submit" class="btn btn-danger" value="Try Again"> </a></center>';
        }
}
    /*

    if($conn->connect_error){
        die("Failed to connect:".$conn->connect_error);
    }
    else
    {
        $stmt =$conn->prepare("select * from rental_registration where Rental_Aadhar_Number = ?");
        $stmt->bind_param("s",$Rental_Aadhar_Number);
        $stmt->execute();
        $stmt_result =$stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['Rental_Password']==$Rental_Password){
               // echo "<h2>Login Successfully</h2>";
                $_SESSION['Rental_Aadhar_Number']=$Rental_Aadhar_Number;
                header('Location:rental_module2_php.php');

            }
            else{
                echo "<h2>Invalid Email or Password</h2>";
            }
        }
        else{
            echo "<h2>Invalid Email or Password</h2>";
             }
    }*/
?>
</body>
</html>