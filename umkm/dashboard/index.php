<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../src/style.css" rel="stylesheet" >
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
  <!-- dashboard -->
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#9776;</a>
<!-- Nav tabs -->
<img src="../img/logo.png" alt="" class="rounded-circle" style="width: 90px;height:90px;">
<h4 class="text-white"><strong>Nama Toko</strong></h4>
<ul class="nav flex-column mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link text-white active w-100" style="border: none;background-color:#111;" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link w-100 text-white" id="pills-profile-tab"  style="border: none;background-color:#111;" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Katalog</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link w-100 text-white" id="pills-contact-tab"  style="border: none;background-color:#111;" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
  </li>
</ul>
<a href="../src/logout.php" style="margin-left: -35px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
  <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
  <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg> logout</a>
</div>
<div class="container-fluid shadow-sm row">
  <div class="col-5">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>
<h1 class="col-7">Dashboard</h1>
</div>
<!-- end dashboard -->
<!-- konten -->
<!-- Tab panes -->
<div class="tab-content container mt-3" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">Profile</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Katalog</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
</div>
<!-- footer -->
<div class="container-fluid" id="footer" style="background-color: #c7ecee;margin-top:100px;">
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
    <script src="../src/javascript.js"></script>
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