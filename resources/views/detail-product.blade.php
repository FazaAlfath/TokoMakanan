<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Import Font -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <script src="https://kit.fontawesome.com/4d20f1062f.js" crossorigin="anonymous"></script>
    <title>Hello, world!</title>

    <style>
      /* Navbar */
.navbar-brand {
    font-family: Viga, sans-serif;
    margin: 20px 0 0 10px;
    margin-top: 2px;
    display: flex;
}

.nav-link {
  font-family: 'Josefin Sans', sans-serif;
    margin-right: 30px;
    margin: 0 0 0 10px;
}

.navbar-toggler {
    float: right;
    margin-top: -38px;
}
.nav-link:hover::after {
  content: '';
  display: block;
  border-bottom: 3px solid white;
  width: 30%;
  padding-bottom: 5px;
  margin-top: -8px;
}
.Logo-Toko {
  float: left;
}
.navbar {
  background-color: #025955;
}
/* Dekstop vesion */
@media (min-width: 992px) {
  #navbarNavAltMarkup {
    margin-top: -1px;
  }
 
  .navbar-brand {
    float: left;
    margin-top: -1px;
  }
  
  .collapse {
    float: right;
    margin-right: 30px;
  }
  
  .nav-link {
    /* font-size: 32px; */
    font-size: 1rem;
    margin-right: 30px;
  }
  
  .nav-link:hover::after {
    content: '';
    display: block;
    border-bottom: 3px solid white;
    width: 50%;
    margin: auto;
    padding-bottom: 5px;
    margin-top: -8px;
  }
  .navbar {
    background-color: #025955;
  }
}
/* Akhir-Navbar */

      /*--------------------------------------------------------------
      # Footer
      --------------------------------------------------------------*/
      #footer {
  
  background: #025955;
  padding: 0 0 30px 0;
  color: #eee;
  font-size: 14px;
  margin-top: 50px;
}

#footer .footer-top {
  background: #0f4542;
  padding: 60px 0 30px 0;
}

#footer .footer-top .footer-info {
  margin-bottom: 30px;
  margin-right: 40px;

}

#footer .footer-top .footer-info h3 {
  font-size: 34px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-family: "Montserrat", sans-serif;
  color: #fff;
  font-weight: 400;
  letter-spacing: 3px;
  text-transform: uppercase;
}

#footer .footer-top .footer-info p {
  font-size: 13px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Montserrat", sans-serif;
  color: #ecf5ff;
}

#footer .footer-top h4 {
  font-size: 14px;
  font-weight: bold;
  color: #fff;
  text-transform: uppercase;
  position: relative;
  padding-bottom: 10px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
  margin-right: 40px;

}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul li {
  padding: 8px 0;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #ecf5ff;
}

#footer .footer-top .footer-links ul a:hover {
  color: #74b5fc;
}

#footer .footer-top .footer-contact {
  margin-bottom: 30px;
}

#footer .footer-top .footer-contact p {
  line-height: 26px;
}

#footer .footer-top .footer-newsletter {
  margin-bottom: 30px;
}
#footer .copyright {
  text-align: center;
  padding-top: 30px;
}

#footer .credits {
  text-align: center;
  font-size: 13px;
  color: #f1f7ff;
}

#footer .credits a {
  color: #bfddfe;
}

#footer .credits a:hover {
  color: #f1f7ff;
}
          /* END */
    </style>
  </head>
  <body>
     {{-- Navbar --}}
     <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
      <div class="container-fluid">
        <img class="Logo-Toko" src="../img/logo/prof.png" width="35px" alt="logo">
          <a style="color: white" class="navbar-brand" href="#">AMSTORE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a style="color: white" class="nav-link active" aria-current="page" href="#">Beranda</a>
              <a style="color: white" class="nav-link" href="#tentang">Tentang Kami</a>
              <a style="color: white" class="nav-link" href="#toko">Toko</a>
              <a style="color: white" class="nav-link" href="#kontak">Kontak</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    {{-- Akhir Navbar --}}
<!--Main layout-->
<main class="mt-5 pt-4">
  <div class="container dark-grey-text mt-5">

    <!--Grid row-->
    <div class="row wow fadeIn">

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <img src="/product/{{ $product->img }}" class="img-fluid" alt="">

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-6 mb-4" style="font-family: 'Josefin Sans', sans-serif;">

        <!--Content-->
        <div class="p-4">

          <div class="mb-3">
            <h2>{{ $product->name }}</h2>
          </div>

          <p class="lead">
             
            <span>Rp.{{ $product->price }}</span>
          </p>

          <p class="lead font-weight-bold">Description</p>

          <p>{{ $product->description }}</p>

          <form class="d-flex justify-content-left">
            <!-- Default input -->
            {{-- <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px"> --}}
            <h5 style=" margin-top: 6px; margin-right: 5px">Stok /</h5>  <h5 style="margin-right: 30px; margin-top: 6px"> {{ $product->stock }}</h5>

            <a href="https://api.whatsapp.com/send?phone=6285156244622" class="btn btn-primary btn-md my-0 p" style="margin-right: 20px;">Order Sekarang
              <i class="fas fa-shopping-cart ml-1"></i>
            </a>

          </form>

        </div>
        <!--Content-->

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

    <!-- Default form login -->
  </div>

{{-- Footer --}}
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 footer-info">
          <h3>AMSTORE</h3>
          <p>sebuah website toko online yang menawarkan aneka makanan dan minuman produk rumahan.</p>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <ul class="service">
              <h4>Layanan Kami</h4>
              Pembelian Eceran & Grosir <br>
              Menerima Pesan Antar <br>
              Pemesanan Barang <br>
              Produk Original <br>
          </ul>   
        </div>

        <div class="col-lg-3 col-md-6 footer-info">
          <h4>Contact Us</h4>
          <p>
            <strong>Alamat :</strong> Jl. Kukun Raya (Gerbang Perumahan Graha Teluk Jakarta), Periuk, Tangerang <br>
            <strong>Nomor Telepon :</strong> +62 851-5624-4622<br>
            <strong>Email :</strong> masamahrajakuliner21@gmail.com<br>
          </p>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      © Copyright <strong>AMSTORE2021</strong>. 
    </div>
    <div class="credits">
      <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
      -->
     
    </div>
  </div>
</footer>
{{-- Akhir_Footer --}}
    

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Initializations -->
<script type="text/javascript">
  // Animations initialization
  new WOW().init();

</script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>