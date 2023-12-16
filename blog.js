document.addEventListener("DOMContentLoaded", function() {
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
  
    document.getElementById('login').addEventListener('click', function() {
      window.location.href = 'login.html';
    });

      // document.getElementById('blog2').addEventListener('click', function() {
      //   window.location.href = 'blog.html';
      // });

      document.getElementById('contact2').addEventListener('click', function() {
        window.location.href = 'contact.html';
      });

      document.getElementById('logo').addEventListener('click', function() {
        window.location.href = 'home.html';
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