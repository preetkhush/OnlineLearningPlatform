<?php
include("navbar.html");
?>


<!DOCTYPE html>
<html>
<head>
    <title>K | Disscussion Blog</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/blog.css">

</head>

<body style="background-color: #F8F9FA;">
      
      <div class="slider-container">
        <div class="slider-image active" style="background-image: url('images/cover.jpg');"></div>
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
    <br>

    <!-- Blog post -->
    <div class="container2">
        <h4>This Blog will allow you to share discuss the skills, knowlegde and creative ideas.</h4>
        <p>This blog is an open-source platform which let people share their skills, knowlege and eperience to help people explore,
        learn and solve their queries. Don't hesitate to share your knowledge and provide suggestions to people queries.</p>
        <br>
        <form id="postForm">
            <div class="form-group">
                <label for="postContent">Share your thoughts:</label>
                <textarea class="form-control" id="postContent" placeholder="Enter your post content" name="postContent"></textarea>
            </div>
            <div class="form-group">
                <label for="postAttachment">Attachment:</label>
                <input type="file" id="postAttachment" name="postAttachment">
                <label class="custom-file-upload" for="postAttachment">Choose File</label>
            </div>
            <button type="submit" class="btn btn-primary">Post</button>
        </form>

        <div class="comments">
            <div class="comment">
                <div class="comment-header">
                    <img src="images/dp3.avif" alt="User Avatar">
                    <div class="comment-author">khuspreet Kaur</div>
                </div>
                <div class="comment-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl at aliquet lobortis, ex neque tincidunt metus, id gravida quam velit et metus.
                </div>
                <div class="comment-date">Posted on 2024-01-28</div>
            </div>
            <div class="comment">
                <div class="comment-header">
                    <img src="images/dp4.jpg" alt="User Avatar">
                    <div class="comment-author">Daljeet Kaur</div>
                </div>
                <div class="comment-body">
                    Nullam euismod, nisl at aliquet lobortis, ex neque tincidunt metus, id gravida quam velit et metus. Sed euismod, nisl at aliquet lobortis, ex neque tincidunt metus, id gravida quam velit et metus.
                </div>
                <div class="comment-date">Posted on 2024-01-10</div>
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

    <!-- Bootstrap & jQuery JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script>
        $(document).ready(function() {
            $('#postForm').submit(function(e) {
                e.preventDefault();
                var postContent = $('#postContent').val();
                var postAttachment = $('#postAttachment').val();
                var currentDate = new Date().toISOString().split('T')[0];
                
                if (postContent !== '') {
                    var comment = '<div class="comment">' +
                        '<div class="comment-header">' +
                        '<img src="https://via.placeholder.com/40" alt="User Avatar">' +
                        '<div class="comment-author">Unknown User</div>' +
                        '</div>' +
                        '<div class="comment-body">' + postContent + '</div>' +
                        '<div class="comment-date">Posted on ' + currentDate + '</div>' +
                        '</div>';

                    $('.comments').prepend(comment);

                    $('#postContent').val('');
                    $('#postAttachment').val('');
                }
            });
        });
    </script>
   

   
</body>
</html>


   