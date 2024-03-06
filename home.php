
<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $db = require __DIR__ . "/connection.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $db->query($sql);
    
    $user = $result->fetch_assoc();
}
?>





<!DOCTYPE html>
<html>
<head>
    <title>Khushi Learning Engine</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="home.php">
                <img src="images/logo.svg" alt="Logo" height="80">
            </a>
            <h5>Khushi Learning Engine</h5>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-2 custom-nav">
                        <a class="nav-link text-dark" href="home.php">Home</a>
                    </li>
                    <li class="nav-item px-2 custom-nav">
                        <a class="nav-link text-dark" href="#about">About</a>
                    </li>
                    <li class="nav-item px-2 custom-nav">
                        <a class="nav-link text-dark" href="#our-team">Our Team</a>
                    </li>
                    <li class="nav-item px-2 custom-nav">
                        <a class="nav-link text-dark" href="cources.php">Cources</a>
                    </li>
                    <li class="nav-item px-2 custom-nav">
                        <a class="nav-link text-dark" href="blog.php">Dicussion Board</a>
                    </li>
                    <li class="nav-item px-2 custom-nav">
                        <a class="nav-link text-dark" href="kidsactivities.php">Kids</a>
                    </li>
                    <li class="nav-item px-2 custom-nav">
                        <a class="nav-link text-dark" href="library.php">Library</a>
                    </li>
                    <li class="nav-item custom-nav">
                        <a class="nav-link text-dark" href="#contactForm">Connect</a>
                    </li>
                    <li class="nav-item custom-nav">
                        <a class="nav-link text-dark" href="certification.php">Certifications</a>
                    </li>
                </ul>      
            </div>
        </div>

        <div class="div1">
             <?php if (isset($user)): ?>
        
                        <h6 class="text-center" style="color: #CD0954;">Hello <?= htmlspecialchars($user["name"]) ?>!</h6>
                        <p class="text-center"><a class="btn btn-dark btn-sm" href="logout.php">Log out</a></p>
                        
                    <?php else: ?>
                        
                        <p class="text-center"><a class="btn btn-success btn-sm" href="login.php">Log In</a> or 
                        <a class="btn btn-success btn-sm" href="signup.php">Sign Up</a></p>
                        
                    <?php endif; ?>
            
        </div>
       
    </nav>

     <!-- Image slider -->

    <div class="slider-container">
        <div class="slider-image active" style="background-image: url('images/header7.jpg');"></div>
        <div class="slider-image active" style="background-image: url('images/header6.jpg');"></div>
        <div class="slider-image" style="background-image: url('images/header3.jpg');"></div>
        <div class="slider-image" style="background-image: url('images/header4.jpg');"></div>
        <div class="slider-content">
            <h1>Welcome to an Open-source Learning Platform</h1>
            <p>Discover the new era of learning by joining our platorm. <br> Explore and eperience 
            ways of learning and sharing</p>
            <a class="btn btn-success" href="signup.php">Sign Up</a>
            <a class="btn btn-success" href="login.php">Log In</a>
        </div>
        <div class="slider-dots">
            <div class="slider-dot active"></div>
            <div class="slider-dot"></div>
            <div class="slider-dot"></div>
            <div class="slider-dot"></div>
        </div>
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

    <!-- About Us Section -->

    <section id="about">
        <div class="container text-center fw-bold">
            <h2>About Us</h2>
            <p> We are providing an open-source learning platform for everyone. <br>
                No matters which age group you belong, you can learn anything from anywhere. This platform will provide 
                a wide range of knowledge with free cources to register. The main purpose of this platform is to provide
                free of cost learning of skills and education to everyone. 
                We are providing a platform where anyone can share their knowlegde and find out the solution of their queries.
                Free of cost books and learning material can be accessed easily. A kids sections where children can practice
                different activities. This platform is providing all in one pckages.
            </p>
        </div>
        <div class="row col d-flex justify-content-center text-center text-light">
            <div class="col-sm-3 mb-3">
              <div class="card bg-info">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Mission</h5>
                  <p class="card-text textsize">My mission was to develop an open-source platform where people can directly connect 
                  with each other, learn and share their knowledge free of cost.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3 mb-3 ">
              <div class="card bg-success ">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Vision</h5>
                  <p class="card-text">To see more people come and join online learning platform. Help others to new learn skills and help other people to learn new skills as well.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3 mb-3 ">
                <div class="card bg-danger">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">What We Provide</h5>
                    <p class="card-text ">We are providing an open-source share platform for sharing helping materials, free cources, kids activities section and solution to everyone's queries.
                         </p>
                  </div>
                </div>
              </div>
          </div>
    </section>

  <!-- Our Team Section -->
  <section id="our-team">
   <div class="container">
    <div class="section-title">
        <br>
     <h2 class="fw-bold">
      Our Team
     </h2>
    </div>
    <div class="row">
     <div class="col-md-4">
      <div class="team-member">
       <img alt="Team Member 1" src="images/dp5.avif"/>
       <h3>
        Manpreet Kaur
       </h3>
       <p>Junior Team Member in Support <br> Msc Computer Science</p>
      </div>
     </div>
     <div class="col-md-4">
      <div class="team-member">
       <img alt="Team Member 2" src="images/dp4.jpg"/>
       <h3>
        Khuspreet Kaur
       </h3>
       <p>Founder of this E-learning Plaform <br> Msc Computer Science</p>
      </div>
     </div>
     <div class="col-md-4">
      <div class="team-member">
       <img alt="Team Member 3" src="images/dp3.avif"/>
       <h3>
        Komal Kaur
       </h3>
       <p>Online Instructor of programming <br> Msc Computer Science</p>
      </div>
     </div>
    </div>
   </div>
  </section>

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
                        <a href="" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram-square"></i></a>
                        <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    
    <!-- Custom JS -->

    <script>
        $(document).ready(function() {
            var slideIndex = 0;
            var slides = $('.slider-image');
            var dots = $('.slider-dot');

            function showSlide(index) {
                slides.removeClass('active');
                dots.removeClass('active');
                slides.eq(index).addClass('active');
                dots.eq(index).addClass('active');
            }

            function nextSlide() {
                slideIndex++;
                if (slideIndex >= slides.length) {
                    slideIndex = 0;
                }
                showSlide(slideIndex);
            }

            function prevSlide() {
                slideIndex--;
                if (slideIndex < 0) {
                    slideIndex = slides.length - 1;
                }
                showSlide(slideIndex);
            }

            function setSlide(index) {
                slideIndex = index;
                showSlide(slideIndex);
            }

            $('.slider-dot').click(function() {
                var index = $(this).index();
                setSlide(index);
            });

            setInterval(nextSlide, 5000);
        });
    </script>

     <!-- Bootstrap JS and jQuery -->
    <script src="js/jquery.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

     <script>
    $(document).ready(function() {
    $('#contactForm').submit(function(e) {
        e.preventDefault();
        alert('Thank you for your Suggestion! We will get back to you soon.');
        $('#contactForm')[0].reset();
    });
});
</script>

  
</body>
</html>
