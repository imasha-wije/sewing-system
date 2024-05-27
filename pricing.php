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
                    <div class="navbar-nav mx-auto">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
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
                <h1 class="display-1 mb-4">Materials Pricing</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Materials Pricing</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->


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
                            
                        <!-- <div id="tab-10" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-06.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Sabudana Tikki</h4>
                                                <h4 class="text-primary">$90</h4>
                                            </div>
                                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-07.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Crispy</h4>
                                                <h4 class="text-primary">$90</h4>
                                            </div>
                                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-09.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Pizza</h4>
                                                <h4 class="text-primary">$90</h4>
                                            </div>
                                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-02.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Bacon</h4>
                                                <h4 class="text-primary">$90</h4>
                                            </div>
                                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-03.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Chicken</h4>
                                                <h4 class="text-primary">$90</h4>
                                            </div>
                                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-05.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Blooming</h4>
                                                <h4 class="text-primary">$90</h4>
                                            </div>
                                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-07.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Sweet</h4>
                                                <h4 class="text-primary">$90</h4>
                                            </div>
                                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-09.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Argentinian</h4>
                                                <h4 class="text-primary">$90</h4>
                                            </div>
                                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </div>
                             </div> -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- pricing End -->


        <!-- Book Us Start
        <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-0">
                    <div class="col-1">
                        <img src="img/background-site.jpg" class="img-fluid h-100 w-100 rounded-start" style="object-fit: cover; opacity: 0.7;" alt="">
                    </div>
                    <div class="col-10">
                        <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                            <div class="text-center">
                                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Book Us</small>
                                <h1 class="display-5 mb-5">Where you want Our Services</h1>
                            </div>
                            <div class="row g-4 form">
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" aria-label="Default select example">
                                        <option selected>Select Country</option>
                                        <option value="1">USA</option>
                                        <option value="2">UK</option>
                                        <option value="3">India</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" aria-label="Default select example">
                                        <option selected>Select City</option>
                                        <option value="1">Depend On Country</option>
                                        <option value="2">UK</option>
                                        <option value="3">India</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" aria-label="Default select example">
                                        <option selected>Select Palace</option>
                                        <option value="1">Depend On Country</option>
                                        <option value="2">UK</option>
                                        <option value="3">India</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" aria-label="Default select example">
                                        <option selected>Small Event</option>
                                        <option value="1">Event Type</option>
                                        <option value="2">Big Event</option>
                                        <option value="3">Small Event</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" aria-label="Default select example">
                                        <option selected>No. Of Palace</option>
                                        <option value="1">100-200</option>
                                        <option value="2">300-400</option>
                                        <option value="3">500-600</option>
                                        <option value="4">700-800</option>
                                        <option value="5">900-1000</option>
                                        <option value="6">1000+</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" aria-label="Default select example">
                                        <option selected>Vegetarian</option>
                                        <option value="1">Vegetarian</option>
                                        <option value="2">Non Vegetarian</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="mobile" class="form-control border-primary p-2" placeholder="Your Contact No.">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="date" class="form-control border-primary p-2" placeholder="Select Date">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="email" class="form-control border-primary p-2" placeholder="Enter Your Email">
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Submit Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <img src="img/background-site.jpg" class="img-fluid h-100 w-100 rounded-end" style="object-fit: cover; opacity: 0.7;" alt="">
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Book Us End -->


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