<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insightful Vibes</title>
  <link rel="stylesheet" href="home.css">
  <script src="home.js"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

</head>

<body>
  <header>

    <div class="video-container">
      <video autoplay loop muted playsinline src="petra.mp4" preload="auto"></video>
      <video loop muted playsinline src="tajmahal (1).mp4" preload="auto"></video>
      <video loop muted playsinline src="sol.mp4" preload="auto"></video>
      <video loop muted playsinline src="travel.mp4" preload="auto"></video>
      <video loop muted playsinline src="gwoc.mp4" preload="auto"></video>
      <video loop muted playsinline src="roman.mp4" preload="auto"></video>

    </div>


    <header>

      <nav>
        <img src="logo1.png" alt="logo" id="logo">

        
        <?php
session_start();


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    
    echo '<a href="logout.php"><button id="login" >LOGOUT</button></a>';
} else {
    
  echo '<a href="login.php"><button id="login" >LOGIN</button></a>';
}
?>
        <ul >
              <li><a href="home.php" id="home2">Home</a></li>
              <li>
                <a href="#Blog" id="blog2">Blog</a>
                <ul>
                  <li><a href="newsblogs.php" id="news"> News Blogs</a></li>
                  <li><a href="cityblogs.php" id="city">Cities Blog</a></li>
                  <li><a href="blog.php" id="travel">Travel Blog</a></li>
                  <li><a href="personalblog.php" id="personal">Personal Blog</a></li>
                </ul>
              </li>
              <li><a href="aboutus.php" id="about2">About</a></li>
              <li><a href="contact.php" id="contact2">Contact</a></li>
              <li><a href="write.php" style="color: white;text-decoration: none; "> <Span>&#9998;</Span></a></li>
            </ul>
      </nav>
      <p id="headingpage">
        <b>PERSONAL BLOGS</b>
      </p>

    </header>


  </header>

  <main>
    <section id="blog">

      <div class="blog-container">
        <?php
        $servername = "localhost";
        $username = "root";
        $db_password = "";
        $database = "blog";

        $connect = mysqli_connect($servername, $username, $db_password, $database);
        if (!$connect) {
          die("Connection Failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM personalblogs";
        $result = mysqli_query($connect, $sql);

        if ($result) {
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<div class="blog-box">
                      <div class="blog-video">
                        <img style="width: 100%;" height="200" src="' . $row["imgLink"] . '" alt="blog" id="blogimg">
                      </div>
                      <div class="blog-text">
                        <span>November 16, 2023 / Japan</span><br>
                        <p class="blog-title">' . $row["title"] . '</p>
                        <p>' . substr($row["description"], 0, 200) . '</p>
                        <a href="view-blog.php?blogId=' . $row["id"] . ' " id="tm"><button id="button1">Read More</button></a>
                      </div>
                    </div>';
            }
          }
        }

        mysqli_close($connect);
        ?>
      </div>
    </section>
  </main>
  <footer>
    <div class="footer-content">
      <div class="footer-section">
        <h3>Contact Us</h3>
        <p>Email: contact@example.com</p>
        <p>Phone: 123-456-7890</p>
      </div>
      <div class="footer-section">
        <a href="aboutus.html" id="about">About Us</a>
        <p>We are dedicated to...</p>
      </div>
      <div class="footer-section">
        <h3>Links</h3>
        <ul id="footerul">
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">FAQ</a></li>
        </ul>
      </div>
    </div>
  </footer>


</body>




</html>