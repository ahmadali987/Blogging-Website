<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insightful Vibes: Log in</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="global.css">
    <!-- <script src="home.js"></script> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
   <a href="home.php"> <img src="logo1.png" alt="logo" id="logo"></a>
    <div class="background-video">
        <video autoplay loop muted playsinline src="video.mp4"></video>
    </div>

             
    <div id="div1" class="content">

        <form id="form1" action="" method="post">
<br><br>
            <p id="p1">LOGIN</p>

            <p id="p2">Sign in to Continue</p><br><br>
            
            <!-- <label for="name">Please enter Email</label><br><br> -->
            <input type="email" id="name" placeholder="Enter Your Email" name="email" required><br>

            <!-- <label for="password">Please enter Password</label><br><br> -->
            <input type="password" id="password" placeholder="Enter Your Password" name="password" required><br>
             <p id="p3">Create New Account? <a href="signup.php" style="text-decoration: none;"><span id="register" >Register</span></a> </p>
             
            <button id="submit" name="submit">LOGIN</button>

        </form>


    </div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var form2 = document.getElementById('form1');
        
        document.getElementById("form1").addEventListener('submit', function(event) {
            event.preventDefault();
            let name = document.getElementById("name").value;
            let password = document.getElementById("password").value;

            if (name === '' || password === '') {
                alert("Please fill out all fields.");
            } else {
                reset();
            }
        });

        document.getElementById('register').addEventListener('click', function() {
            window.location.href = 'signup.php';
        });
    });

    .success-message {
        color: green;
        
    }

    .error-message {
        color: red;
    }


</script>

</body>
</html>


<?php
session_start();

if(isset($_POST["submit"])) {
    $servername = "localhost";
    $username = "root";
    $db_password = "";
    $database = "projectsignup";

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $connect = mysqli_connect($servername, $username, $db_password, $database);

    if(!$connect) {
        die("Connection Error: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM signup WHERE User_Email = '$email' AND User_Password = '$pass'";
    $result = mysqli_query($connect, $sql);

    if($result) {
        if(mysqli_num_rows($result) > 0) {
            echo "<script>alert('Successfully Logged In')</script>";
            $_SESSION['loggedin'] = true; 
            $_SESSION['email'] = $email; 
            header("Location: home.php");
            exit(); 
        } else {
            echo "<script>alert('Login Failed: Incorrect email or password')</script>";
            
        }
    } else {
        echo "Error: " . mysqli_error($connect);
    }

    mysqli_close($connect);
}


if(isset($_GET['logout'])) {
    session_unset(); 
    session_destroy(); 
    header("Location: login.php"); 
    exit();
}
?>
