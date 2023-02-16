<?php

$db = mysqli_connect("localhost","root","","pengaduan_masyarakat");

$result = mysqli_query($db, "SELECT * FROM pengaduan");
// var_dump($result);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body style="background:grey">
  <div class="container mt-5">
    <h1 class="text-black">Selamat Datang</h1>
    <h4 class="text-black">Catatan Pengaduan</h4>
    <div class="card text-center">
    <h1></h1>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php"><ion-icon name="heart"></ion-icon>Home</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><ion-icon name="library-outline"></ion-icon>
            PILIHAN
          </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="masyarakat.php"><ion-icon name="caret-forward-outline"></ion-icon>Masyarakat</a></li>
              <li><a class="dropdown-item" href="petugas/tampilan.php"><ion-icon name="caret-forward-outline"></ion-icon>Petugas</a></li>
              <li><a class="dropdown-item" href="admin/admin.php"><ion-icon name="caret-forward-outline"></ion-icon>Admin</a></li>
              -->
              <!-- <li><hr class="dropdown-divider"></li> -->
              <li><a class="dropdown-item" href="logout.php"><ion-icon name="backspace-outline"></ion-icon>Logout</a></li>
            </ul>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php"><ion-icon name="close-circle-outline"></ion-icon>kembali</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"></a>
        </li>
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>