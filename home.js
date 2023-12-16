document.addEventListener("DOMContentLoaded", function() {
  
    document.getElementById('vietnambutton').addEventListener('click', function() {
      window.location.href = 'vietnam.html';
    });

    document.getElementById('login').addEventListener('click', function() {
      window.location.href = 'login.php';
    });

    document.getElementById('japanbutton').addEventListener('click', function() {
      window.location.href = 'japan.html';
    });
  
    document.getElementById('chinabutton').addEventListener('click', function() {
      window.location.href = 'china.html';
    });
  
    document.getElementById('londonbutton').addEventListener('click', function() {
      window.location.href = 'london.html';});

 
    
    document.getElementById('logo').addEventListener('click', function() {
      window.location.href = 'home.php';
    });

    document.getElementById('gwoc').addEventListener('click', function() {
      window.location.href = 'gwoc.html';
    });
  
    document.getElementById('petra').addEventListener('click', function() {
      window.location.href = 'petra.html';
    });
  
    document.getElementById('roman').addEventListener('click', function() {
      window.location.href = 'roman.html';
    });
  
    document.getElementById('sol').addEventListener('click', function() {
      window.location.href = 'sol.html';
    });
  
    document.getElementById('tm').addEventListener('click', function() {
      window.location.href = 'tajmahal.html';
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

  document.addEventListener('DOMContentLoaded', function() {
   
    function handleSearch() {
      const searchInput = document.getElementById('searchInput').value.toLowerCase();
      
      
      const blogPages = {
  'travel': 'blog.php', 
  'travel blogs': 'blog.php', 
  'travel blog': 'blog.php', 
  'taj mahal blog': 'tajmahal.php', 
  'petra blog' :'blog.php', 
  'city': 'cityblogs.php',
  'news blog': 'newsblogs.php',
  'news': 'newsblogs.php',
  'city blog': 'cityblogs.php',
  'journey': 'blog.php',
  'urban': 'cityblogs.php',
  'latest news': 'newsblogs.php',
  
  'explore': 'blog.php',
  'voyage': 'blog.htphpml',
  'tour': 'blog.php',
  'trip': 'blog.php',
  
  'metropolis': 'cityblogs.php',
  'town': 'cityblogs.php',
  'urban area': 'cityblogs.php',
  'municipality': 'cityblogs.php',
  
  'current events': 'newsblogs.php',
  'headlines': 'newsblogs.php',
  'information': 'newsblogs.php',
  'latest blog': 'personalblog.php',
  'latest blogs': 'personalblog.php',
      };
  
      
      if (blogPages.hasOwnProperty(searchInput)) {
        const pageURL = blogPages[searchInput];
        window.location.href = pageURL; 
      } else {
        
        alert('No matching blog found.');
        
      }
    }
  
    
    document.getElementById('searchBtn').addEventListener('click', handleSearch);
  
    
    document.getElementById('searchInput').addEventListener('keypress', function(event) {
      if (event.key === 'Enter') {
        handleSearch();
      }
    });
  });
  
  
  // document.addEventListener("DOMContentLoaded", function() {
  //   const menuButton = document.getElementById('menu-toggle');
  //   const menu = document.getElementById('show-menue');
  
  //   window.addEventListener('scroll', function() {
  //     if (window.scrollY >= 550) {
  //       menu.classList.remove('menu-toggle');
  //     } else {
  //       menu.classList.add('menu-toggle');
  //     }
  //   });
  // });
  