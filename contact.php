<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Sewing Studio</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        
        <style>
            .bod{
                border-color: black;
            }
            
            .nav-bar {
                background-color:rgba(32, 67, 123, 0.909);
            }

        </style>
       
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid nav-bar">
            <div class="container">
                <nav class="navbar navbar-light navbar-expand-lg py-4">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="text-primary fw-bold mb-0"><span style="color: #f0f0f0;">Sewing</span><span style="color: rgba(241, 87, 190, 0.952);">Studio</span> </h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="service.php" class="nav-item nav-link">Services</a>
                            <a href="suitable design.php" class="nav-item nav-link">Order</a>
                            
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu bg-light">
                                    <a href="book.php" class="dropdown-item">Order Now</a>
                                    <a href="pricing.php" class="dropdown-item">Material Pricing</a>
                                    <a href="blog.php" class="dropdown-item">Our Blog</a>
                                    <a href="team.php" class="dropdown-item">Our Team</a>
                                    <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                    
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link active">Contact</a>
                        </div>
                        <a href="" class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-shopping-cart"></i></button>
                        </a>
                        <a href="" class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="bi bi-bell-fill"></i></i></button></a>
                            <div class="dropdown">
                                <a href="#" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill Register" data-bs-toggle="dropdown"style="height: 40px; width: 150px;">
                                  <i class="fas fa-user"> My Account</i>
                                </a>
                                <div class="dropdown-menu bg-light">
                                  <a class="dropdown-item" href="register.php">Register</a>
                                  <a class="dropdown-item" href="login.php">Login</a>
                                </div>
                              </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


        


        <!-- Hero Start -->
        <div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container text-center animated bounceInDown">
                <h1 class="display-1 mb-4">Contact</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    
                    <li class="breadcrumb-item text-dark" aria-current="page">Contact</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Contact Start -->
<div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="p-5 bg-light rounded contact-form">
            <div class="row g-4">
                <div class="col-12">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Get in touch</small>
                    <h1 class="display-5 mb-0">Contact Us For Design Customize Designs!</h1>
                </div>
                <div class="col-md-6 col-lg-7">
                    <p class="mb-4 para">Any type of dress you want, can be Customized by contacting us.</p>
                    <form action="https://formsubmit.co/imashawije90@gmail.com" method="POST">
    <div class="contact-bord">
        <input type="text" name="name" class="w-100 form-control p-3 mb-4 bod bg-light" placeholder="Your Name">
        <input type="email" name="email" class="w-100 form-control p-3 mb-4 bod bg-light" placeholder="Enter Your Email">
        <textarea name="message" class="w-100 form-control mb-4 p-3 bod bg-light" rows="4" cols="10" placeholder="Your Message"></textarea>
        <button type="submit" class="w-100 btn btn-primary form-control p-3 bod rounded-pill submitbtn">Submit Now</button>
    </div>
</form>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div>
                        <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                            <i class="fas fa-map-marker-alt fa-2x icons me-4"></i>
                            <div class="">
                                <h4>Address</h4>
                                <p>16/1,Ruwanwella Road, Deenapamunuwa</p>
                            </div>
                        </div>
                        <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                            <i class="fas fa-envelope fa-2x icons me-4"></i>
                            <div class="">
                                <h4>Mail Us</h4>
                                <p class="mb-2">isuganegoda@gmail.com</p>
                                <!-- <p class="mb-0">support@example.com</p> -->
                            </div>
                        </div>
                        <div class="d-inline-flex w-100 border border-primary p-4 rounded">
                            <i class="fa fa-phone-alt fa-2x icons me-4"></i>
                            <div class="">
                                <h4>Telephone</h4>
                                <p class="mb-2">0775643523</p>
                                <!-- <p class="mb-0">(+704) 5555 0127 296</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid footer py-6 my-6 mb-0 bg-light wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h1 class="text-primary fw-bold mb-0"><span style="color: #000000;">Sewing</span><span style="color: rgba(241, 87, 190, 0.952);">Studio</span> </h1>
                            <p class="lh-lg mb-4 para">Sewing Studio is a  self own sewing business. 
                                We are passionate about creating beautiful, handcrafted 
                                garments and transforming your fabric ideas into reality. 
                               </p>
                            <div class="footer-icon d-flex">
                                <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square me-2 rounded-circle"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square rounded-circle"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4">Quick Links</h4>
                            <div class="d-flex flex-column align-items-start">
                                <a class="text-body mb-3" href="index.php"><i class="fa fa-check text-primary me-2"></i>Home</a>
                                <a class="text-body mb-3" href="about.php"><i class="fa fa-check text-primary me-2"></i>About</a>
                                <a class="text-body mb-3" href="service.php"><i class="fa fa-check text-primary me-2"></i>Service</a>
                                <a class="text-body mb-3" href="suitable design.php"><i class="fa fa-check text-primary me-2"></i>Order</a>
                                <a class="text-body mb-3" href="contact.php"><i class="fa fa-check text-primary me-2"></i>Contact</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4">Contact Us</h4>
                            <div class="d-flex flex-column align-items-start">
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i> 16/1, Ruwanwella Road, Deenapamunuwa</p>
                                <p><i class="fa fa-phone-alt text-primary me-2"></i> 0775643523</p>
                                <p><i class="fas fa-envelope text-primary me-2"></i> isuganegoda@gmail.com</p>
                                <p><i class="fa fa-clock text-primary me-2"></i> 24/7 Hours Service</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4">Social Gallery</h4>
                            <div class="row g-2">
                                <div class="col-4">
                                     <img src="img/socialgallery.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/socialgallery.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/socialgallery.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/socialgallery.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/socialgallery.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/socialgallery.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>