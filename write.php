<?php

session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    if (isset($_POST["submit"])) {
        $servername = "localhost";
        $username = "root";
        $db_password = "";
        $database = "blog";
    
        
        $title = $_POST["title"];
        $imgLink = $_POST["imgLink"];
        $description = $_POST["description"];
        $blogtype = $_POST["blogType"];
    
        
        if (empty($title) || empty($imgLink) || empty($description) || empty($blogtype)) {
            echo "<script>alert('Please fill in all fields.')</script>";
        } else {
            $connect = mysqli_connect($servername, $username, $db_password, $database);
            if (!$connect) {
                die("Connection Failed:" . mysqli_connect_error());
            }
    
            $stmt = $connect->prepare("INSERT INTO personalblogs (title, imgLink, description, blogtype) VALUES (?, ?, ?, ?)");
            if ($stmt) {
                $stmt->bind_param("ssss", $title, $imgLink, $description, $blogtype);
                
                if ($stmt->execute()) {
                    echo "<script>alert('Record inserted successfully')</script>";
                    
                } else {
                    echo "Error: " . $stmt->error;
                }
                
                $stmt->close();
            } else {
                echo "<script>alert('Error preparing statement.')</script>";
            }
            
            $connect->close();
        }
    }
} else {
    // Display login message if not logged in
    echo '<div style="display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: column; font-family: Poppins, sans-serif;" >';
    echo '<p style = "font-size:25px"> PLEASE LOGIN TO WRITE BLOG </p>'.'<br>'.'<br>';
    echo '<a href="login.php"><button id="login" style=" background-color: #715CF8;
    color: white;
    border: none;
    width: 100px;
    height: 40px;
    padding: 5px;
    border-radius: 8px;
    cursor: pointer;
    font-family: Poppins, sans-serif;
    font-size: 22px;
    font-weight: 600;">LOGIN</button></a>';
    echo '</div>';
    exit;
}



?>
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


    <form style="width: 80%;" method="post" id="divform" action="write.php">
        <h1 style="text-align: center; font-size: 40px;" id='signup' >Write Your Blog</h1>

        <label for="blogType">Select Blog Type:</label><br>
        <select style="margin-bottom: 10px; height:38px;   border-radius:20px; " name="blogType" id="blogType">
        <option value="travel">Travel Blog</option>
        <option value="news">News Blog</option>
        <option value="city">City Blog</option>
        <option value="city">Other</option>
        </select>
        
        <label style="margin-bottom: 10px;" for="title">Title</label>
        <input type="text" id="title" name="title">
        <label style="margin-bottom: 10px;" for="imgLink">Image Link</label>
        <input type="text" id="imgLink" name="imgLink">
        <label style="margin-bottom: 10px;" for="description">Description</label>
        <textarea name="description" id="" cols="30" id="description" rows="10"></textarea>
        
        <button style="margin-top: 10px;" type="submit" name="submit" id="signupbutton">Submit</button>
    </form>

    

</body>



</html>
