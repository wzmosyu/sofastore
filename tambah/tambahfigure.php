<?php

    require '../functions.php';

    if(isset ($_POST["submit"])){

        if (tambahfigure($_POST) > 0){
            echo "
                <script>
                    alert ('Data Berhasil DItambahkan');
                    document.location.href = '../admin.php'
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert ('Data Berhasil DItambahkan');
                    document.location.href = '../admin.php'
                </script>
            ";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://use.fontawesome.com/116027340a.js"></script>

    <title>tambah | data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
        <div class="container-fluid py-2 px-4">
            <img src="../image/img/logo2.png" alt="logo">
                <form class="d-flex">
                    <input class="form-control me-2" class="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            <a href="../login/login.html"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
        </div>
    </nav>

    <br>
    <h3 class="container">TAMBAH DATA ACTION FIGURE</h3>
    <br>

    <div class="container">
        <form action="" method="post">
            <div class="row g-3 align-items-center mt-0">
                <div class="col-auto">
                    <label for="nama">Nama : </label>
                </div>
                <div class="col-auto mx-5">
                    <input type="text" name="nama" id="nama" required>
                </div>
            </div>

            <div class="row g-3 align-items-center mt-0">
                <div class="col-auto">
                    <label for="jenis">Jenis   : </label>
                </div>
                <div class="col-auto mx-5">
                    <input type="text" name="jenis" id="jenis" required>
                </div>
            </div>

            <div class="row g-3 align-items-center mt-0">
                <div class="col-auto">
                    <label for="stok">Stok : </label>
                </div>
                <div class="col-auto mx-5">
                    <input type="text" name="stok" id="stok" required>
                </div>
            </div>

            <div class="row g-3 align-items-center mt-0">
                <div class="col-auto">
                    <label for="harga">Harga : </label>
                </div>
                <div class="col-auto mx-5">
                    <input type="text" name="harga" id="harga" required>
                </div>
            </div>

            <div class="row g-3 align-items-center mt-0">
                <div class="col-auto">
                    <label for="deskripsi">Deskripsi : </label>
                </div>
                <div class="col-auto mx-4">
                    <input type="text" name="deskripsi" id="deskripsi" required>
                </div>
            </div>

            <div class="row g-3 align-items-center mt-0">
                <div class="col-auto">
                    <label for="gambar">Gambar : </label>
                </div>
                <div class="col-auto mx-4">
                    <input type="text" name="gambar" id="gambar" required>
                </div>
            </div>

            <div class="row g-3 align-items-center mt-0">
                <li>
                    <button type="submit" name="submit">Tambah Data</button>
                </li>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>