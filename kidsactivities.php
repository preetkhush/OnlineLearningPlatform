<?php
include("navbar.html");
?>


<!DOCTYPE html>
<html>
<head>
    <title>Kids Activities</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/cources.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    

</head>

<body>
   <!--Heade -->

    <div class="slider-container">
        <div class="slider-image active" style="background-image: url('images/kids.jpg');"></div>
    </div>

    <!--Header Bottom Banner -->
    
    <div class="container-fluid bg-danger txt-banner">
        <div class="row bottom-banner">
            <div class="col-sm">
                <h6><i class="fas fa-book-open mr-3"></i>Free Online Cources</h6>
            </div>
            <div class="col-sm">
                <h6><i class="fas fa-users mr-3"></i>Expert Instructor </h6>
            </div>
            <div class="col-sm">
                <h6><i class="fas fa-keyboard mr-3"></i>On-demand Learning</h6>
            </div>
            <div class="col-sm">
                <h6><i class="fa-solid fa-money-bill mr-3"></i>Register Cources Free</h6>
            </div>
            
        </div>  
    </div>

<!--Side Navbar -->
<div class="sidebar">
   <ul>
    <li><a href="#">Quiz Section</a></li>
    <li><a href="#">Play Games</a></li>
    <li><a href="#">Short Cources</a></li>
    <li><a href="#">Story Books</a></li>
    <li><a href="#">General Knowledge</a></li>
    <li><a href="#">Parent Cources</a></li>
   </ul>
  </div>

  <div class="content1 mt-5">
   <h1>Welcome to Our Kids Activity Section</h1>
   <p>
    This section will provide after school activities for kids. It will help childrens to explore new things after same boring school routine. 
   </p>

<div class="row">
  <div class="col-sm-4">
    <div class="card mt-4">
      <img class="card-img-top" src="images/kids/k1.jpg" alt="Card image cap" width="286" height="180">
      <div class="card-body">
        <h5 class="card-title">Kids Creative Writing</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="courceregistration.php" class="btn btn-primary">Enroll Now</a>
      </div>
    </div>
</div>

    <div class="col-sm-4">
    <div class="card mt-4">
      <img class="card-img-top" src="images/kids/k2.png" alt="Card image cap" width="286" height="180">
      <div class="card-body">
        <h5 class="card-title">English Beginner Cource</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="courceregistration.php" class="btn btn-primary">Enroll Now</a>
      </div>
    </div>
</div>

<div class="col-sm-4">
    <div class="card mt-4">
      <img class="card-img-top" src="images/kids/k3.jpg" alt="Card image cap" width="286" height="180">
      <div class="card-body">
        <h5 class="card-title">Short Programming Cource</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="courceregistration.php" class="btn btn-primary">Enroll Now</a>
      </div>
    </div>
</div> <br><br>

<div class="col-sm-4">
    <div class="card mt-4">
      <img class="card-img-top" src="images/kids/k4.jpg" alt="Card image cap" width="286" height="180">
      <div class="card-body">
        <h5 class="card-title">Easy Art</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="courceregistration.php" class="btn btn-primary">Enroll Now</a>
      </div>
    </div>
</div>

<div class="col-sm-4">
    <div class="card mt-4">
      <img class="card-img-top" src="images/kids/k5.avif" alt="Card image cap" width="286" height="180">
      <div class="card-body">
        <h5 class="card-title">Language Cource</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="courceregistration.php" class="btn btn-primary">Enroll Now</a>
      </div>
    </div>
</div>

<div class="col-sm-4">
    <div class="card mt-4">
      <img class="card-img-top" src="images/kids/k6.jpg" alt="Card image cap" width="286" height="180">
      <div class="card-body">
        <h5 class="card-title">Hurdle Creating games</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="courceregistration.php" class="btn btn-primary">Enroll Now</a>
      </div>
    </div>
</div>
</div>
</div>

 <!-- Footer Section -->

 <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <h3>Suggest Us</h3>
                <form id="contactForm">
                    <div class="form-group">
                     <label for="name">
                      Name:
                     </label>
                     <input class="form-control" id="name" placeholder="Enter your name" required="" type="text"/>
                    </div>
                    <div class="form-group">
                     <label for="email">
                      Email:
                     </label>
                     <input class="form-control" id="email" placeholder="Enter your email" required="" type="email"/>
                    </div>
                    <div class="form-group">
                     <label for="message">
                      Message:
                     </label>
                     <textarea class="form-control" id="message" placeholder="Enter your message" required=""></textarea>
                    </div>
                        <button class="btn btn-success" type="submit">Submit</button>
                   </form>

            </div>
                <div class="col-md-4">
                    <h3>Quick Links</h3>
                    <div class="footer-links">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Liberary</a></li>
                             <li><a href="#">Sharing Platform</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Connect with Us</h3>
                    <div class="social-icons">
                        <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram-square"></i></a>
                        <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.min.css"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/all.min.js"></script>
</body>
</html

