<?php
include("connection.php");
if(isset($_POST['but']));
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $num = $_POST["num"]; 
    $result = mysqli_query($con,"Insert into contact values('$name','$email','$num')");
}
if($result){
    echo"Registration Success";
}
else{
echo"Registration Failed";
}   
?>

 

