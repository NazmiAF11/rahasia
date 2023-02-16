<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>pengaduan masyarakat - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/style3.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register User</h1>
                            </div>
                            <form action="proses_register.php" class="user" method="post">
                            <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
                             <div class="form-group">
                                        <input type="nik" class="form-control form-control-user" id="exampleInputnama" placeholder="Masukan nik Anda..." name="nik" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="nama" class="form-control form-control-user" id="exampleInputnama" placeholder="Masukan nama Anda..." name="nama"required>
                                    </div>
                                    <div class="form-group">
                                        <input type="username" class="form-control form-control-user" id="exampleInputnama" placeholder="Masukan username Anda..." name="username"required>
                                    </div>
                                <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputnama" placeholder="Masukan password Anda..." name="password"required>
                                    </div>
                                    <div class="form-group">
                                        <input type="telp" class="form-control form-control-user" id="exampleInputnama" placeholder="Masukan telp Anda..." name="telp"required>
                                    </div>
                                   
</div>      
                                    
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                                <a href="admin/petugas.php" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register Admin
                                </a>
                                
                            </form>
                            <hr>
                            
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Cor
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
e plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>