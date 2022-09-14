<?php


$conn = mysqli_connect("localhost","root","","instagramclone")or die(mysqli_error());

if($conn){
    echo "success";
}else{
    echo "error";

}


?>