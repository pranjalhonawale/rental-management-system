<?php
ob_start();
session_start();
include ("connection_php.php");
?>

<!DOCTYPE html>

<html>
<head>

  <title> OWNER MODULE</title>
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

//include 'connection_php.php';
if(1)
{
   

    $Owner_Aadhar_Number = $_POST['Owner_Aadhar_Number'];
    $Owner_Password = $_POST['Owner_Password'];

    //$conn =new mysqli("localhost","root","root","rental_management_system");

   /* if($conn->connect_error)
    {
        die("Failed to connect:".$conn->connect_error);
    }
*/
   // else
    //{
        $stmt =$conn->prepare("select * from owner_registration where Owner_Aadhar_Number = ?");
        $stmt->bind_param("s",$Owner_Aadhar_Number);
        $stmt->execute();
        $stmt_result =$stmt->get_result();
        if($stmt_result->num_rows > 0)
        {
            $data = $stmt_result->fetch_assoc();
            if($data['Owner_Password']==$Owner_Password)
            {
                
                $_SESSION['Owner_Aadhar_Number']=$Owner_Aadhar_Number;
                $_SESSION['Owner_Password']=$Owner_Password;
                header("Location: owner_module_php.php");

               /* echo '<br><br><br><br><br><br><br><br><br><br><center><h1><a href="owner_module_php.php"> <input type="submit" class="btn btn-danger" value="Go To Dashboard"> </a> </h1> </center>';*/
            }
            
            /*else
            {
                echo '<h2> Invalid Email or Password </h2>';
            }*/
        }

        else
        {
            echo '<br><br><br><br><br><br><br><br><br><font color="black" align="center" size="50">'.'<h2>Invalid Email or Password<br> Please Try Again </h2>'.'</font>';
            echo '<center><h1><a href="owner_login.html"> <input type="submit" class="btn btn-danger" value="Try Again"> </a> </h1> </center>';
        }

}

?>
</body>
</html>