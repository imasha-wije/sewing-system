<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Sewing Studio</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="shortcut icon" href="img/favicon.jpeg">

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
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                            <a href="index.php" class="nav-item nav-link ">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="service.php" class="nav-item nav-link active">Services</a>
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
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
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


        <!-- Modal Search Start -->
        <!-- <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control bg-transparent p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Modal Search End -->


        <!-- Hero Start -->
        <div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container text-center animated bounceInDown">
                <h1 class="display-1 mb-4">Services</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    
                    <li class="breadcrumb-item text-dark" aria-current="page">Services</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Service Start -->
        <div class="container-fluid service py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Services</small>
                    <h1 class="display-5 mb-5">What We Offer</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="bi bi-chat-text fa-7x servcolor  mb-4"></i>
                                    <h4 class="mb-3">Corporate</h4>
                                    <p class="mb-4">chat with a client to discuss their needs</p>
                                    <!-- <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="bi bi-scissors fa-7x servcolor mb-4"></i>
                                    <h4 class="mb-3">Cut Fabrics </h4>
                                    <p class="mb-4">cut out the fabric using the pattern pieces</p>
                                    <!-- <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    
                                    <i class="bi bi-check-square-fill fa-7x servcolor  mb-4"></i>
                                    <h4 class="mb-3">Suggestions</h4>
                                    <p class="mb-4">Give advice on fabrics, patterns and styles</p>
                                    <!-- <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.7s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="bi bi-people-fill  fa-7x servcolor mb-4"></i>
                                    <h4 class="mb-3">Pattern Making</h4>
                                    <p class="mb-4">customize your clothes in fashionable way and modify</p>
                                    <!-- <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.7s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="bi bi-pencil-square fa-7x servcolor mb-4"></i>
                                    <h4 class="mb-3">Fashion Illustration</h4>
                                    <p class="mb-4">Create fashion-focused drawing sketches</p>
                                    <!-- <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="bi bi-tools fa-7x servcolor mb-4"></i>
                                    <h4 class="mb-3">Use New Tools</h4>
                                    <p class="mb-4">use a variety of sewing tools and create custom clothes</p>
                                    <!-- <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="bi bi-card-checklist fa-7x servcolor mb-4"></i>
                                    <h4 class="mb-3">Online Order</h4>
                                    <p class="mb-4">Any designed dress can order by online</p>
                                    <!-- <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="bi bi-truck fa-7x servcolor mb-4"></i>
                                    <h4 class="mb-3">Home Delivery</h4>
                                    <p class="mb-4">Can order dresses and pay by cash on delivery </p>
                                    <!-- <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Testimonial Start -->
        
        
        <div class="container-fluid py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Testimonial</small>
                    <h1 class="display-5 mb-5">What Our Customers says!</h1>
                </div>
                <div class="owl-carousel owl-theme testimonial-carousel testimonial-carousel-1 mb-4 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial1.jpg"  alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                               
                            </div>
                            
                        </div>
                        
                    </div>
                     <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial2.jpg"  alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                             
                            </div>
                            
                        </div>
                       
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial3.jpg" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                               
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial4.jpg"  alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                               
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="owl-carousel testimonial-carousel testimonial-carousel-2 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial5.jpg" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial6.jpg"  alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                
                            </div>
                            
                        </div>
                       
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial1.jpg"  alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                
                            </div>
                            
                        </div>
                        
                        </div> 
                    </div>
                    
                </div>
            </div>
        </div> 
        <!-- Testimonial End -->


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
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Sewing Studio</a></span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        
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