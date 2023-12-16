<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insightful Vibes - Sign Up</title>
  <link rel="stylesheet" href="signup.css">
  <link rel="stylesheet" href="global.css">
  <script src="global.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
  <img src="logo1.png" alt="logo" id="logo">
  <div class="background-video">
    <video autoplay loop muted playsinline src="video.mp4"></video>
  </div>
  
  <div id="divform">
    <div>
      <p id="signup">SIGN UP </p>
      <form id="signupform" action="" method="post">
        <input type="text" id="firstname" placeholder="First Name" name="fname" required><br>
        <input type="text" id="lastname" placeholder="Last Name" name="lname" required><br>
        <input type="email" id="email" placeholder="Email Address" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Enter a valid email address" required><br>
        <input type="password" id="password" placeholder="Password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters" required><br>
        <button id="signupbutton" name="submit">Sign Up</button>
      </form>
    </div>

    <div class="login-options">
      <p>Or sign up using?</p>
      <button id="facebook-login">Facebook</button>
      <button id="google-login">Google</button>
    </div>
  </div>

  <!-- <footer>
    <p>&copy; 2023 Insightful Vibes. All rights reserved.</p>
  </footer> -->
</body>
</html>

<?php
if(isset($_POST["submit"])){
    $servername = "localhost";
    $username = "root";
    $db_password = "";
    $database = "projectsignup";

    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $pass = $_POST["pass"];
    $email = $_POST["email"];

    
    if(empty($firstname) || empty($lastname) || empty($pass) || empty($email)) {
        echo '<script>alert("Please fill in all fields.")</script>';
    } else {
        $connect = mysqli_connect($servername, $username, $db_password, $database);

        if(!$connect){
            die("Connection Failed:".mysqli_connect_error());
        }

        $sql = "INSERT INTO signup(First_Name, Last_Name, User_Email, User_Password) VALUES ('$firstname', '$lastname', '$email', '$pass')";

        if (mysqli_query($connect, $sql)) {
            echo '<script>alert("Successfully Signed Up")</script>';
        } else {
            echo "Error: " . mysqli_error($connect);
        }

        mysqli_close($connect);
    }
}
?>
