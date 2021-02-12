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

    <title>Nama Toko</title>
  </head>
  <body style="font-family: 'Open Sans', sans-serif;">
<!-- detail info -->
<div class="container-fluid row mt-5 mb-3">
<!-- ini foto -->
<div class="col-md-5 mt-3 p-3 text-center">
<img src="../img/logo.png" class="rounded-circle shadow d-none d-sm-inline d-md-inline d-lg-inline d-xl-inline d-xxl-inline" alt="" width="200" height="200">
<!-- tampilan logo mobile -->
<img src="../img/logo.png" class="rounded-circle shadow d-sm-none" alt="" width="150" height="150">
</div>
<div class="col-md-7">
<h1 class="text-center">Nama Toko</h1>
<div class="container-fluid text-center"> <a href="#linkwa" class="btn btn-outline-primary">Chat Sekarang</a> </div><hr>
<p>ini detail tokonya</p>
</div>
</div>
<hr>
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
<!--search -->
<div class="container mt-3 mb-3 d-flex justify-content-center p-2">
<form class="d-flex mt-2 w-50">
        <input class="form-control" style="border-radius: 15px;" type="text" placeholder="Cari Produk" aria-label="Search">
        <button class="btn border-none" style="margin-left:-50px;" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button></form>
</div>
<!-- end search -->
<!-- konten produk -->
<div class="row row-cols-1 row-cols-2 row-cols-md-4 g-md-4 g-2 mb-5">
  <div class="col">
    <div class="card h-100">
      <img src="../img/umkm.svg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><strong>Nama Produk</strong></h5>
        <h5>Rp 19000</h5><hr>
        <p class="card-text">Keterangan produk</p>
      </div>
      <div class="card-footer text-center"><a href="#linkwa" class="btn btn-primary">Pesan Sekarang</a></div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../img/umkm.svg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nama Produk</h5>
        <p class="card-text">Keterangan produk</p>
      </div>
      <div class="card-footer text-center"><a href="#linkwa" class="btn btn-primary">Pesan Sekarang</a></div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../img/umkm.svg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nama Produk</h5>
        <p class="card-text">Keterangan produk</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../img/umkm.svg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nama Produk</h5>
        <p class="card-text">Keterangan produk</p>
      </div>
    </div>
  </div>
</div>
<!-- footer -->
<div class="container-fluid" style="background-color: #c7ecee;margin-top:100px;">
<!-- logo ae -->
<div class="container text-center p-3">
<a class="navbar-brand btn" href="../">
    <img src="../img/logo.png" class="image" alt="" width="50" height="50">
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