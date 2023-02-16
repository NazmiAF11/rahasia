<?php

$db = mysqli_connect("localhost","root","","pengaduan_masyarakat");

$result = mysqli_query($db, "SELECT * FROM pengaduan");
// var_dump($result);
?>
<!doctype html>
<html lang="en">
  <head>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
  <body style="background:grey">
  <div class="container mt-5">
    <h1 class="text-black">Selamat Datang</h1>
    <h4 class="text-black">Laporan Pengaduan</h4>
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
          <li class="nav-item">
            <a class="nav-link" href="#"><ion-icon name="person-outline"></ion-icon>Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="isidata.php"></ion-icon><ion-icon name="pencil-outline"></ion-icon>Tulis Pengaduan</a>
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

    
  </body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  </div>
  </div>
  </div>
    <div class="card my-4 mt-3">
    <div class="d-grip gap-2 col-12 mt-2">
    <table class="table table-light table-hover table-borderless">
  <thead>
    <tr style="text-align:center;">
      <th scope="col">id</th>
      <th scope="col">tanggal</th>
      <th scope="col">nik</th>
      <th scope="col">isi laporan</th>
      <th scope="col">foto</th>
      <th scope="col">status</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  
  <tbody>
    <tr class="text-center">
      <td><?=$row['id_pengaduan'];?></td>
      <td><?=$row['tgl_pengaduan'];?></td>
      <td><?=$row['nik'];?></td>
      <td><?=$row['isi_laporan'];?></td>
      <td><img src="<?$row['foto'];?>" width="100" height="100"/></td>
      <td><?=$row['status'];?></td>
      <td>
        <a href="edit.php?id_pengaduan=<?=$row['id_pengaduan'];?>" class="btn btn-primary">Update</a>
        <a href="delete.php?id_pengaduan=<?=$row['id_pengaduan'];?>" class="btn btn-primary"><ion-icon name="close-circle-outline"></ion-icon>Delete</a>
      </td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    </div>
    </div>
    <!-- <div class="text-end">
    <a href="isi_data.php">
        <button class="btn btn-primary">Isi Catatan Perjalanan</button>
    </a>
    </div> -->
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>