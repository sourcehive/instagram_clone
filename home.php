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
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>instagram home</title>
    
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <div class="home-container">
        
         <div class="hom-top-nav">
             
             <div class="home-top-nav-icon">
                
                <div class="home-top-nav-logo">
                    
                   <a href=""><img src="icon/instagram_name.png" alt=""></a> 
                    
                </div>
                 
             </div>
             
             <div class="home-top-nav-icon">
                
                <div class="home-top-nav-search">
                    
                    <input type="text" placeholder="Search">
                    
                </div>
                 
             </div>
             
             <div class="home-top-nav-icon">
                
              <div class="home-top-nav-icon-inside">
             
               <div class="home-top-nav-icons">
                   
                   <a class="outline active" href=""><img src="icon/home_outline.png" alt=""></a>
                   
                   <a class="fill active" href=""><img src="icon/home_fill.png" alt=""></a>
                    
                </div>
                
                <div class="home-top-nav-icons">
                   
                   <a class="outline" href=""><img src="icon/cursor.png" alt=""></a>
                   
                   <a class="fill" href=""><img src="icon/cursor_fill.png" alt=""></a>
                    
                </div>
                
                <div class="home-top-nav-icons">
                   
                   <a class="outline" href=""><img src="icon/explore_outline.png" alt=""></a>
                   
                   <a class="fill" href=""><img src="icon/explore_fill.png" alt=""></a>
                    
                </div>
                
                <div class="home-top-nav-icons">
                   
                   <a class="outline" href=""><img src="icon/heart_outline.png" alt=""></a>
                   
                   <a class="fill" href=""><img src="icon/heart_fill.png" alt=""></a>
                    
                </div>
                
                <div class="home-top-nav-icons">
                   
                   <a class="outline" href=""><img src="icon/profile_image.jpg" alt=""></a>
                    
                </div>
                
                </div>
                 
             </div>
             
         </div>
         
    </div>
     
</body>
</html>










