<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Import Font -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <!-- Import Icons -->
    <script src="https://kit.fontawesome.com/4d20f1062f.js" crossorigin="anonymous"></script>
    <title>Hello, world!</title>
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

      {{-- Carousel --}}
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
           <div class="banner" style="background-image: url(../img/assets/wingko.png)"></div>
           <div class="carousel-caption">
             <h2>Wingko Babat</h2>
             <h3>Makanan yang terbuat dari kelapa, cocok untuk cemilan. </h3>
             <p><a class="btn btn-primary" href="#unggulan">Readmore</a></p>
           </div>
          </div>
          <div class="carousel-item">
            <div class="banner" style="background-image: url(../img/assets/madu.jpeg)"></div>
            <div class="carousel-caption">
              <h2>Madu Jawa</h2>
              <h3>Minuman antibiotik, cocok untuk meningkatkan imun. </h3>
              <p><a class="btn btn-primary" href="#unggulan">Readmore</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="banner" style="background-image: url(../img/assets/susu.png)"></div>
            <div class="carousel-caption">
              <h2>Susu Kambing</h2>
              <h3>Minuman yang dibuat dari susu Kambing, cocok untuk mengobati penyakit asma.</h3>
              <p><a class="btn btn-primary" href="#unggulan ">Readmore</a></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      {{-- Akhir-Carousel --}}
      <section id="bgj">
      <div class="container">
        <div class="row justify-content-center"></div>
      </div>
      </section>
      {{-- Card-Product --}} 
    <section id="card-product">
      <div class="row justify-content-center">
            <div class="col-lg-10 konten">
              <div class="row">
                <div class="text-product">
                  <h3 id="toko">Produk Unggulan</h3>
                  {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, eligendi.</p> --}}
                </div>

                <div class="row" style="justify-content: space-evenly; margin-top: 50px; margin-bottom: 30px; display: flex">
                  @foreach ($products as $product)
                
                  <div class="card shadow">
                  <div class="inner">
                    <img src="/product/{{$product->img}}" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body"> 
                    <h5 class="card-title1"><a style="text-decoration: none" href="/product/{{ $product->slug }}">{{ $product->name }}</a></h5>
                    <p class="card-text1">{{ $product->description }}</p>
                    <p class="card-text1">Stok / {{ $product->stock }}</p>
                    <p class="card-text1">Rating : {{ $product->rating }}</p>
                    <p class="btn btn-primary btn1">Rp. {{ $product->price }}</p>
                  </div>
                </div>

                @endforeach

              </div>
            </div>
      </div>
    </section>
    {{-- Akhir-Card-Product --}}
      
{{-- Parallax --}}
<section id="prlx">
  <div class="container">
    
    <div class="parallax">
    </div>
    
  </div>
</section>

  {{-- Akhir-Parallax --}}

      {{-- About Us --}}
    <section id="mu-about-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-about-us-area">           
              <div class="row">
                <!-- Start Title -->
                <div align="center" class="mu-title" id="companyProfile">
                  <h2 id="tentang">Profil Toko</h2>
                </div>
                <!-- End Title -->
                <div class="col-lg-6 col-md-6">
                  <div class="mu-about-us-right mb-3" style="margin-bottom: 25px;">                            
                    <img src="../img/pp.jpeg" alt="img-about" style="width: 100%; margin-top: 6px">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="mu-about-us-left">
                    <p align="justify">AMSTORE adalah sebuah toko yang menjual aneka makanan dan minuman buatan sendiri, dijejaring sosial media atau internet.
                      Kelebihan toko ini yaitu pengiriman yang cepat serta produk yang dipesan sesuai dengan gambar, pemesanan produk secara PO (Pre Order)
                      via WhatsApp. Pemesanan dalam kota seperti pasarkemis dan sekitarnya bebas ongkos kirim, sedangkan diluar jangkauan daeerah tersebut
                      akan ada biaya ongkos kirim. Pesanan diluar kota melal  ui jasa pengiriman dan biaya pengiriman ditanggung oleh konsumen, Produk akan dikirim
                      berupa makanan siap saji dan bahan mentah yang siap di olah.</p>
                  </div>
                  <div class="moto-toko">
                    <h3>#GAKCODGAKJAJAN</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- Akhir-About Us --}}


    {{-- Intro-Product --}} 
      <section id="intro-product">
        <div class="row justify-content-center">
          <div class="col-lg-10 konten">
            <div class="row">
              <div class="text-product">
                <h3 id="unggulan">Produk Populer</h3>
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, eligendi.</p> --}}
              </div>
              <div id="nav2" class="container"  style="margin-left: -10px">
                <div class="row justify-content-center">
                  <nav class="navbar navbar-expand-lg navbar-light" style="width: 86%;">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">AMSTORE</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">All</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Menu :
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </li>
                        </ul>
                        <form class="d-flex" method="POST">
                          <input class="form-control me-2" type="text" name="keywords" autocomplete="off"  placeholder="Ex:Nasi Kebuli" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                      </div>
                    </div>
                  </nav>
                </div>
              </div>

                  <div class="row" style="justify-content: space-evenly;  display: flex">
                    @foreach ($products_top as $product)
                        
                      <div class="card shadow">
                        <div class="inner">
                          <img src="/product/{{$product->img}}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body"> 
                          <h5 class="card-title1"><a style="text-decoration: none" href="/product/{{$product->slug}}">{{$product->name}}</a></h5>
                          <p class="card-text1">{{$product->description}}</p>
                          <p class="card-text1">Stok / {{$product->stock}}</p>
                          <p class="card-text1">Rating : {{$product->rating}}</p>
                          <p class="btn btn-primary btn1">Rp.{{ $product->price }}</p>
                        </div>
                      </div>
                    
                    @endforeach

                </div>
              </div>
        </div>
        </div>
      </section>
      {{-- Akhir-Intro-Product --}}

      

      
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <div class="elfsight-app-a1b6a9e0-f3e0-4aad-94f8-fdaa17401fe4"></div> 
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

    <script type="text/javascript">

      const modalOrder = document.querySelector('#modal-order');
      const btnModalOrder = document.querySelector('.container ul button#btnModalOrder');
      const btnCloseModal = document.querySelector('#modal-order button.close-modal');
  
      btnModalOrder.addEventListener('click', function(){
          modalOrder.style.display = "flex";
      });
  
      btnCloseModal.addEventListener('click', function(e){
          e.preventDefault();
          modalOrder.style.display = "none";
      });
  
  </script>

  <?php 
  if (isset ($POST["search"])) {
    $product = search($_POST["keyword"]);
  }
  ?>
  </body>
</html>