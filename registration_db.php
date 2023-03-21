<?php
//connection database
include("connection.php");
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $depart = $_POST['department'];
    $phone = $_POST['phone'];
    $insertquery="INSERT INTO `curd`(`name`, `department`, `phone`) VALUES ('$name','$depart','$phone')";
    
    $result=mysqli_query($conn,$insertquery);
    
    if($result){
       echo "1";
    }else{
        
     echo "0";
    }
}


?>


