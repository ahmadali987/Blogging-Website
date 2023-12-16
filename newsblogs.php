<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Section</title>
    <script src="home.js"></script>


    <link rel="stylesheet" href="home.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- <script src="global.js"></script> -->
   
        </head>
        <body>
            
            <header>

                <div class="video-container">
                <video autoplay loop muted playsinline src="News.mp4" preload="auto"></video> 
                </div>
            
                
                    
                      
                      <nav>
                        <img src="logo1.png" alt="logo" id="logo">
                
                    
           <?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    
    echo '<a href="logout.php"><button id="login" >LOGOUT</button></a>';
} 
else {
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
                      <p id="headingpage"><b>NEWS BLOG</b></p>
                    
                    
                
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

        $sql = "SELECT * FROM personalblogs WHERE blogtype = 'news'";
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
            
                      <div class="blog-box">
                  
                          <div class="blog-img">
                              <img src="news1.png" alt="news">
                          </div>
                  
                          <div class="blog-text">
                              <span>November 19, 2023 / World News</span>
                              <p class="blog-title">Breakthrough in Renewable Energy Sources</p>
                              <p>A significant breakthrough in renewable energy sources promises to revolutionize the way we generate electricity, providing cleaner and more sustainable power globally.</p>
                              <button id="button1">Read More</button>
                          </div>
                  
                      </div>
                  
                      <div class="blog-box">
                  
                          <div class="blog-img">
                              <img alt="news" src="news2.png">
                          </div>
                  
                          <div class="blog-text">
                              <span>November 18, 2023 / Global Technology</span>
                              <p class="blog-title">Advancements in Artificial Intelligence Transforming Industries</p>
                              
                              <p>Recent AI advancements are reshaping industries, from healthcare to finance, offering unprecedented opportunities and efficiencies.</p>
                              <button id="button2">Read More</button>
                          </div>
                  
                      </div>
                  
                      <div class="blog-box">
                  
                          <div class="blog-img">
                              <img alt="news" src="news3.png">
                          </div>
                  
                          <div class="blog-text">
                              <span>November 17, 2023 / Environmental Impact</span>
            
                              <p class="blog-title">Global Efforts to Combat Climate Change</p>
            
                              <p>Nations worldwide are intensifying efforts and commitments to combat climate change, aiming to achieve significant reductions in carbon emissions by the end of the decade.</p>
                              <button id="button3">Read More</button>
                          </div>
                  
                      </div>
                  
                  
                  
                  <div class="blog-box">
            
                      <div class="blog-img">
                          <img alt="news" src="news4.png">
                      </div>
                  
                      <div class="blog-text">
                          <span>November 16, 2023 / Health & Wellness</span>
                          <p class="blog-title">Breakthrough in Cancer Research</p>
                          <p>New findings in cancer research showcase promising advancements in treatment options, offering hope for improved outcomes and therapies.</p>
                          <button id="button4">Read More</button>
                      </div>
                  
                  </div>
                  
                  <div class="blog-box">
                  
                      <div class="blog-img">
                          <img alt="news" src="news5.png">
                      </div>
                  
                      <div class="blog-text">
                          <span>November 15, 2023 / Space Exploration</span>
                          <p class="blog-title">Mars Rover Discoveries Unveiled</p>
                          <p>Latest findings from Mars rover missions reveal intriguing discoveries about the Red Planet's geology and history, sparking new questions and possibilities for exploration.</p>
                          <button id="button5">Read More</button>
                      </div>
                  
                  </div>
                  
                  <div class="blog-box">
                  
                      <div class="blog-img">
                          <img alt="news" src="news6.png">
                      </div>
                  
                      <div class="blog-text">
                          <span>November 14, 2023 / Business & Economy</span>
                          <p class="blog-title">Global Economic Summit Concludes</p>
                          <p>The Global Economic Summit concluded with discussions on key strategies to foster international trade and economic growth in a rapidly evolving landscape.</p>
                          <button id="button6">Read More</button>
                      </div>
                  
                  </div>
            
              </div> 
              
            </section>  
            
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

            <script>
                document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('logo').addEventListener('click', function() {
              window.location.href = 'home.php';
            });
        
            document.getElementById('button1').addEventListener('click', function() {
              window.location.href = 'news1.html';
            });
        
            document.getElementById('button2').addEventListener('click', function() {
              window.location.href = 'news2.html';
            });
        
            document.getElementById('button3').addEventListener('click', function() {
              window.location.href = 'news3.html';
            });
        
            document.getElementById('button4').addEventListener('click', function() {
              window.location.href = 'news4.html';
            });
        
            document.getElementById('button5').addEventListener('click', function() {
              window.location.href = 'news5.html';
            });
        
            document.getElementById('button6').addEventListener('click', function() {
              window.location.href = 'news6.html';
            });


            document.getElementById('contact2').addEventListener('click', function() {
        window.location.href = 'contact.html';
      });

      document.getElementById('login').addEventListener('click', function() {
      window.location.href = 'login.html';
    });
          
            });
            </script>
          
                          
        </body>
    </html>