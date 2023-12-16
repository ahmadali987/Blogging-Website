<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insightful Vibes: About Us</title>
  <link rel="stylesheet" href="aboutus.css">
  <link rel="stylesheet" href="home.css">
  <script>
   document.addEventListener("DOMContentLoaded", function() {

    document.getElementById('login').addEventListener('click', function() {
      window.location.href = 'login.html';
  });

  
  document.getElementById('logo').addEventListener('click', function() {
    window.location.href = 'home.php';
  });
  
});

document.addEventListener("DOMContentLoaded", function() {
    const videos = document.querySelectorAll('.video-container video');
    let currentVideoIndex = 0;

    function showNextVideo() {
      videos[currentVideoIndex].classList.remove('active');
      videos[currentVideoIndex].pause();

      currentVideoIndex = (currentVideoIndex + 1) % videos.length;

      videos[currentVideoIndex].classList.add('active');
      videos[currentVideoIndex].play();
    }

    function playNextVideoOnEnd() {
      videos[currentVideoIndex].addEventListener('ended', function() {
        showNextVideo();
      });
    }

    showNextVideo(); 
    playNextVideoOnEnd(); 

    
    setInterval(showNextVideo, 10000);
  });



  </script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

</head>
<body>
  <header>

    <div class="video-container">
    <video autoplay loop muted playsinline src="aboutus.mp4" preload="auto"></video>
    </div>
    
            
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
      <li><a href="aboutus.html" id="about2">About</a></li>
      <li><a href="contact.php" id="contact2">Contact</a></li>
      <li><a href="write.php" style="color: white;text-decoration: none; "> <Span>&#9998;</Span></a></li>
    </ul>
          </nav>
          <p id="headingpage"><b>ABOUT US</b></p>
        
        
    
  </header>

  <main id="aboutusmain">
    
    <section class="mission">
      <h2>Our Mission</h2>
      <p>At Insightful Vibes, we're passionate about [topic/subject]. Our platform is a space where [describe the purpose of your blog - e.g., we share insights, stories, and tips about...].</p>
      <p>Our mission is to [state your mission/goal - e.g., inspire, educate, and entertain our readers by providing valuable content that...].</p>
    </section>

    <section class="what-we-offer">
      <h2>What We Offer</h2>
      <ul>
        <li>Insightful Articles: Dive into a collection of articles that cover [list the topics/niches you focus on].</li>
        <li>Engaging Stories: Explore narratives that resonate with [your target audience].</li>
        <li>Practical Tips: Discover actionable tips and advice to [benefit your readers].</li>
      </ul>
    </section>

    <section class="our-team">
      <h2>Our Team</h2>
      <ul>
        <li>
          <h3>Ahmad Ali</h3>
          <p>Your role and a brief description about yourself...</p>
        </li>
        <li>
          <h3>Muneeb Ur Rehman</h3>
          <p>Their role and a brief description about themselves...</p>
        </li>
        <li>
          <h3>Bilal Butt</h3>
          <p>Their role and a brief description about themselves...</p>
        </li>
        
      </ul>
    </section>

    <section class="join-community">
      <h2>Join Our Community</h2>
      <p>We believe in fostering a community where [mention the type of community you aim to create - e.g., discussions, interactions, learning, etc.]. Join us on [social media platforms] to stay updated and engage with like-minded individuals.</p>
    </section>

    <section class="contact-us">
      <h2>Contact Us</h2>
      <p>Have a question or suggestion? Feel free to reach out to us at [contact email or form]. We value your feedback and are always excited to hear from our readers.</p>
    </section>
  </main>

<footer>
  <div class="footer-content">
    <div class="footer-section">
      <p>Contact Us</p>
      <p>Email: contact@example.com</p>
      <p>Phone: 123-456-7890</p>
    </div>
    <div class="footer-section">
      <a href="aboutus.html" id="about">About Us</a>
      <p>We are dedicated to...</p>
    </div>
    <div class="footer-section">
      <p>Links</p>
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
