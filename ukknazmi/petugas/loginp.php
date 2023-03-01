<?php

require_once('helper.php');
require_once('koneksi.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>pengaduan masyarakat - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="style3.css" rel="stylesheet">

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
                                <h1 class="h4 text-gray-900 mb-4">Login Admin</h1>
                            </div>
                            <form action="proses_login.php" class="user" method="post">
                            <!-- <?php
                                    if(isset($error)){
                                        foreach($error as $error){
                                            echo '<span class="error-msg">'.$error.'</span>';
                                        };
                                    };
                                    ?> -->
                         
                                    <div class="form-group">
                                        <input type="username" class="form-control form-control-user" id="exampleInputnama" placeholder="Masukan username Anda..." name="username"required>
                                    </div>
                                <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputnama" placeholder="Masukan password Anda..." name="password"required>
                                    </div>
                                    
                                    <!-- <div class="form-group">
                                        <label class="form-label" for="form3Example4cdg">level</label>
                                        <select name="level" id="" class="form-select" aria-label="Default Select example">
                                            <option value="admin">Admin</option>
                                            <option value="petugas">Petugas</option>
                                        </select>
                                        
                                    </div> -->
                                   
                                    </div>      
                                    
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                               
                                <hr>
                                <div class="text-center">
                                <a class="small" href="../login.php">Kembali</a>
                            </div>  
                            </form>
                            <hr>
                            
                        </div>
  
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</body>

</html>