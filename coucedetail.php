<?php
  include("navbar.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Course Platform</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      padding-top: 60px; 
    }
  </style>
</head>
<body>
  

  <!-- Content -->
  <div class="container mt-5">
    <h2>Welcome to the "Language Experts" Course</h2>

    <!-- Video Modules -->
    <div class="card-deck mt-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Module 1</h5>
          <p class="card-text">Intorduction to the Language</p>
          <button class="btn btn-success" onclick="playVideo('https://www.youtube.com/watch?v=qYsHLUAlH_8')">Watch Video</button>
        </div>
      </div>
      </div>

     <div class="card-deck mt-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Module 2</h5>
          <p class="card-text">Learning the key components of langauge.</p>
          <button class="btn btn-success" onclick="playVideo('video1.mp4')">Watch Video</button>
        </div>
      </div>
      </div>

    <div class="card-deck mt-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Module 3</h5>
          <p class="card-text">Learn how to start conversation.</p>
          <button class="btn btn-success" onclick="playVideo('video1.mp4')">Watch Video</button>
        </div>
      </div>
    </div>

    <div class="card-deck mt-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Module 4</h5>
          <p class="card-text">Learn how to start conversation.</p>
          <button class="btn btn-success" onclick="playVideo('video1.mp4')">Watch Video</button>
        </div>
      </div>
    </div>

    <div class="card-deck mt-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Module 5</h5>
          <p class="card-text">Learn how to start conversation.</p>
          <button class="btn btn-success" onclick="playVideo('video1.mp4')">Watch Video</button>
        </div>
      </div>
    </div>

    <!-- Video Player Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="videoModalLabel">Video Title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Video player iframe or HTML5 video tag goes here -->
            <iframe width="100%" height="415" src="" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Custom JavaScript -->
  <script>
    function playVideo(videoSource) {
      // Set the video source dynamically
      document.getElementById('videoModal').querySelector('iframe').src = videoSource;
      // Show the modal
      $('#videoModal').modal('show');
    }

    // Pause the video when the modal is closed
    $('#videoModal').on('hidden.bs.modal', function (e) {
      document.getElementById('videoModal').querySelector('iframe').src = 'https://www.youtube.com/watch?v=qYsHLUAlH_8';
    });
  </script>
</body>
</html>
