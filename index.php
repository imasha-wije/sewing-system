<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Sewing Studio</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="shortcut icon" href="img/favicon.jpeg">
        <link rel="stylesheet" href="custom.css">

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

            #modal-product-image {
           
           width: 90px; 
           height: 90px; 
           object-fit: cover; /* Ensure the image covers the specified area */
           margin-right: 10px;
          
       }
       #modal-product-price{
   font-size:medium;
}
#modal-product-description{
   color:black;
}
form {
   
   margin: auto;
   padding: 5px;
   border: 1px solid #100e0e;
   border-radius: 10px;
   background-color: #baf2ffd8;
   font-size:small;
}
.modal-dialog {
           max-width: 400px;
           max-height:400px;
          
}

       .modal-body {
           display: flex;
           flex-direction: column;
           align-items: center; /* Center the content horizontally */
           padding: 10px; /* Reduce padding in body */
       }
       button[type="submit"]:hover {
   background-color: #54adf5cf;
   color:black;
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
            <div class="container navsize">
                <nav class="navbar navbar-light navbar-expand-lg py-4">
                    <a href="index.php" class="navbar-brand">
                        <h1 class="text-primary fw-bold mb-0"><span style="color: #000000;">Sewing</span><span style="color: rgba(241, 87, 190, 0.952);">Studio</span> </h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="service.php" class="nav-item nav-link">Services</a>
                            <a href="suitable design.php" class="nav-item nav-link">Order</a>
                            
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu bg-light">
                                    <a href="" class="dropdown-item">Order Now</a>
                                    <a href="pricing.php" class="dropdown-item">Material Pricing</a>
                                    <a href="blog.php" class="dropdown-item">Our Blog</a>
                                    <a href="team.php" class="dropdown-item">Our Team</a>
                                    <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                    
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="addto_cart.php" class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-shopping-cart"></i></button>
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
        <div class="container-fluid bg-light py-5 my-6 mt-0">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated bounceInDown">Welcome to Sewing Studio</small>
                        <h1 class="display-1 mb-4 animated bounceInDown"> <span class="Memo">Memories</span>  stitched with love...</h1>
                        <a href="addto_cart.php" class="btn rounded-pill py-3 px-4 px-md-5 me-4 mainbtn animated bounceInLeft">Order Now</a>
                        
                    </div>
                    <div class="col-lg-5 col-md-12 ">
                        <img src="img/home.png" class="img-fluid rounded animated zoomIn" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Satrt -->
        <div class="container-fluid py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                        <img src="img/about.jpeg" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">About Us</small>
                        <h1 class="display-5 mb-4">Trusted By 200+ satisfied Clients</h1>
                        <p class="mb-4 para">Sewing Studio is a  self own sewing business. 
                            We are passionate about creating beautiful, handcrafted 
                            garments and transforming your fabric ideas into reality. 
                            We use only the finest materials and pay meticulous 
                            attention to detail, ensuring every stitch delivers
                            exceptional quality and timeless style.
                            <p class="mb-4 para">More than just
                            a sewing service, we offer a warm and welcoming space
                            where your vision is our priority. Whether you
                            need a custom dress for a special occasion, alterations
                            to a beloved piece, or guidance on bringing your own
                            sewing projects to life, we're here to help.</p>
                            <p class="mb-4 para">We believe in 
                            fostering long-lasting relationships with our clients,
                             built on trust, creativity, and a shared love for the 
                             art of sewing. Let Sewing Studio be your partner in 
                             creating garments that tell your unique story.</p>
                        <!-- <div class="row g-4 text-dark mb-5">
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i> Fast Delivery
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>24/7 Customer Support
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Easy Customization Options
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>fashoinable and trendy clothes
                            </div>
                        </div> -->
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


      <!-- Fact Start-->
<div class="container-fluid faqt py-6">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <div class="row g-4">
                    <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="faqt-item bg-prim rounded p-4 text-center">
                            <i class="fas fa-users fa-4x mb-4 text-white"></i>
                            <h1 class="display-4 fw-bold" data-toggle="counter-up">689</h1>
                            <p class="text-dark text-uppercase fw-bold mb-0">Happy Customers</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="faqt-item bg-prim rounded p-4 text-center">
                            <i class="fas fa-users-cog fa-4x mb-4 text-white"></i>
                            <h1 class="display-4 fw-bold" data-toggle="counter-up">1</h1>
                            <p class="text-dark text-uppercase fw-bold mb-0">Expert of sewing<br><br></p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.7s">
                        <div class="faqt-item bg-prim rounded p-4 text-center">
                            <i class="fas fa-check fa-4x mb-4 text-white"></i>
                            <h1 class="display-4 fw-bold" data-toggle="counter-up">253</h1>
                            <p class="text-dark text-uppercase fw-bold mb-0">Orders Complete<br><br></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                <div class="video" style="background-image: url('img/video.jpg');">
                  <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="img/dresses.mp4" data-bs-target="#videoModal">
                  <span></span>
                  </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Video -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dresses Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <video class="embed-responsive-item" controls>
                        <source src="img/dresses.mp4" id="video" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->


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


         
          <!-- suitable design Start -->
   <!-- suitable design Start -->
   <div class="container-fluid event py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Latest Designs</small>
            <h1 class="display-5 mb-5">Choose Dresses For Your Body Size</h1>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                <li class="nav-item p-2">
                    <a  href="#tab-1" class="d-flex mx-2 py-2 rounded-pill pricetype"  >
                        <span class="text-dark" style="width: 150px;">UK 8 (S)</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 rounded-pill pricetype" href="#tab-2">
                        <span class="text-dark" style="width: 150px;">UK 10 (M)</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a href="#tab-3" class="d-flex mx-2 py-2 rounded-pill pricetype"  >
                        <span class="text-dark" style="width: 150px;">UK 12 (L)</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 rounded-pill pricetype"  href="#tab-4">
                        <span class="text-dark" style="width: 150px;">UK 14 (XL)</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 rounded-pill pricetype"  href="#tab-5">
                        <span class="text-dark" style="width: 150px;">UK 16 (XXL)</span>
                    </a>
                </li>
               
            </ul>
                

    <div class="tab-content">
        <div id="tab-1" class="tab-pane fade show p-0 active">
             
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card position-relative">
                    <img src="img/s1.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <!-- Icon overlay -->
                        <a href="img/s1.jpeg" data-lightbox="event-2">
                            <i class="fas fa-search-plus text-dark fa-2x"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"  style="color: #d23254;">Rs.1000.00</h5>
                        <p class="card-text para">Linen Coat Dress</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                            
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="card mb-4 position-relative" style="max-width: 250px;">
                        <img src="img/s2.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <!-- Icon overlay -->
                            <a href="img/s2.jpeg" data-lightbox="event-2">
                                <i class="fas fa-search-plus text-dark fa-2x"></i>
                            </a>
                        </div>
                        <div class="card-body">
                        <h5 class="card-title"  style="color: #d23254;">Rs.800.00</h5>
                            <p class="card-text para">Maza Material Flayard Dress</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                    <div class="card mb-4 position-relative" style="max-width: 250px;">
                        <img src="img/s3.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <!-- Icon overlay -->
                            <a href="img/s3.jpeg" data-lightbox="event-2">
                                <i class="fas fa-search-plus text-dark fa-2x"></i>
                            </a>
                        </div>
                        <div class="card-body">
                        <h5 class="card-title"  style="color: #d23254;">Rs.900.00</h5>
                            <p class="card-text para">Valantina Front Knot Dress</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                        </div>
                    </div>
                </div>
           
                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                    <div class="card mb-4 position-relative" style="max-width: 250px;">
                        <img src="img/s4.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <!-- Icon overlay -->
                            <a href="img/s4.jpeg" data-lightbox="event-2">
                                <i class="fas fa-search-plus text-dark fa-2x"></i>
                            </a>
                        </div>
                        <div class="card-body">
                        <h5 class="card-title"  style="color: #d23254;">Rs.800.00</h5>
                            <p class="card-text para">Lace Cotton Normal Dress</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
         
</div>
                <div id="tab-2" class="tab-pane fade show p-0">
                <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card position-relative">
                    <img src="img/m1.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <!-- Icon overlay -->
                        <a href="img/m1.jpeg" data-lightbox="event-2">
                            <i class="fas fa-search-plus text-dark fa-2x"></i>
                        </a>
                    </div>
                    <div class="card-body">
                    <h5 class="card-title"  style="color: #d23254;">Rs.750.00</h5>
                        <p class="card-text para">Lace Cotton Flayard Dress</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="card mb-4 position-relative" style="max-width: 250px;">
                        <img src="img/m2.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <!-- Icon overlay -->
                            <a href="img/m2.jpeg" data-lightbox="event-2">
                                <i class="fas fa-search-plus text-dark fa-2x"></i>
                            </a>
                        </div>
                        <div class="card-body">
                        <h5 class="card-title"  style="color: #d23254;">Rs.800.00</h5>
                            <p class="card-text para">Viscose A line Dress</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                    <div class="card mb-4 position-relative" style="max-width: 250px;">
                        <img src="img/m3.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <!-- Icon overlay -->
                            <a href="img/m3.jpeg" data-lightbox="event-2">
                                <i class="fas fa-search-plus text-dark fa-2x"></i>
                            </a>
                        </div>
                        <div class="card-body">
                        <h5 class="card-title"  style="color: #d23254;">Rs.700.00</h5>
                            <p class="card-text para">Viscose Normal Dress</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                    <div class="card mb-4 position-relative" style="max-width: 250px;">
                        <img src="img/m4 (1).jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <!-- Icon overlay -->
                            <a href="img/m4 (1).jpeg" data-lightbox="event-2">
                                <i class="fas fa-search-plus text-dark fa-2x"></i>
                            </a>
                        </div>
                        <div class="card-body">
                        <h5 class="card-title"  style="color: #d23254;">Rs.800.00</h5>
                            <p class="card-text para">Maza Normal Dress</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                        </div>
                    </div>
                </div>
           
                
            </div>
        </div>
    </div>
</div>
                

<div id="tab-3" class="tab-pane fade show p-0">
                <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card position-relative">
                    <img src="img/l1.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <!-- Icon overlay -->
                        <a href="img/l1.jpeg" data-lightbox="event-2">
                            <i class="fas fa-search-plus text-dark fa-2x"></i>
                        </a>
                    </div>
                    <div class="card-body">
                    <h5 class="card-title"  style="color: #d23254;">Rs.800.00</h5>
                        <p class="card-text para">Maza A line Dress</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="card mb-4 position-relative" style="max-width: 250px;">
                        <img src="img/l2.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <!-- Icon overlay -->
                            <a href="img/l2.jpeg" data-lightbox="event-2">
                                <i class="fas fa-search-plus text-dark fa-2x"></i>
                            </a>
                        </div>
                        <div class="card-body">
                        <h5 class="card-title"  style="color: #d23254;">Rs.800.00</h5>
                            <p class="card-text para">Maza A line Dress</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                    <div class="card mb-4 position-relative" style="max-width: 250px;">
                        <img src="img/l3.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <!-- Icon overlay -->
                            <a href="img/l3.jpeg" data-lightbox="event-2">
                                <i class="fas fa-search-plus text-dark fa-2x"></i>
                            </a>
                        </div>
                        <div class="card-body">
                        <h5 class="card-title"  style="color: #d23254;">Rs.900.00</h5>
                            <p class="card-text para">Lace Cotton Body-con Dress</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                        </div>
                    </div>
                </div>
           
                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                    <div class="card mb-4 position-relative" style="max-width: 250px;">
                        <img src="img/l4.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <!-- Icon overlay -->
                            <a href="img/l4.jpeg" data-lightbox="event-2">
                                <i class="fas fa-search-plus text-dark fa-2x"></i>
                            </a>
                        </div>
                        <div class="card-body">
                        <h5 class="card-title"  style="color: #d23254;">Rs.700.00</h5>
                            <p class="card-text para">Maza Material Crop Top</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>       
</div>
                
<div id="tab-4" class="tab-pane fade show p-0">
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card position-relative">
                    <img src="img/xl1.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <!-- Icon overlay -->
                        <a href="img/xl1.jpeg" data-lightbox="event-2">
                            <i class="fas fa-search-plus text-dark fa-2x"></i>
                        </a>
                    </div>
                    <div class="card-body">
                    <h5 class="card-title"  style="color: #d23254;">Rs.800.00</h5>
                        <p class="card-text para">Bubble cotton Shift Dress</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="card mb-4 position-relative" style="max-width: 250px;">
                        <img src="img/xl22.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <!-- Icon overlay -->
                            <a href="img/xl22.jpeg" data-lightbox="event-2">
                                <i class="fas fa-search-plus text-dark fa-2x"></i>
                            </a>
                        </div>
                        <div class="card-body">
                        <h5 class="card-title"  style="color: #d23254;">Rs.800.00</h5>
                            <p class="card-text para">Maza A line Dress</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                    <div class="card mb-4 position-relative" style="max-width: 250px;">
                        <img src="img/xl33.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <!-- Icon overlay -->
                            <a href="img/xl33.jpeg" data-lightbox="event-2">
                                <i class="fas fa-search-plus text-dark fa-2x"></i>
                            </a>
                        </div>
                        <div class="card-body">
                        <h5 class="card-title"  style="color: #d23254;">Rs.700.00</h5>
                            <p class="card-text para">Viscose Normal Dress</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                        </div>
                    </div>
                </div>
           
                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                    <div class="card mb-4 position-relative" style="max-width: 250px;">
                        <img src="img/xl44.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <!-- Icon overlay -->
                            <a href="img/xl44.jpeg" data-lightbox="event-2">
                                <i class="fas fa-search-plus text-dark fa-2x"></i>
                            </a>
                        </div>
                        <div class="card-body">
                        <h5 class="card-title"  style="color: #d23254;">Rs.800.00</h5>
                            <p class="card-text para">Maza Material Normal Dress</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                
<div id="tab-5" class="tab-pane fade show p-0">
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card position-relative">
                    <img src="img/xxl11.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <!-- Icon overlay -->
                        <a href="img/xxl11.jpeg" data-lightbox="event-2">
                            <i class="fas fa-search-plus text-dark fa-2x"></i>
                        </a>
                    </div>
                    <div class="card-body">
                    <h5 class="card-title"  style="color: #d23254;">Rs.800.00</h5>
                        <p class="card-text para">Maza Material Body-con Dress</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="card mb-4 position-relative" style="max-width: 250px;">
                        <img src="img/xxl22.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <!-- Icon overlay -->
                            <a href="img/xxl22.jpeg" data-lightbox="event-2">
                                <i class="fas fa-search-plus text-dark fa-2x"></i>
                            </a>
                        </div>
                        <div class="card-body">
                        <h5 class="card-title"  style="color: #d23254;">Rs.900.00</h5>
                            <p class="card-text para">Linen Shift Coat Dress</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                    <div class="card mb-4 position-relative" style="max-width: 250px;">
                        <img src="img/xxl33.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <!-- Icon overlay -->
                            <a href="img/xxl33.jpeg" data-lightbox="event-2">
                                <i class="fas fa-search-plus text-dark fa-2x"></i>
                            </a>
                        </div>
                        <div class="card-body">
                        <h5 class="card-title"  style="color: #d23254;">Rs.800.00</h5>
                            <p class="card-text para">Linen Coat Dress</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                        </div>
                    </div>
                </div>
           
                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                    <div class="card mb-4 position-relative" style="max-width: 250px;">
                        <img src="img/xxl44.jpeg" class="card-img-top img-fluid" style="max-height: 300px;" alt="...">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <!-- Icon overlay -->
                            <a href="img/xxl44.jpeg" data-lightbox="event-2">
                                <i class="fas fa-search-plus text-dark fa-2x"></i>
                            </a>
                        </div>
                        <div class="card-body">
                        <h5 class="card-title"  style="color: #d23254;">Rs.700.00</h5>
                            <p class="card-text para">Viscose Normal Dress</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- Modal Structure -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           
               
           
            <div class="modal-body">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
                <form id="product-form">
                    <div class="form-group">
                        <img id="modal-product-image" class="img-fluid mb-3" alt="Product Image">
                    </div>
                    <div class="form-group">
                        <h5 id="modal-product-price" style="color: #d23254;"></h5>
                    </div>
                    <div class="form-group">
                        <p id="modal-product-description"></p>
                    </div>
                        <fieldset>
                            <label1 style=" font-weight: bolder">Available Colors</label1>
                            <label style="color: red"><input type="radio" name="color" value="red"> Red</label>
                            <label style="color: blue"><input type="radio" name="color" value="blue"> Blue</label>
                            <label style="color: green"><input type="radio" name="color" value="green"> Green</label>
                            <label style="color: black"><input type="radio" name="color" value="black"> Black</label>
                            <label style="color: deeppink"><input type="radio" name="color"  value="pink">Pink</label>
                          

                        </fieldset>
                        <fieldset>
                            <label1 style=" font-weight: bolder">Choose the Material</label1>
                            <label style="color: black"><input type="radio" name="material" value="cotton"> Cotton</label>
                            <label style="color: black"><input type="radio" name="material" value="wool"> Wool</label>
                            <label style="color: black"><input type="radio" name="material" value="silk"> Silk</label>
                        </fieldset>
                        <div class="quantity">
                        <label1 style=" font-weight: bolder" for="quantity">Quantity:</label1>
                        <button type="button" id="decrease">-</button>
                        <input type="number" id="quantity" name="quantity" value="1" min="1">
                        <button type="button" id="increase">+</button>
                    </div>
                    <!-- <div class="file-upload">
                        <label1 style=" font-weight: bolder" for="image-upload">Upload your inspiration</label1>
                        <span style="color:black">If you have a design in mind you can upload it here in JPG, JPEG, or PNG format</span><br>
                        <input type="file" id="image-upload" name="image">
                    </div> -->
                    <input type="hidden" id="product-image" name="product_image">
                    <input type="hidden" id="product-price" name="product_price">
                    <input type="hidden" id="product-description" name="product_description">
                    <button style="width:100%" type="submit" class="btn btn-success">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
       $(document).ready(function() {
    $("#increase").click(function() {
        let quantity = parseInt($("#quantity").val());
        $("#quantity").val(quantity + 1);
    });

    $("#decrease").click(function() {
        let quantity = parseInt($("#quantity").val());
        if (quantity > 1) {
            $("#quantity").val(quantity - 1);
        }
    });

    // Populate modal with product details when button is clicked
    $(".btn-primary").click(function() {
        const card = $(this).closest('.card');
        const imgSrc = card.find('img').attr('src');
        const price = card.find('.card-title').text().replace(/[^0-9.]/g, ''); // Extract only the numeric part of the price
        const description = card.find('.card-text').text();

        $("#product-image").val(imgSrc);
        $("#product-price").val(price); // Store the numeric part of the price
        $("#product-description").val(description);

        // Update modal content with product details
        $("#modal-product-image").attr('src', imgSrc);
        $("#modal-product-price").text("Rs." + price);
        $("#modal-product-description").text(description);
    });

    // Handle form submission
    $("#product-form").submit(function(event) {
        event.preventDefault();
        const formData = new FormData(this);
        $.ajax({
            url: 'addto_cart.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                alert("Item added to cart successfully!");
                $("#productModal").modal('hide');
            },
            error: function() {
                alert("Failed to add item to cart.");
            }
        });
    });
});
    </script>
                

        <!-- suitable design End -->

        <!-- pricing Start -->
        <div class="container-fluid menu py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Materials Pricing</small>
                    <h1 class="display-5 mb-5">Most Popular Materials in the World</h1>
                </div>
                <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                        <li class="nav-item p-2">
                            <a class="d-flex py-2 mx-2 rounded-pill active pricetype" data-bs-toggle="pill" href="#tab-6">
                                <span class="text-dark" style="width: 150px;">Luxurious</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex py-2 mx-2 rounded-pill pricetype" data-bs-toggle="pill" href="#tab-7">
                                <span class="text-dark" style="width: 150px;">Expensive</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex py-2 mx-2  rounded-pill pricetype" data-bs-toggle="pill" href="#tab-8">
                                <span class="text-dark" style="width: 150px;">Affordable</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex py-2 mx-2 rounded-pill pricetype" data-bs-toggle="pill" href="#tab-9">
                                <span class="text-dark" style="width: 150px;">Inexpensive</span>
                            </a>
                        </li>
                        
                    </ul>
                    <div class="tab-content">
                        <div id="tab-6" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/lux1.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4 class="expens">Velvet</h4>
                                                <h4 class="text-primary"></h4>
                                            </div>
                                            <p class="mb-0 para1">Velvet is a soft, luxurious fabric that is 
                                                characterized by a dense pile
                                                 of evenly cut fibers that have a smooth nap.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.2s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/lux2.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4 class="expens">Silk</h4>
                                                <h4 class="text-primary"></h4>
                                            </div>
                                            <p class="mb-0 para1">Silk is produced from the cocoon of the silk worm.
                                                  It is a natural fiber and known for its softness as a material. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.3s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/lux3.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4 class="expens">Mohair and Angora</h4>
                                                <h4 class="text-primary"></h4>
                                            </div>
                                            <p class="mb-0 para1">Mohair comes from the Angora goat.  
                                                Mohair is resilient and soft, and it has more sheen 
                                                compared to regular sheep’s wool.  </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.4s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/lux4.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4 class="expens">Tweed</h4>
                                                <h4 class="text-primary"></h4>
                                            </div>
                                            <p class="mb-0 para1">Tweed is a rough-woven fabric usually made from wool. 
                                                The fibers can be woven using a plain weave or twill weaves.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.5s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/lux5.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4 class="expens">Toile</h4>
                                                <h4 class="text-primary"></h4>
                                            </div>
                                            <p class="mb-0 para1">Toile is a textile fabric comparable to fine batiste
                                                 with a cloth weave. Natural silk or chemical fiber
                                                  filaments are usually used as materials. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.6s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/lux6.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4 class="expens">Taffeta</h4>
                                                <h4 class="text-primary"></h4>
                                            </div>
                                            <p class="mb-0 para1">Taffeta is a crisp fabric made most 
                                                often from silk, but it can also be woven with 
                                                polyester, nylon, acetate, or other synthetic fibers. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.7s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/lux7.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4 class="expens">Leather</h4>
                                                <h4 class="text-primary"></h4>
                                            </div>
                                            <p class="mb-0 para1">Leather is made from animal hides or skins.  
                                                 Different types of animals and different treatment techniques
                                                  of the hides create different leathers. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.8s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/lux8.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4 class="expens">Organza</h4>
                                                <h4 class="text-primary"></h4>
                                            </div>
                                            <p class="mb-0 para1">Organza is a lightweight, sheer, plain-woven
                                                 fabric that was originally made from silk.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                            <div id="tab-7" class="tab-pane fade show p-0">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="menu-item d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/exp1.jpg" alt="">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                    <h4 class="expens">Mulberry silk</h4>
                                                    <h4 class="text-primary"></h4>
                                                </div>
                                                <p class="mb-0 para1">mulberry silk is the most expensive of all its
                                                     other varieties. It is made from a special type of silkworms</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="menu-item d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/exp2.jpg" alt="">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                    <h4 class="expens">Lotus Silk</h4>
                                                    <h4 class="text-primary"></h4>
                                                </div>
                                                <p class="mb-0 para1">Lotus silk represents the definition 
                                                    of luxurious fibre.
                                                     It's extremely soft, waterproof and stain-proof. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="menu-item d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/exp3.jpg" alt="">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                    <h4 class="expens">Linen</h4>
                                                    <h4 class="text-primary"></h4>
                                                </div>
                                                <p class="mb-0 para1"> linen is an expensive textile that is 
                                                    usually produced in relatively small quantities. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="menu-item d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/exp4.jpg" alt="">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                    <h4 class="expens">Crepe</h4>
                                                    <h4 class="text-primary"></h4>
                                                </div>
                                                <p class="mb-0 para1">Crêpe, usually a light to medium-weight fabric, is a silk, 
                                                    wool, or synthetic derivative with a
                                                     distinctive wrinkled and bumpy appearance. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="menu-item d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/exp5.jpg" alt="">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                    <h4 class="expens">Lace</h4>
                                                    <h4 class="text-primary"></h4>
                                                </div>
                                                <p class="mb-0 para1">Lace fabric was originally made from silk and linen, 
                                                    but today cotton thread and synthetic fibers are also used. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="menu-item d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/exp6.jpg" alt="">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                    <h4 class="expens">Damask</h4>
                                                    <h4 class="text-primary"></h4>
                                                </div>
                                                <p class="mb-0 para1">Damask is reversible; the pattern is woven
                                                     into the fabric, instead of printed on it.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>    

                            </div> 
                        
                            <div id="tab-8" class="tab-pane fade show p-0 ">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="menu-item d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/aff1.jpg" alt="">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                    <h4 class="expens">Cotton</h4>
                                                    <h4 class="text-primary"></h4>
                                                </div>
                                                <p class="mb-0 para1">Cotton is a high-quality fabric that
                                                     doesn't necessarily come at an elevated price.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="menu-item d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/aff2.jpg" alt="">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                    <h4 class="expens">Masha Material</h4>
                                                    <h4 class="text-primary"></h4>
                                                </div>
                                                <p class="mb-0 para1"> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="menu-item d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/aff3.jpg" alt="">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                    <h4 class="expens">Bathik</h4>
                                                    <h4 class="text-primary"></h4>
                                                </div>
                                                <p class="mb-0 para1">Batik is an Indonesian technique of wax-resist 
                                                    dyeing applied to the whole cloth. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="menu-item d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/aff4.jpg" alt="">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                    <h4 class="expens">Hamp</h4>
                                                    <h4 class="text-primary"></h4>
                                                </div>
                                                <p class="mb-0 para1">Hemp requires little resources to grow and 
                                                    to spin into threads and fabrics, making it fairly
                                                     sustainable when grown organically.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="menu-item d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/aff5.jpg" alt="">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                    <h4 class="expens">Lace Cotton</h4>
                                                    <h4 class="text-primary"></h4>
                                                </div>
                                                <p class="mb-0 para1">Lace cotton fabric is known
                                                     for its delicate and intricate designs that add a 
                                                     touch of elegance to any garment or accessory. </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                         


                         
                            <div id="tab-9" class="tab-pane fade show p-0">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="menu-item d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/ch1.jpg" alt="">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                    <h4 class="expens">Viscose</h4>
                                                    <h4 class="text-primary"></h4>
                                                </div>
                                                <p class="mb-0 para1"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="menu-item d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/ch2.jpg" alt="">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                    <h4 class="expens">Bubble Cotton</h4>
                                                    <h4 class="text-primary"></h4>
                                                </div>
                                                <p class="mb-0 para1"> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="menu-item d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/ch3.jpg" alt="">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                    <h4 class="expens">Elastane</h4>
                                                    <h4 class="text-primary"></h4>
                                                </div>
                                                <p class="mb-0 para1">  </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="menu-item d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/ch4.jpg" alt="">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                    <h4 class="expens">Nylon</h4>
                                                    <h4 class="text-primary"></h4>
                                                </div>
                                                <p class="mb-0 para1"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="menu-item d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/ch5.jpg" alt="">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                    <h4 class="expens">Chiffon</h4>
                                                    <h4 class="text-primary"></h4>
                                                </div>
                                                <p class="mb-0 para1"> </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                            </div>
                        
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


       

        
        <!-- Team Start -->
        <div class="container-fluid team py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Team</small>
                    <h1 class="display-5 mb-5">Our Expert Designer</h1>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded">
                            <img class="img-fluid rounded-top" src="img/expert.jpg" alt="">
                            <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                <h4 class="text-primary">Isuri Madushika</h4>
                                <p class="text-white mb-0">Professional Dress Maker</p>
                            </div>
                            <div class="team-icon d-flex flex-column justify-content-center m-4">
                                <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 ">
                        <div class="bg-dark border-inner text-center p-4">
                            <p class="text-white m-0">It's Isuri Madushika Ganegoda! Who currently holds 
                                8 years experience in the sewing and Dress Maker Industry.I'm currently 
                                pursuing B.A.(Hons)Phychology at University of Kelaniya.
                                I am a well qualified dress maker who will be able to make your 
                                all kind of fashoinable needs.I received Sewing and dress
                                 maker training from Mrs. Chandi Balasooriya(Tailoring and Dress Designing Teacher,
                                the qualified TVEC NVQ Aseesor)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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


       <!-- Blog Start -->
       <div class="container-fluid blog py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Blog</small>
                    <h1 class="display-5 mb-5">Be First Who Read Blogs</h1>
                </div>
                <div class="row gx-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="overflow-hidden rounded">
                                <img src="img/blog1.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content mx-4 d-flex rounded bg-light">
                                <div class="text-dark bg-primary rounded-start">
                                    <div class="h-100 bcol p-3 d-flex flex-column justify-content-center text-center">
                                        <p class="fw-bold mb-0">16</p>
                                        <p class="fw-bold mb-0">Mar</p>
                                    </div>
                                </div>
                                <a href="https://fashionispsychology.com/the-kibbe-body-types-how-to-make-your-style-work-for-you/" class="h5 lh-base my-auto h-100 bpara p-3">How to be more fashoinable</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="blog-item">
                            <div class="overflow-hidden rounded">
                                <img src="img/blog1.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content mx-4 d-flex rounded bg-light">
                                <div class="text-dark bg-primary rounded-start">
                                    <div class="h-100 bcol p-3 d-flex flex-column justify-content-center text-center">
                                        <p class="fw-bold mb-0">23</p>
                                        <p class="fw-bold mb-0">Mar</p>
                                    </div>
                                </div>
                                <a href="https://youtu.be/69lwpJy13Pc?feature=shared" class="h5 lh-base my-auto h-100 bpara p-3">How to take full body measurements</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="blog-item">
                            <div class="overflow-hidden rounded">
                                <img src="img/blog1.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content mx-4 d-flex rounded bg-light">
                                <div class="text-dark bg-primary rounded-start">
                                    <div class="h-100 bcol p-3 d-flex flex-column justify-content-center text-center">
                                        <p class="fw-bold mb-0">30</p>
                                        <p class="fw-bold mb-0">Mar</p>
                                    </div>
                                </div>
                                <a href="img/bvideo.mp4" class="h5 lh-base my-auto h-100 bpara p-3">Easy Sewing Hacks & tricks
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->



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