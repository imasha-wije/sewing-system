<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Sewing Studio</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="shortcut icon" href="img/favicon.jpeg">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
.hidden-image {
    display: none; /* Hide the image */
    width: 50px; /* Set the width */
    height: 50px; /* Set the height */
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
                            <a href="suitable design.php" class="nav-item nav-link active">Order</a>
                            
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
                <h1 class="display-1 mb-4">Perfect Designs For Order</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    
                    <li class="breadcrumb-item text-dark" aria-current="page">Perfect Designs</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->


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
        <hr>
        <h1>UK 8 (S)</h1>
        <hr>
             
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
                        <h5 class="card-title"  style="color: #d23254;">Rs 1000.00</h5>
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
                        <h5 class="card-title"  style="color: #d23254;">Rs 800.00</h5>
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
                        <h5 class="card-title"  style="color: #d23254;">Rs 900.00</h5>
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
                        <h5 class="card-title"  style="color: #d23254;">Rs 800.00</h5>
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
                <hr>
        <h1><center>UK 10 (M)</center></h1>
        <hr>
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
                    <h5 class="card-title"  style="color: #d23254;">Rs 750.00</h5>
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
                        <h5 class="card-title"  style="color: #d23254;">Rs 800.00</h5>
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
                        <h5 class="card-title"  style="color: #d23254;">Rs 700.00</h5>
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
                        <h5 class="card-title"  style="color: #d23254;">Rs 800.00</h5>
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
<hr>
        <h1><center>UK 12 (L)</center></h1>
        <hr>
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
                    <h5 class="card-title"  style="color: #d23254;">Rs 800.00</h5>
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
                        <h5 class="card-title"  style="color: #d23254;">Rs 800.00</h5>
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
                        <h5 class="card-title"  style="color: #d23254;">Rs 900.00</h5>
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
                        <h5 class="card-title"  style="color: #d23254;">Rs 700.00</h5>
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
<hr>
        <h1><center>UK 14 (XL)</center></h1>
        <hr>
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
                    <h5 class="card-title"  style="color: #d23254;">Rs 800.00</h5>
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
                        <h5 class="card-title"  style="color: #d23254;">Rs 800.00</h5>
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
                        <h5 class="card-title"  style="color: #d23254;">Rs 700.00</h5>
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
                        <h5 class="card-title"  style="color: #d23254;">Rs 800.00</h5>
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
<hr>
        <h1><center>UK 16 (XXL)</center></h1>
        <hr>
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
                    <h5 class="card-title"  style="color: #d23254;">Rs 800.00</h5>
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
                        <h5 class="card-title"  style="color: #d23254;">Rs 900.00</h5>
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
                        <h5 class="card-title"  style="color: #d23254;">Rs 800.00</h5>
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
                        <h5 class="card-title"  style="color: #d23254;">Rs 700.00</h5>
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
                    
                    <img id="product-image" class="hidden-image" name="product-image" alt="Product Image">


                    
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

    // Set the src attribute of the img element
    $("#product-image").attr('src', imgSrc);

    // Set the value of other input fields
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