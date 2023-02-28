<!doctype html>
<html lang="en">
  <head>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body style="background:grey">
  <div class="container mt-5">
    <h1 class="text-black">Selamat Datang</h1>
    <h4 class="text-black">Admin</h4>
    <div class="card text-center">
    <h1></h1>
    <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Pengaduan Masyarakat</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=".php"><ion-icon name="home-outline"></ion-icon>Home</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><ion-icon name="library-outline"></ion-icon>
              Admin
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="data_pengaduan.php">Pengaduan</a></li>
              <li><a class="dropdown-item" href="data_tanggapan.php">Tanggapan</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Tambah Petugas</a></li>
            </ul>
            <li class="nav-item">
            <a class="nav-link" href="logout.php"><ion-icon name="exit-outline"></ion-icon>Logout</a>
          </li>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
</nav>
</div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
<div class="container">
    <h3 class="mt-3">Dashboard</h3>
    <div class="row mt-3">
        <div class="col-md-3 mt-3">
            <div class="card">
                <div class="card-header">Masyarakat</div>
                <div class="card-body">10 Orang</div>
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="card">
                <div class="card-header">Pengaduan</div>
                <div class="card-body">10 Aduan</div>
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="card">
                <div class="card-header">Tanggapan</div>
                <div class="card-body">10 Tanggapan</div>
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="card">
            <div class="card-header">Petugas</div>
            <div class="card-body">10 Pengguna</div>
        </div>
    </div>

    </div>
</div>