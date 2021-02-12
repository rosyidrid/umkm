<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>UMKM</title>
  </head>
  <body style="font-family: 'Open Sans', sans-serif;">
<!-- navbar for lg-->
<nav class="navbar navbar-expand-lg navbar-light mb-3 shadow-sm bg-white sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="img/logo.png" class="image" alt="" width="50" height="50">
    <strong>Alter Element</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav justify-content-center me-auto">
    </ul>
    <form class="d-flex me-auto mt-2" action="toko" method="POST" style="min-width: 40%;">
        <input class="form-control" style="border-radius: 15px;" type="search" placeholder="Searching..." aria-label="Search">
        <button class="btn border-none" style="margin-left:-50px;" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
      </form>
      <button class="btn btn-outline-dark mt-1 me-5 d-none d-lg-block d-xl-block d-xxl-block" data-bs-toggle="modal" data-bs-target="#exampleModal" style="min-width: 15%;">Login</button>
      <!-- tombol login -->
      <div class="container-fluid mt-1 me-5 d-lg-none"><hr>
      <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
  <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
  <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg> Login</button>
</div>
    </div>
  </div>
</nav>
<!-- end navbar -->
<!-- pop up login dan daftar-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Daftar</a>
        </li>
      </ul>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="tab-content" id="myTabContent">
      <!-- ini form login -->
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <form action="" method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Username/Email</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="password" class="col-form-label">Password</label>
            <input type="password" class="form-control" id="password">
          </div>
          <p>Lupa Password ?<a href="#reset"> Reset Password</a> </p>
          <button class="btn btn-primary w-100" type="submit">Login</button>
        </form>
        </div>
        <!-- ini tampilan daftar -->
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <form class="row g-3">
          <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Nama Usaha</label>
            <input type="text" class="form-control" id="validationDefault01" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="validationDefault02" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefaultUsername" class="form-label">Username</label>
            <div class="input-group">
              <span class="input-group-text" id="inputGroupPrepend2">@</span>
              <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
            </div>
          </div>
          <div class="col-md-12">
            <label for="validationDefault03" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="validationDefault03" required>
          </div>
          <div class="col-md-12">
            <label for="validationDefault05" class="form-label">Nomor Hp</label>
            <input type="text" class="form-control" id="validationDefault05" required>
          </div>
          <div class="col-md-12">
            <label for="validationDefault05" class="form-label">Email</label>
            <input type="email" class="form-control" id="validationDefault05" required>
          </div>
          <div class="col-md-12">
            <label for="validationDefault05" class="form-label">Password</label>
            <input type="password" class="form-control" id="validationDefault05" required>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
              <label class="form-check-label" for="invalidCheck2">
                Agree to terms and conditions
              </label>
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Daftar</button>
          </div>
        </form>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- end login -->
<!-- konten layar resolusi gede -->
<div class="container d-flex mb-3">
    <!-- konten kiri desktop -->
    <div class="container d-none d-sm-block d-md-block d-lg-block d-xl-block d-xxl-block">
    <h1 data-aos="fade-right"><strong>Great Companies Are Built <br> on Great Product</strong></h1><data-aos="fade-right" data-aos-duration="2000"hr>
    <p data-aos="fade-right" data-aos-duration="2200" class="h4">Buat Katalog Produk Anda <br><strong><h1 data-aos="fade-right" data-aos-duration="2300">Gratis</h1></strong><p data-aos="fade-right" data-aos-duration="2400">Tinggal Daftar dan Anda Sudah Punya Katalog Produk</p></p>
    <button class="btn btn-outline-dark mt-1 me-5" data-aos="fade-right" data-aos-duration="2800" data-bs-toggle="modal" data-bs-target="#daftar" style="min-width: 15%;">Buat Sekarang</button>
    </div>
    <!-- konten kiri mobile -->
    <div class="container-fluid d-sm-none">
    <p data-aos="fade-right"><strong>Great Companies Are Built on Great Product </strong></p><hr data-aos="zoom-in" data-aos-duration="2500">
    <p data-aos="fade-right" data-aos-duration="1700">Buat Katalog Produk Anda</p><p data-aos="fade-right" data-aos-duration="1900" style="margin-top: -20px;" ><strong>Gratis</strong></p><p data-aos="fade-right" data-aos-duration="2100" style="margin-top: -20px;">Tinggal Daftar dan Anda Sudah Punya Katalog Produk</p>
    <button class="btn btn-outline-dark mt-1" data-aos="fade-right" data-aos-duration="2800" data-bs-toggle="modal" data-bs-target="#daftar" style="min-width: 15%;">Buat Sekarang</button>
    </div>
    <div class="container-fluid" data-aos="fade-left">
    ​   <picture>
            <source srcset="img/gambar1.svg" type="image/svg+xml">
            <img src="img/gambar1.svg" class="img-fluid" alt="...">
        </picture>
    </div>
</div>
<!-- form buat/daftar -->
<div class="modal fade" id="daftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Daftar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="row g-3">
          <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Nama Usaha</label>
            <input type="text" class="form-control" id="validationDefault01" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="validationDefault02" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefaultUsername" class="form-label">Username</label>
            <div class="input-group">
              <span class="input-group-text" id="inputGroupPrepend2">@</span>
              <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
            </div>
          </div>
          <div class="col-md-12">
            <label for="validationDefault03" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="validationDefault03" required>
          </div>
          <div class="col-md-12">
            <label for="validationDefault05" class="form-label">Nomor Hp</label>
            <input type="text" class="form-control" id="validationDefault05" required>
          </div>
          <div class="col-md-12">
            <label for="validationDefault05" class="form-label">Email</label>
            <input type="email" class="form-control" id="validationDefault05" required>
          </div>
          <div class="col-md-12">
            <label for="validationDefault05" class="form-label">Password</label>
            <input type="password" class="form-control" id="validationDefault05" required>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
              <label class="form-check-label" for="invalidCheck2">
                Agree to terms and conditions
              </label>
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Daftar</button>
          </div>
        </form>
    </div>
  </div>
</div>
</div>
<!-- display umkm -->
<div class="container-fluid p-3"style="background-color: #c7ecee;margin-bottom:-20px;"><p class="h3" data-aos="zoom-in"><strong> We Find Business<br>UMKM For You</strong></p></div>
<div class="container-fluid d-flex" style="background-color: #c7ecee;">
      <!-- konten kiri vertical -->
      <div class="container mb-3">
      <div class="row row-cols-1 row-cols-md-1 g-1">
        <div class="col" data-aos="fade-right">
          <a href="profile">
          <div class="card shadow" style="border-radius:15px ;">
            <img src="img/umkm.svg" class="w-50 h-75" alt="...">
          </div>
          </a>
        </div>
        <div class="col" data-aos="fade-right" data-aos-duration="2300">
        <a href="#link">
          <div class="card shadow" style="border-radius:15px ;">
            <img src="img/umkm.svg" class="w-50 h-75" alt="...">
          </div>
          </a>
        </div>
      </div>
      </div>
      <!-- konten kanan horizontal -->
      <div class="container-fluid d-flex mb-3">
      <a href="" class="card me-3 shadow" style="border-radius:15px ;" data-aos="fade-up">
        <img class="card-img-top" src="img/umkm.svg" alt="">
      </a>
      <a href="" class="card shadow" style="border-radius:15px ;" data-aos="fade-up" data-aos-duration="2500">
        <img class="card-img-top" src="img/umkm.svg" alt="">
      </a>
      </div>
</div>
<div class="container-fluid text-center p-3" style="background-color: #c7ecee;"><a data-aos="zoom-in" href="toko" class="btn btn-outline-dark">Tampilkan Lebih Banyak</a></div>
<!-- popular produk -->
<div class="container mb-5 mt-3 text-center">
<p class="h4" data-aos="zoom-in"><strong>The Most Popular UMKM Product</strong></p>
<div id="carouselExampleInterval" class="carousel carousel-dark slide" data-bs-ride="carousel" data-aos="zoom-in">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="container-fluid d-flex mb-3">
      <a href="profile" class="card me-3 btn" style="border-radius:15px ;">
        <img class="card-img-top" src="img/umkm.svg" alt="">
      </a>
      <a href="" class="card me-3 btn" style="border-radius:15px ;">
        <img class="card-img-top" src="img/umkm.svg" alt="">
      </a>
      <a href="" class="card btn" style="border-radius:15px ;">
        <img class="card-img-top" src="img/umkm.svg" alt="">
      </a>
      </div>
    </div>
    <div class="carousel-item">
    <div class="container-fluid d-flex mb-3">
      <a href="" class="card me-3 btn" style="border-radius:15px ;">
        <img class="card-img-top" src="img/umkm.svg" alt="">
      </a>
      <a href="" class="card me-3 btn" style="border-radius:15px ;">
        <img class="card-img-top" src="img/umkm.svg" alt="">
      </a>
      <a href="" class="card btn" style="border-radius:15px ;">
        <img class="card-img-top" src="img/umkm.svg" alt="">
      </a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
</div>
<!-- footer -->
<div class="container-fluid" style="background-color: #c7ecee;margin-top:100px;">
<!-- logo ae -->
<div class="container text-center p-3">
<a class="navbar-brand btn" href="#">
    <img src="img/logo.png" class="image" alt="" width="50" height="50">
    <strong>Alter Element</strong></a>
</div>
<!-- tulisan bawah logo -->
<div class="container d-flex text-center">
<div class="container">
<p><strong>Overview</strong></p>
<p><a href="" >Shipping</a></p>
<p><a href="">Refund</a></p>
<p><a href="">Promotion</a></p>
</div>
<div class="container">
<p><strong>Company</strong></p>
<p><a href="" >About</a></p>
<p><a href="">Career</a></p>
<p><a href="">Contact Us</a></p>
</div>
<div class="container">
<p><strong>Explore</strong></p>
<p><a href="" >Terms & Condt</a></p>
<p><a href="">Privacy Policy</a></p>
<p><a href="">For Developer</a></p>
</div>
</div>
<div class="container text-center p-3">
<p>Copyright 2021-All Rights Reserved UMKM by Alter Element</p>
</div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script>
      AOS.init({duration:1200});
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>