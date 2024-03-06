<?php
include("navbar.html");
?>


<!DOCTYPE html>
<html>
<head>
    <title>Online Courses</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/cources.css">
</head>


<body>
   <!--Heade -->

    <div class="slider-container">
        <div class="slider-image active" style="background-image: url('images/cources.jpg');"></div>
        <div class="slider-content2">
            <h2>Welcome to an Open-source Learning Platform</h2>
            <p style="color: black; font-weight: bold;">Discover our new free cources and register now.</p>
            <a href="courceregistration.php" class="btn btn-success">Register Now</a>
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

    <!--Search Bar -->

    <div class="search-container">
        <input type="text" id="search-bar" placeholder="Search Cources...">
        <button id="search-button" onclick="search()">Search</button>
    </div>

    <div id="search-results" class="content">


        <!-- Search results will be displayed here -->
    </div>

    <!--Cources -->

    <div class="container mt-5"><br>
        <h2 class="text-center">Register Our Top Free Cources</h2><br>

          <!--Cources Deck 1 -->

        <div class="card-deck mt-4">
            <a href="coucedetail.php" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
            <div class="card">
                <img src="images/content.jpg" class="card-img-top" alt="Guitar" width="286" height="180" />
                <div class="card-body">
                    <h5 class="card-title">Creative Content Writing</h5>
                    <p class="card-text">Casecade Style Sheet is one of the main part of your Website.</p>  
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price <small><del>&#8377 2000</del></small><span class="font-weight-bolder">Free Now</span></p>
                    <a class="btn btn-success text-white font-weight-bolder float-right" href="courceregistration.php">Register</a>  
                </div>
            </div>
            </a>
            <a href="coucedetail.php" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
            <div class="card">
                <img src="images/css.png" class="card-img-top" alt="Guitar" width="286" height="180"/>
                <div class="card-body">
                    <h5 class="card-title">Learn CSS Easy Way</h5>
                    <p class="card-text">Casecade Style Sheet is one of the main part of your Website.</p>  
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price <small><del>&#8377 2000</del></small><span class="font-weight-bolder">Free Now</span></p>
                    <a class="btn btn-success text-white font-weight-bolder float-right" href="courceregistration.php">Register</a>  
                </div>
            </div>
            </a>
            <a href="coucedetail.php" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
            <div class="card">
                <img src="images/freelance.jpeg" class="card-img-top" alt="Guitar" width="286" height="180" />
                <div class="card-body">
                    <h5 class="card-title">Freelancing</h5>
                    <p class="card-text">Casecade Style Sheet is one of the main part of your Website.</p>  
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price <small><del>&#8377 2000</del></small><span class="font-weight-bolder">Free Now</span></p>
                    <a class="btn btn-success text-white font-weight-bolder float-right" href="courceregistration.php">Register</a>  
                </div>
            </div>
            </a>
        </div>

         <!--Cources Deck 2 -->

        <div class="card-deck mt-4">
            <a href="coucedetail.php" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
            <div class="card">
                <img src="images/language.webp" class="card-img-top" alt="Guitar" width="286" height="180"/>
                <div class="card-body">
                    <h5 class="card-title">Language Experty</h5>
                    <p class="card-text">Casecade Style Sheet is one of the main part of your Website.</p>  
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price <small><del>&#8377 2000</del></small><span class="font-weight-bolder">Free Now</span></p>
                    <a class="btn btn-success text-white font-weight-bolder float-right" href="courceregistration.php">Register</a>  
                </div>
            </div>
            </a>
            <a href="coucedetail.php" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
            <div class="card">
                <img src="images/php.jpg" class="card-img-top" alt="Guitar" width="286" height="180" />
                <div class="card-body">
                    <h5 class="card-title">PHP Crack cource</h5>
                    <p class="card-text">Casecade Style Sheet is one of the main part of your Website.</p>  
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price <small><del>&#8377 2000</del></small><span class="font-weight-bolder">Free Now</span></p>
                    <a class="btn btn-success text-white font-weight-bolder float-right" href="courceregistration.php">Register</a>  
                </div>
            </div>
            </a>
            <a href="coucedetail.php" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
            <div class="card">
                <img src="images/react.jpeg" class="card-img-top" alt="Guitar" width="286" height="180" />
                <div class="card-body">
                    <h5 class="card-title">React Js</h5>
                    <p class="card-text">Casecade Style Sheet is one of the main part of your Website.</p>  
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price <small><del>&#8377 2000</del></small><span class="font-weight-bolder">Free Now</span></p>
                    <a class="btn btn-success text-white font-weight-bolder float-right" href="courceregistration.php">Register</a>  
                </div>
            </div>
            </a>
        </div>  <br>
        <div class="text-center mt-2">
            <a href="" class="btn btn-danger btn-sm"> View All Cources</a>
            
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

<script>
    function search() {
            // Get the keyword from the search bar
            var keyword = document.getElementById('search-bar').value.toLowerCase();

            // Perform the search logic (replace this with your actual search functionality)
            var results = performSearch(keyword);

            // Display the search results
            displayResults(results);
        }

        function performSearch(keyword) {
            // Replace this with your actual search logic (e.g., fetching results from a database)
            // For demonstration purposes, this example assumes a simple array of items
            var items = ['CSS', 'PHP', 'Language', 'HTML', 'Javascript'];
            return items.filter(item => item.toLowerCase().includes(keyword));
        }

        function displayResults(results) {
            var resultsContainer = document.getElementById('search-results');
            resultsContainer.innerHTML = '';

            if (results.length === 0) {
                resultsContainer.innerHTML = '<div class="alert alert-danger" role="alert">No result found!</div>';
            } else {
                results.forEach(result => {
                    var resultElement = document.createElement('div');
                    resultElement.textContent = result;
                    resultsContainer.appendChild(resultElement);
                });
            }
        }
    </script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/all.min.js"></script>
</body>
</html>

