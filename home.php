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
    <video loop muted playsinline src="city1 (2).mp4"preload="auto" ></video>
    <video loop muted playsinline src="tajmahal (1).mp4"preload="auto"></video>
    <video loop muted playsinline src="sol.mp4" preload="auto"></video>
    <video loop muted playsinline src="city1 (1).mp4" preload="auto"></video>
    <video loop muted playsinline src="gwoc.mp4" preload="auto"></video>
    <video loop muted playsinline src="News.mp4" preload="auto"></video>
    
    </div>

    
          

        
            <!-- <img src="logo1.png" alt="logo" id="logo">
            
           <button id="login">LOGIN</button> -->
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
          <div id="searching">
            <input type="text" id="searchInput" placeholder="Search...">
            <button id="searchBtn">Search</button> 
         </div>  
          <p id="headingpage"><b>BLOG</b></p>
  </header>

  
  

  <main>
    <section id="blog">
                
        <div class="blog-container">

          <div class="blog-box">

            <div class="blog-video">
              <video autoplay loop muted playsinline src="tajmahal (1).mp4"></video>
            </div>
        
            <div class="blog-text">
                <span>November 16, 2023 / Japan</span>
                <p class="blog-title">Title: "Taj Mahal: Elegance Carved in Marble"</p>
                <p>   
                
              
                Nestled on the banks of the Yamuna River in Agra, India, the Taj Mahal stands as an architectural masterpiece, a testament to love and beauty. This iconic monument, designated as a UNESCO World Heritage Site, continues to captivate the world.</p>
                <button id="tm">Read More</button>
            </div> 
        
        </div>

            <div class="blog-box">
        
                <div class="blog-img">
                    <img src="delhi.jpg" alt="news">
                </div>
        
                <div class="blog-text">
                    <span>November 19, 2023 / Delhi</span>
                    <p class="blog-title">Discovering Delhi: A Tapestry of Heritage and Modernity</p>
                    <p>Introduction
                      Delhi, the bustling capital of India, stands as a testament to the country's rich history and its rapid evolution into a modern metropolis. </p><br><br>
                    <button id="delhibutton"><a href="delhi.html" style="text-decoration: none; color: aliceblue;">Read More</a></button>
                </div>
        
            </div>
        
            <div class="blog-box">
        
                <div class="blog-img">
                    <img alt="news" src="lahore.png.jpg">
                </div>
        
                <div class="blog-text">
                    <span>November 18, 2023 / Lahore</span>
                    <p class="blog-title">Exploring the Enigmatic Charm of Lahore</p>
                    
                    <p>Nestled along the banks of the Ravi River lies the cultural heart of Pakistan - Lahore. This vibrant city, steeped in history, resonates with a kaleidoscope of colors, sounds, and flavors that captivate every visitor.</p><br>
                    <button id="lahorebutton"><a href="lahore.html" style="text-decoration: none; color: aliceblue;">Read More</a></button>
                </div>
        
            </div>
        
            <div class="blog-box">
        
                <div class="blog-img">
                    <img alt="news" src="vietnam.png">
                </div>
        
                <div class="blog-text">
                    <span>November 17, 2023 / Vietnam</span>

                    <p class="blog-title">Title: "Vietnam Odyssey: Exploring the Allure of Timeless Landscapes"</p>

                    <p>Introduction:
                      Welcome to Vietnam, a mesmerizing tapestry of natural wonders, ancient traditions. Join us on a virtual journey as we uncover the beauty of this captivating Southeast Asian gem.</p>
                    <button id="vietnambutton">Read More</button>
                </div>
        
            </div>
        
        
        
        <div class="blog-box">

            <div class="blog-img">
                <img alt="news" src="japan.png">
            </div>
        
            <div class="blog-text">
                <span>November 16, 2023 / Japan</span>
                <p class="blog-title">Title: "Land of the Rising Sun: A Sojourn Through Japan's Magnificence"</p>
                <p>Introduction:
                  Welcome to Japan, a country where tradition meets modernity in a harmonious blend. Join us as we traverse this captivating archipelago, unveiling its diverse tapestry of ancient traditions, cutting-edge technology, serene landscapes, and vibrant cityscapes.</p>
                <button id="japanbutton">Read More</button>
            </div>
        
        </div>
        
        <div class="blog-box">
        
            <div class="blog-img">
                <img alt="news" src="china.png">
            </div>
        
            <div class="blog-text">
                <span>November 15, 2023 / China</span>
                <p class="blog-title">Title: "A Passage Through Time: Unveiling China's Mystique"</p>
                <p>Introduction:
                  Welcome to the enigmatic land of China, a realm where ancient history harmonizes with modern innovation, offering a profound and mesmerizing travel experience. Of this captivating country.Join us as we unravel the diverse wonders of this captivating country.</p>
                <button id="chinabutton">Read More</button>
            </div>
        
        </div>
        
        <div class="blog-box">
        
            <div class="blog-img">
                <img alt="news" src="london.png">
            </div><br>
        
            <div class="blog-text">
                <span>November 11, 2023 / London</span>
                <p class="blog-title">Title: "London Unveiled: A Journey Through Time, Culture, and Modern Marvels"</p>
                <p>Introduction:
                  Welcome to London, a vibrant metropolis where history seamlessly blends with contemporary allure. Join us on a virtual tour as we uncover the charm, heritage, and cultural riches of this iconic city.</p>
                <button id="londonbutton">Read More</button>
            </div>
        
        </div>

        <div class="blog-box">
        
          <div class="blog-video">
            <video autoplay loop muted playsinline src="sol.mp4"></video>
          </div>
  
          <div class="blog-text">
              <span>November 19, 2023 / Statue of Liberty</span>
              <p class="blog-title">Title: "Statue of Liberty: Symbol of Freedom and Hope"</p>
              <p>Standing tall and proud in New York Harbor, the Statue of Liberty stands as an enduring symbol of liberty, democracy, and the American spirit. This iconic monument has welcomed millions of immigrants to the United States and continues to inspire people worldwide. </p>
              <button id="sol">Read More</button>
          </div>
  
      </div>
  
      <div class="blog-box">
  
          <div class="blog-video">
            <video autoplay loop muted playsinline src="gwoc.mp4"></video>
          </div>
  
          <div class="blog-text">
              <span>November 18, 2023 / Petra</span>
              <p class="blog-title">Title: "The Great Wall of China: A Monument to History "</p>
              
              <p>Spanning thousands of miles across the undulating terrain of China, the Great Wall stands as a testament to human ingenuity and determination. This iconic structure, with its rich history and breathtaking views, remains a beacon of China's cultural heritage and a wonder of the world.</p>
              <button id="gwoc">Read More</button>
          </div>
  
      </div>
  
      <div class="blog-box">
  
          <div class="blog-video">
            <video autoplay loop muted playsinline src="petra.mp4"></video>
          </div>
  
          <div class="blog-text">
              <span>November 17, 2023 / Vietnam</span><br>

              <p class="blog-title">Title: " Discovering Petra: Jordan's Ancient Marvel"</p>

              <p>Nestled amidst the rugged desert terrain of Jordan lies an archaeological treasure steeped in history and wonder - Petra, an ancient city carved into rose-red cliffs, captivates all who behold its grandeur.Petra, an ancient city carved into rose-red cliffs, captivates all who behold its grandeur.</p>
              <button id="petra">Read More</button>
          </div>
  
      </div>
    
  <div class="blog-box">
  
      <div class="blog-video">
        <video autoplay loop muted playsinline src="roman.mp4"></video>
      </div>
  
      <div class="blog-text">
          <span>November 11, 2023 / London</span>
          <p class="blog-title">Title: "The Enchanting Baths of Caracalla: A Glimpse into Ancient Luxury"</p>
          <p>
            
        </h3>

          Nestled in the heart of ancient Rome lies a marvel of architectural splendor and opulence—the Baths of Caracalla. This monumental complex, built between AD 212 and 216, stands as a testament to Roman engineering and the pursuit of leisure and luxury.</p>
          <button id="roman">Read More</button>
      </div>
  
  </div>

  <div class="blog-box">
                  
    <div class="blog-img">
        <img src="news1.png" alt="news">
    </div>

    <div class="blog-text">
        <span>November 19, 2023 / World News</span><br>
        <p class="blog-title">Breakthrough in Renewable Energy Sources</p>
        <p>A significant breakthrough in renewable energy sources promises to revolutionize the way we generate electricity, providing cleaner and more sustainable power globally.</p><br><br>
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
    <p>New findings in cancer research showcase promising advancements in treatment options, offering hope for improved outcomes and therapies, offering hope for improved outcomes and therapies</p>
    <button id="button4">Read More</button>
</div>

</div>

<div class="blog-box">

<div class="blog-img">
    <img alt="news" src="news5.png">
</div>

<div class="blog-text">
    <span>November 15, 2023 / Space Exploration</span><br>
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
      <a href="aboutus.php" id="about">About Us</a>
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
