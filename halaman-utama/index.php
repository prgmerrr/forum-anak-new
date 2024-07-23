<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.21.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap"
        rel="stylesheet" />
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
    /* Custom Styles */
    .sec1 {
        position: relative;
        z-index: 2;
    }

    body {

        scroll-behavior: smooth;
        position: relative;
    }

    /* Adjust padding for the header */

    /* Adjust the logo and other styles as needed */
    .logo a {
        color: #c61a1a;
        /* Change text color */
    }

    .navbar-nav {
        background-color: #fef8f5;
    }

    .navbar-nav a {
        font-size: 18px;
        font-weight: bold;
        font-family: "Open Sans", sans-serif;
        text-decoration: none;
        color: #000;

    }

    /* Adjust the hover color for the navbar links */
    .navbar-nav a:hover {
        border-color: #ffeeaf;
        background-color: #ffeeaf;
        color: #000;
    }

    .navbar-nav a {
        border: 2px solid transparent;
        padding: 3px;
        border-radius: 10px;
        margin: 0 0 0 0;
        transition: 0.3s;
    }

    /* SEARCH FORM */
    #search-form {
        position: relative;
        margin: -0.4rem 0 0 0;
    }

    /* Adjust other styles as needed */



    .img-fluid {
        max-width: 100%;
        /* Make the image responsive */
        height: auto;
    }

    body {

        scroll-behavior: smooth;
        position: relative;
    }


    /* Set a fixed height for the carousel on larger screens */


    .sec1 {
        background-image: url("img/paperbg.png");
        /* Add other background properties as needed */
        background-size: cover;
        /* Adjust as needed */
        background-position: center;
        /* Adjust as needed */
        background-repeat: no-repeat;
        /* Adjust as needed */
    }


    .footer a {
        color: #323232;
        text-decoration: none;
    }

    .footer {
        background-color: #FFF3C4;
        padding: 20px 0;
        color: #323232;
        text-decoration: none;
    }

    .judul-1 {
        color: #ffd25e;
        font-family: "Open Sans", sans-serif;
        font-weight: bold;
        text-shadow: 2px 2px 4px #805c00;
        /* Adjust values for the shadow effect */
    }

    .text-1 {
        color: #7f0500;
        font-family: "open sans", sans-serif;
        text-shadow: 2px 2px 6px #000000c7;
    }

    .judul-2 {
        color: #ffd25e;
        font-family: "Open Sans", sans-serif;
        font-weight: bold;
        text-shadow: 2px 2px 4px #805c00;
        /* Adjust values for the shadow effect */
    }

    .text-2 {
        color: #7f0500;
        font-family: "open sans", sans-serif;
        text-shadow: 2px 2px 6px #000000c7;
    }

    .logo {
        display: flex;
        align-items: center;
        margin: 10px 0 0 0px;
    }

    .logo a {
        text-decoration: none;
        display: flex;
        align-items: center;
        color: #fdce20;
    }

    .logo-foranggis {
        width: 60px;
        height: auto;
        margin-left: 30px;
    }


    .navbar-toggler-icon {
        background-color: #fdce20;
        color: #22668d;
    }

    .navbar-toggler-icon {
        background-color: #fef8f5;
    }

    .logo {
        width: 90px;
        height: 80px;
    }

    nav.navbar {
        background-color: #fef8f5;
    }
    </style>
    <title>Foranggis</title>
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg  " style=" ">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="#">
                <img src="img/logo-foranggis.png" alt="Logo" width="50" height="44" class="" />
                <b style="color: #fdce20"> Foranggis</b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  ms-auto =mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Event</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Fitur
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Nibiru</a></li>
                            <li><a class="dropdown-item" href="#">Laporan</a></li>
                            <li><a class="dropdown-item" href="#">Sofo</a></li>
                            <li><a class="dropdown-item" href="#">Aspirasi</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav> -->

        <!-- Navbar Start -->
        <div class="container-fluid">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand ms-4" href="#">
                <img src="img/logo-foranggis.png" alt="Logo" width="80" height="70" class="" />
                <b style="color: #fdce20 " > Foranggis</b>
            </a>
          <button
            type="button"
            class="navbar-toggler ms-auto me-0"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
              <a href="#" class="nav-item nav-link active">About Us</a>
              <a href="#" class="nav-item nav-link">Event</a>
              <a href="#" class="nav-item nav-link">Contact</a>
              <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  >Fitur</a
                >
                <div class="dropdown-menu bg-light mt-2">
                  <a href="#" class="dropdown-item">Nibiru</a>
                  <a href="#" class="dropdown-item">Laporan</a>
                  <a href="#" class="dropdown-item">SOFO</a>
                  <a href="#" class="dropdown-item"
                    >Aspirasi</a
                  >
                  <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
              </div>
            </div>
            <butaton
              type="button"
              class="btn text-white p-0 d-none d-lg-block"
              data-bs-toggle="modal"
              data-bs-target="#searchModal"
              ><i class="fa fa-search"></i
            ></butaton>
          </div>
        </nav>
      </div>
    </div>
    <!-- Navbar End -->

    <style>
    /********** Template CSS **********/
    :root {
        --primary: #D81324;
        --secondary: #0B2154;
        --light: #F2F2F2;
        --dark: #111111;
    }

    .fw-medium {
        font-weight: 600 !important;
    }

    .back-to-top {
        position: fixed;
        display: none;
        right: 45px;
        bottom: 45px;
        z-index: 99;
    }


    /*** Spinner ***/
    #spinner {
        opacity: 0;
        visibility: hidden;
        transition: opacity .5s ease-out, visibility 0s linear .5s;
        z-index: 99999;
    }

    #spinner.show {
        transition: opacity .5s ease-out, visibility 0s linear 0s;
        visibility: visible;
        opacity: 1;
    }


    /*** Button ***/
    .btn {
        font-weight: 500;
        text-transform: uppercase;
        transition: .5s;
    }

    .btn.btn-primary,
    .btn.btn-secondary {
        color: #FFFFFF;
    }

    .btn-square {
        width: 38px;
        height: 38px;
    }

    .btn-sm-square {
        width: 32px;
        height: 32px;
    }

    .btn-lg-square {
        width: 48px;
        height: 48px;
    }

    .btn-square,
    .btn-sm-square,
    .btn-lg-square {
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: normal;
        border-radius: 2px;
    }




    /*** Header ***/
    .carousel-caption {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, .7);
        z-index: 1;
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 10%;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        width: 3rem;
        height: 3rem;
    }

    @media (max-width: 768px) {
        #header-carousel .carousel-item {
            position: relative;
            min-height: 450px;
        }

        #header-carousel .carousel-item img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    }



    .page-header {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .page-header-inner {
        background: rgba(0, 0, 0, .7);
    }

    .breadcrumb-item+.breadcrumb-item::before {
        color: var(--light);
    }


    .carousel {
        border-radius: 50%;
    }

    @media (max-width: 768px) {
        .ilang {
            display: none;
        }


        .hp1 {
            font-size: 40px;
        }

    }

    .btn-primary {
        background-color: #ffd25e;
    }
    </style>

     <!-- ==================== CAROUSEL ============================================================================================================================================================================================================================================================= -->
     <section>
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
          
          <!-- <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="4"
            aria-label="Slide 1"
          ></button> -->
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/FORANGGIS CAROUSEL/1.png" class="d-block w-100" alt="..." />
            <!-- <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div> -->
          </div>
          <div class="carousel-item">
            <img src="img/FORANGGIS CAROUSEL/2.png" class="d-block w-100" alt="..." />
            <!-- <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div> -->
          </div> 
          <div class="carousel-item">
            <img src="img/FORANGGIS CAROUSEL/3.png" class="d-block w-100" alt="..." />
            <!-- <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>
                Some representative placeholder content for the second slide.
              </p>
            </div> -->
          </div>
          
        </div>
        <button
          class="carousel-control-prev style"" "
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!-- ==================== CAROUSEL END ============================================================================================================================================================================================================================================================= -->


    <!-- <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 d-block" src="img/WhatsApp Image 2024-01-25 at 18.42.15_dcc27569.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">FORANGGIS PODCAST
                                    </h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">PACARAN, PERLU
                                        GAKSIH??
                                    </h1>
                                    <a href="https://youtu.be/-9p2G5ixy0Q?si=ZYA-YJiDNKdlBPsb"
                                        class="btn btn-primary py-3 px-4 animated slideInDown text-center">
                                        Tonton <i class="fa fa-arrow-right ms-3"></i>
                                    </a>

                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/WhatsApp Image 2024-01-25 at 18.42.15_dcc27569.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img class="w-100" src="img/WhatsApp Image 2024-01-25 at 18.30.51_ef4a663f.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown hp1">CIMANGGIS FAIR
                                    </h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown ilang">Acara yang
                                        diadakan rutin satu tahun sekali
                                    </h1>
                                    <a href=""
                                        class="btn btn-primary py-1 mt-4 px-5 animated slideInDown btn-hp ">Konsultasi
                                        gratis<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/pngwing.com.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/WhatsApp Image 2024-01-25 at 18.38.26_919e2998.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">FORANGGIS SOSIAL


                                    </h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown asu">Disini kami
                                        menjalin
                                        kerjasama dengan Taman Baca
                                    </h1>
                                    <a href="https://wa.link/6ukhla"
                                        class="btn btn-primary py-3 px-5 animated slideInDown">Konsultasi gratis<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/WhatsApp Image 2024-01-25 at 18.38.26_919e2998.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> -->
    <!-- End Hero -->
    <section class="mt-5">
        <?php
            require_once "index copy.html";
        ?>
    </section>
    <?php
    require_once "slider.php";
    ?>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-3">
                    <h2>Foranggis</h2>
                    <p class="mt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, omnis impedit sed, 
                        quas veritatis praesentium quo esse dolores fuga et consequuntur modi aut itaque rerum.</p>
                </div>
                <div class="col-md-3">
                    <h4>Contact</h4>
                    <p class="mt-4"><i data-feather="map-pin" class="me-2"></i>Kantor Kecamatan Cimanggis, Kota Depok, Jawa Barat</p>
                    <p><i data-feather="phone" class="me-2"></i>+62 851-7447-2877</p>
                    <p><i class="me-2"data-feather="mail"></i>info@example.com</p>
                </div>
                <div class="col-md-3">
                    <h4 class="text-decoration: none">Quick Link</h4>
                    <a href="#"><p class="mt-4"><i data-feather="chevron-right"></i>Home</p></a>
                    <a href="#"><p><i data-feather="chevron-right"></i>About Us</p></a>
                    <a href="#"><p><i data-feather="chevron-right"></i>Event</p></a>
                    <a href="#"><p><i data-feather="chevron-right"></i>Contact</p></a>
                </div>
                <div class="col-md-3">
                    <h4>Service</h4>
                    <a href="#"><p class="mt-4"><i data-feather="chevron-right"></i>Nibiru</p></a>
                    <a href="#"><p><i data-feather="chevron-right"></i>Laporan</p></a>
                    <a href="#"><p><i data-feather="chevron-right"></i>Sofo</p></a>
                    <a href="#"><p><i data-feather="chevron-right"></i>Aspirasi</p></a>
                </div>
            </div>
        </div>
    </footer>
    <script>
      feather.replace();
    </script>

</body>

</html>