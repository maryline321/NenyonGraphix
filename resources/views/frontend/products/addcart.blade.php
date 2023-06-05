<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nenyon graphix</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        
        <i class="bx bx-envelope d-flex align-items-center"><a href="mailto:contact@example.com" style="font-weight: bolder;">cherchebet@gmail.com</a></i>
        <i class="bx bx-phone-call d-flex align-items-center ms-4"><span style="font-weight: bolder;">0752088519</span></i>
        <i class="bx bx-logo d-flex align-items-center ms-4" style="font-weight: bolder;"><span>Nenyon graphix</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>


  <main id="main">
  <footer id="footer">

<div class="footer-top">
<div class="section-title">
    <h2>Collections/ {{ $products->category->name }} / {{ $products->name}}</h2>
  </div>
  <div class="container">
    <div class="row">

      <div class="col-lg-6 col-md-6 footer-contact">
      <div class="member">
            <div class="member-img">
              <img src="{{ asset('images/uploads/product/'.$products->image) }}" alt="" style="max-width: 100%; height: auto;">
            </div>
            <div class="member-info">

          

            </div>
          </div>
      </div>

      <div class="col-lg-6 col-md-6 footer-links">
        <div class="member">
        
            <div class="member-info">
              <h2 class="mb-0" style="font-size: 14px;">
                {{ $products->name }}
                @if($products->trending == '1')
                <label class="float-end badge bg-danger trending_tag" style="font-size: 14px;">Trending</label>
               @endif

              </h2>
              <hr>

              <label class="me-3">Original price: <s>Ks {{ $products->original_price }}</s></label><br>
              <label class="me-3">Selling price: Ks {{ $products->selling_price }}</label>

              <p class="mt-3">
              {{ $products->small_descrription }}
              </p>
              <hr>
              @if($products->quantity > 0)
                  <label class="badge bg-success">In Stock</label>
                  @else
                  <label class="badge bg-danger">Out of Stock</label>
          @endif

          <div class="row mt-2">

            <div class="col-md-3">
              <label for="Quantity">Quantity</label>
              <div class="input-group text-center mb-3">
                <span class="input-group-text decrement-btn">-</span>
                <input type="text" name="quantity" value="1" class="form-control">
                <span class="input-group-text increment-btn">+</span>
              </div>

            </div>

            <div class="col-md-10">
              <br>
              <button type="button" class="btn btn-success me-3 float-start">Add to wishlist <i class="fa fa-heart"></i></button>
              <button type="button" class="btn btn-primary me-3 float-start">Add to Cart <i class="fa fa-shopping-cart"></i></button>

            </div>

          </div>

            </div>
          </div>


      </div>
      <hr>
      <div class="member-info">
        <h5>Description</h5>

      {{ $products->description }}

</div>

    </div>
  </div>
</div>

</footer><!-- End Footer -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Nenyon Graphic<span>.</span></h3>
            <p>
              Luthuli Lane <br>
              Nairobi<br>
              Kenya <br><br>
              <strong>Phone:</strong> 0752088519<br>
              <strong>Email:</strong> cherchebet.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing Materials</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Branding</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Mugs & Water Bottles</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Adhesive Label stickers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Letterheads</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Nenyon Graphic</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       Designed by <a href="">Nenyon Graphic</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

  <script>
    

  </script>

</body>

</html>