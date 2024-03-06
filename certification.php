<?php
include("navbar.html");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Course Selection</title>
  

  <style>
  	.container3{
	  	max-width: 100%;
	    padding: 40px;
	    margin: 200px;
	    text-align: center;
	    background-color: #fff;
	    border-radius: 10px;
	    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  	}
  	
  </style>
</head>

<body>

  <div class="container3">
    <h2>Select Cource for Certification</h2>
    <br>
    <div class="row mt-4">
      <div class="col-md-6">
        <label for="courseSelect">Select a course:</label>
        <select class="form-control">
          <option value="course1">Select a cource</option>
          <option value="course1">Web Development</option>
          <option value="course2">Freelancing</option>
          <option value="course3">Worldpress</option>
          <option value="course3">Content Writing</option>
          <option value="course3">Amazon Web Services</option>
          <option value="course3">Full Stack Web Developer</option>
          <option value="course3">Software Testing</option>
          <option value="course3">Professional Writing</option>
          <option value="course3">Graphic Designer</option>
          <option value="course3">Video Editing</option>
          <option value="course3">SEO</option>
        </select>
      </div>
      <div>
        <a href="quiz.php" class="btn btn-success">Start Exam</a>
        <p class="text-danger" style="font-size: 14px;" > Exam Warning! Once you started the exam do not press back button.</p>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
