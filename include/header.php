<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?= $description ?>">
    <meta name="author" content="Anas Rasheed">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Imperial Internet includes 5G Home, Broadband & Fiber services" />
    <meta property="og:type" content="Internet" />
    <meta property="og:url" content="https://imperialinternet.com/" />
    <meta property="og:image" content="assets/images/imperail.webp" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/imperail.webp" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/imperail.webp">

    <title><?= $title ?></title>
    <script type="application/ld+json">
        {
            "@context": "https://imperialinternet.com/",
            "@type": "LocalBusiness",
            "name": "Imperial Internet",
            "description": "Imperial Internet includes 5G Home, Broadband & Fiber services",
            "url": "https://imperialinternet.com/",
            "image": "https://imperialinternet.com/assets/images/imperial.webp",
            "telephone": "(800) 660-2639",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "869 Walnut Street",
                "addressLocality": "Macon",
                "addressRegion": "GA",
                "postalCode": "31201",
                "addressCountry": "United States"
            }
        }
    </script>

</head>

<body>
    <a href="tel:(800) 660-2639" class="phone-call d-flex justify-content-center align-items-center text-white"><i class="bi bi-telephone fs-4"></i></a>
    <!-- prenav -->
    <div class="container-fluid bg-dark text-white p-2">
        <div class="container-fluid" style="width: 86%;">
            <div class="row g-3">
                <div class="col-12 col-md-6 col-sm-12 pre-col1" style="font-size: 15px;"> <a href="become-a-partner.php" class="text-decoration-none text-white">Become a partner</a> | Call us : <a href="tel:(800) 660-2639" class="text-decoration-none text-white">(800) 660-2639</a></div>
                <div class="col-12 col-md-6 col-sm-12 pre-col2"><a href="https://www.facebook.com/irgdigital/" class="footer-li"><i class="bi bi-facebook me-3"></i></a> <a href="https://www.instagram.com/imperialresourcesgroup/" class="footer-li"><i class="bi bi-instagram me-3"></i></a> <a href="https://www.linkedin.com/company/imperial-resource-group-llc-/" class="footer-li me-3"><i class="bi bi-linkedin "></i></a> <a href="https://twitter.com/ImperialRgroup" class="footer-li"><i class="bi bi-twitter "></i></a> </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="btn side-menu" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <i class="bi bi-list fs-4 checkout "></i>
            </a>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <img src="assets/images/imperial-logo.webp" class="img-fluid " alt="">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu  lh-lg" aria-labelledby="navbarDropdown">
                                    <li>
                                        <h6 class="dropdown-item" style="cursor: none;">Overview</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="https://imperialwireless.com/">Imperial Wireless</a></li>
                                    <li><a class="dropdown-item" href="fiber.php">Imperial Fiber</a></li>
                                    <li><a class="dropdown-item" href="https://imperialbroadband.com/">Imperial Broadband</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="plans.php">Plans</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="shop.php">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="contact-us.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <a class="navbar-brand" href="index.php">
                <img src="assets/images/imperial-logo.webp" class="img-fluid" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""><i class="fa-solid fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu  lh-lg" aria-labelledby="navbarDropdown">
                            <li>
                                <h6 class="dropdown-item">Overview</h6>
                            </li>
                            <li><a class="dropdown-item" href="https://imperialwireless.com/">Imperial Wireless</a></li>
                            <li><a class="dropdown-item" href="fiber.php">Imperial Fiber</a></li>
                            <li><a class="dropdown-item" href="https://imperialbroadband.com/">Imperial Broadband</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="plans.php">Plans</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="contact-us.php">Contact Us</a>
                    </li>
                </ul>
                <!-- <form class="d-flex me-3">
                    <button class="btn bttn" type="submit">Become A Partner</button>
                </form> -->
            </div>
            <div class="d-flex align-items-center me-3">
                <a href="" class="text-decoration-none fw-bold fs-3 text-dark me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-person"></i></a>
                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title text-center fw-bold font" id="staticBackdropLabel">Welcome to Imperial Internet</h4>
                                <button type="button" class="btn-close icon-style" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body tabs-container">
                                <button class="btn tab active font" data-tab="tab1">Login</button>
                                <button class="btn tab font" data-tab="tab2">Register</button>
                                <div class="tab-content active" data-tab="tab1">
                                    <form class="row g-4">
                                        <div class="col-md-12">
                                            <input type="email" class="form-control form-control-lg bg-light" id="email" name="email" placeholder="Enter Email">
                                        </div>

                                        <div class="col-12">
                                            <input type="password" class="form-control form-control-lg bg-light" id="password" name="password" placeholder="Enter Password">
                                        </div>

                                        <div class="col-12 d-flex flex-column">
                                            <a href="profile.php" type="submit" class="btn bttn">Login</a>
                                        </div>
                                        
                                        <div class="d-flex flex-column text-center">
                                        <button class="loginBtn loginBtn--facebook text-center">
                                                Login with Facebook
                                            </button>

                                            <button class="loginBtn loginBtn--google text-center">
                                                Login with Google
                                            </button>
                                            <a href="" class="icon-style">Forget your password?</a>
                                            <a href="" class="icon-style">Resend email confirmation</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-content" data-tab="tab2">
                                    <form class="row g-4">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-lg bg-light" id="name" name="name" placeholder="Enter Name*">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="email" class="form-control form-control-lg bg-light" id="email" name="email" placeholder="Enter Email*">
                                        </div>
                                        <div class="col-12">
                                            <input type="password" class="form-control form-control-lg bg-light" id="createpassword" name="createpassword" placeholder="Create Password*">
                                        </div>
                                        <div class="col-12">
                                            <input type="password" class="form-control form-control-lg bg-light" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password*">
                                        </div>

                                        <div class="col-12 d-flex flex-column">
                                            <button type="submit" class="btn bttn">Register</button>
                                        </div>
                                        <div class="d-flex flex-column text-center">
                                            <a href="" class="icon-style">Already have an account. Login?</a>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <span class="  position-relative">
                    <a href="" class="text-decoration-none fw-bold fs-4 text-dark" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-cart-shopping heading"></i></a>
                    <span class="position-absolute top-0 start-75 translate-middle badge rounded-pill bg-danger">
                        0
                    </span>
                </span>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <img src="assets/images/imperial-logo.webp" class="img-fluid" alt="">
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="row bttn rounded">
                            <div class="col text-center">Items</div>
                            <div class="col text-end">Quantity</div>
                            <div class="col text-end">Price</div>
                            <div class="col text-center">Remove</div>
                        </div>
                        <!-- <div class="row mt-2 pt-2 pb-2">
                            <div class="col-4 ">
                                <p class="m-0">Galaxy S10</p>
                                <small>Samsung</small>
                            </div>
                            <div class="col-4 text-center">
                                <div class="quantity">
                                    <a href="#" class="quantity__minus"><span>-</span></a>
                                    <input name="quantity" type="text" class="quantity__input" value="1" style="width: 50px; height:20px; margin: 0px; padding: 10px; border: none; text-align: center;">
                                    <a href="#" class="quantity__plus"><span>+</span></a>
                                </div>
                            </div>
                            <div class="col-3 text-center">
                                $323
                            </div>
                            <div class="col-1 text-center"><i class="bi bi-trash3-fill text-danger fs-5"></i></div>
                        </div> -->
                        <div class="row mt-3 d-flex justify-content-between">
                            <div class="col-3  d-flex  align-items-center p-0"> <img src="assets/images/shop-mbl1.webp" class="img-fluid" alt=""></div>
                            <div class="col-5  d-flex flex-column font  p-0"><small style="font-size: 16px;">Galaxy S10</small><small>sumsung</small>
                                <input type="number" class="form-control input1 text-center mt-2 w-50 p-0" min="1" aria-label="quantity" placeholder="1x">
                            </div>
                            <div class="col-3 p-0  d-flex justify-content-center   flex-column">
                                <span class="font">$1,160</span>

                            </div>
                            <div class="col-1  d-flex justify-content-center align-items-center"><i class="bi bi-trash text-danger fs-5"></i></div>
                        </div>
                        <ul class="p-0 mt-5">
                            <li class="d-flex justify-content-between">
                                <span>Total</span>
                                <span>1,160</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span class="fs-5 fw-bold icon-style">Grand Total</span>
                                <span class="fs-5 fw-bold icon-style">1,160</span>
                            </li>
                        </ul>
                        <div class="d-flex flex-column mt-3">
                            <a href="shipping.php" class="btn bttn font" type="submit">Order To Proceed</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>