<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Volar en globo @yield('title')</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/vendor.css">
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

</head>

<body>
        @include('includes.svgs')
        <div class="preloader-wrapper">
            <div class="preloader">
            </div>
        </div>
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
            <div class="offcanvas-header mt-3">
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <div class="order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-4">
                <span>Your Cart</span>
                <span class="badge bg-primary rounded-circle pt-2 text-white">3</span>
                </h4>

                <ul class="list-group mb-4">
                <li class="list-group-item d-flex justify-content-between align-items-center py-3 lh-sm">
                    <div>
                    <h6 class="my-0">Marketing Course</h6>
                    <small class="text-body-secondary">Brief description</small>
                    </div>
                    <span class="text-body-secondary">$120</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center py-3 lh-sm">
                    <div>
                    <h6 class="my-0">Strategy Course</h6>
                    <small class="text-body-secondary">Brief description</small>
                    </div>
                    <span class="text-body-secondary">$80</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center py-3 lh-sm">
                    <div>
                    <h6 class="my-0">Digital Course</h6>
                    <small class="text-body-secondary">Brief description</small>
                    </div>
                    <span class="text-body-secondary">$50</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span class="fw-bold">Total (USD)</span>
                    <strong>$250</strong>
                </li>
                </ul>

                <div class="d-grid my-5">
                <button class="btn btn-primary px-5 py-3" type="submit">Continue to checkout</button>
                </div>
            </div>
            </div>
        </div>
        <!-- Finish cart data  -->
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch"
            aria-labelledby="Search">
            <div class="offcanvas-header mt-3">
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

            <div class="order-md-last">
                <h4 class="text-primary text-uppercase mb-3">
                Busca tu vuelo
                </h4>
                <div class="search-bar border rounded-2 border-dark-subtle">
                <form id="search-form" class="text-center d-flex align-items-center" action="" method="">
                    <input type="text" class="form-control border-0 bg-transparent" placeholder="Buscas algo especial?" />
                    <iconify-icon icon="tabler:search" class="fs-4 me-3"></iconify-icon>
                </form>
                </div>
            </div>
            </div>
        </div>
        <main>
            {{ $slot }}
        </main>


 <footer id="footer">
    <div class="container padding-medium ">
      <div class="row">
        <div class="col-sm-6 col-lg-4 my-3">
          <div class="footer-menu">
            <a href="index.html">
              <img src="images/logo.png" alt="logo" class="img-fluid">
            </a>
            <div class="social-links mt-4">
              <ul class="d-flex list-unstyled ">
                <li class="me-4">
                  <a href="#">
                    <svg class="social-icon" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#facebook"></use>
                    </svg>
                  </a>
                </li>
                <li class="me-4">
                  <a href="#">
                    <svg class="social-icon" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#twitter"></use>
                    </svg>
                  </a>
                </li>
                <li class="me-4">
                  <a href="#">
                    <svg class="social-icon" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#instagram"></use>
                    </svg>
                  </a>
                </li>
                <li class="me-4">
                  <a href="#">
                    <svg class="social-icon" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#linkedin"></use>
                    </svg>
                  </a>
                </li>
                <li class="me-4">
                  <a href="#">
                    <svg class="social-icon" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#youtube"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-2 my-3">
          <div class="footer-menu">
            <h5 class=" fw-bold mb-4">Quick Links</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">Home</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">About us</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">Courses</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">Blogs</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">Contact</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-2 my-3">
          <div class="footer-menu">
            <h5 class=" fw-bold mb-4">About</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">How It Works</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">Pricing</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">Promotion</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">Affilation</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-2 my-3">
          <div class="footer-menu">
            <h5 class=" fw-bold mb-4">Help Center</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">Payments</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">FAQs</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">Checkout</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">Other</a>
              </li>

            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-2 my-3">
          <div class="footer-menu">
            <h5 class=" fw-bold mb-4">Contact Us</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">contact@yourcompany</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">+110 4587 2445</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">New York, USA</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div id="footer-bottom">
    <hr class="text-black-50">
    <div class="container">
      <div class="row py-3">
        <div class="col-md-6 copyright">
          <p>© 2024 TemplatesJungle. All rights reserved.</p>
        </div>
        <div class="col-md-6 text-md-end">
          <p>Free HTML Template by: <a href="https://templatesjungle.com/" target="_blank" class="fw-bold">
              TemplatesJungle</a> Distributed by: <a href="https://themewagon.com" target="_blank" class="fw-bold">
                ThemeWagon
              </a></p>
        </div>
      </div>
    </div>
  </div>


  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

  
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>