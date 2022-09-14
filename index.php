<?php

 error_reporting(0);

 include('connect.php');

 session_start();

 if(!isset($_SESSION['user_id'])){
 
     header('location:signin.php');
               
 }else{
     
    $userId = $_SESSION['user_id'];
     
 }
 ?>

<!DOCTYPE html>
<html>
    <?php include('templates/header.signin.php');?>

    <?php include('templates/footer.php');?>

</html>



