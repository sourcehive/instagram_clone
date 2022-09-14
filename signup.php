<?php

error_reporting(0);

include('connect.php');

session_start();

if (isset($_POST['submit'])) {

    $email = $_POST['email'];

    $password = $_POST['password'];

    $fullname = $_POST['fullname'];

    $username = $_POST['username'];

    $sql = "SELECT * FROM `user` WHERE `fullname` = '$fullname'";

    $result = mysqli_query($conn,  $sql);

    if (mysqli_num_rows($result) > 0) {

        $message = "<h6>" . "username already excist" . "</h6>";
    } else {

        if (empty($email) || empty($password) || empty($fullname) || empty($username)) {

            $message = "<h6>" . "Plss fill the all fields.." . "</h6>";
        } else {

            $query = "INSERT INTO `user`( `fullname`, `username`, `email`, `password`) VALUES 
            
                      ('$fullname','$username','$email','$password')";

            $query_result = mysqli_query($conn, $query);

            if ($query_result) {

                $sql = "SELECT * FROM `user` WHERE `fullname` = '$fullname'";

                $result = mysqli_query($conn,  $sql);

                while ($row = mysqli_fetch_assoc($result)) {

                    $_SESSION['user_id'] = $row['user_id'];

                    header('location:home.php');

                    $message = "<h6>" . "user data insert successfully.." . "</h6>";
                }
            } else {

                $message = "<h6>" . "error.." . "</h6>";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/html/style.css">


    <title>Instagram signup</title>

   
</head>

<body>

    <div class="instagram-container">

        <div class="instagram-logo">

            <img src="icon/instagram_name.png" alt="">

        </div>

        <div class="instagram-status">

            <p>Sign up to see photos and videos </p>

            <p>from your friends. </p>

        </div>

        <form action="" method="post">

            <div class="instagram-container-inside">

                <button><i class="fab fa-facebook-square"></i>Log in with facebook</button>

                <h5>OR</h5>

                <?php echo $message; ?>

                <input type="email" name="email" placeholder="Mobile Number or Email">

                <input type="text" name="fullname" placeholder="Full Name">

                <input type="text" name="username" placeholder="Username">

                <input type="password" name="password" placeholder="Password">

                <button type="submit" name="submit">Sign Up</button>

                <p>By signing up, you agree to our</p>

                <p>Terms, Data policy and Cookies</p>

                <p>Policy.</p>

            </div>

        </form>

    </div>

    <div class="instagram-bottom-container">

        <h4>Have an account? <a href="signin.php" style="text-decoration:none; color:#3897f0;">Log In</a></h4>

    </div>


</body>

</html>