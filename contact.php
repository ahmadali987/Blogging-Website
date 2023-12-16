<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="global.css">
    <script src="global.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
      body{
        margin: 0;
        padding: 0;

      }
  #contact {
    width: 300px;
     margin: 100px auto; 
    background-color: #ffffff;
    padding: 20px;
    border-radius: 17px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transform: translate(-50,-50);
    text-align: center;
}

#contact h2 {
  margin-bottom: 15px;
  font-size: 30px;
   font-weight: bolder;
  color: #715CF8;
  font-family: 'Poppins', sans-serif;
}

#contact p {
  margin-bottom: 20px;
  font-size: 16px;
  color: #666;
  font-family: 'Poppins', sans-serif;
}

input{
    width: 90%;
    padding: 10px;
    margin-bottom: 30px;
    margin-top: 3px;
    margin-left: -20px;
    border: 1px solid #ccc;
    border-radius: 50px;
    background-color: #f9f9f9;
    font-family: 'Poppins', sans-serif;
}

#sendmessagebutton {
  background-color: #715CF8;
  font-family: 'Poppins', sans-serif;
    color: white;
    border: none;
    width: 60%;
    height: auto;
    padding: 10px;
    border-radius: 10px;
    cursor: pointer;
    font-size: 20px;
    font-weight: bolder;
}


@media screen and (max-width:900px){

#contact{
    top: 60px;
}

}


@media screen and (max-width:700px){

  #contactusform button {
    font-size: 15px;
    font-weight:400;
    width: 50%;
  }
}

@media screen and (max-width:450px){
  
  #contactusform button {
    font-size: 15px;
    font-weight:400;
    width: 50%;
  }
}

#contactusform button:hover {
  background-color: rgb(60, 33, 240);
}
    </style>
</head>
<body>
  <img src="logo1.png" alt="logo" id="logo">
  <div class="background-video">
    <video autoplay loop muted playsinline src="video.mp4"></video>
</div>
    <div id="contact"><br><br>
        <h2>Contact Us</h2><br>
        <p>Reach out to us for inquiries or collaborations.</p><br><br>
      
        <form id="contactusform" method="POST" action="" >
          <input type="text" id="name" name="name" placeholder="Enter Your Name" required><br>
          <input type="email" id="email" name="email" placeholder="Enter Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Enter a valid email address" required><br>
          <input type="text" id="message" name="message" placeholder="Message" pattern=".{10,}" title="Please enter at least 10 characters" required><br><br><br>
          <button id="sendmessagebutton" name="sendmessagebutton">Send Message</button>
        </form>
      </div><br>
</body>
</html>

<?php
if(isset($_POST["sendmessagebutton"])){
$servername = "localhost";
$username = "root";
$db_password = "";
$database = "contactus";

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

  $connect = mysqli_connect($servername,$username,$db_password,$database);

  if(!$connect){
    die("Connection Failed:".mysqli_connect_error());
  }

  $sql = "INSERT INTO contact(Name,Emial,message) VALUES ('$name ','$email','$message')";

  if (mysqli_query($connect, $sql)) {
    echo "Record inserted successfully";
  } else {
    echo "Error: " . mysqli_error($connect);
  }

  mysqli_close($connect);
  echo 'hello';

}

?>