<?php
    require 'functions.php';
    $admjkt = query("SELECT * FROM admin_aksesoris");
    $admshoes = query("SELECT * FROM admin_shoes");
    $admfigure = query("SELECT * FROM admin_figure");
    $admdakimakura = query("SELECT * FROM admin_dakimakura");


    if(isset($_POST["cariaksesoris"]) ) {
        $admjkt = cariaksesoris($_POST["keywordaksesoris"]);
    }
    if(isset($_POST["carishoes"]) ) {
        $admshoes = carishoes($_POST["keywordshoes"]);
    }
    if(isset($_POST["carifigure"]) ) {
        $admfigure = carifigure($_POST["keywordfigure"]);
    }
    if(isset($_POST["caridakimakura"]) ) {
        $admdakimakura = caridakimakura($_POST["keyworddakimakura"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styleadmin.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <script src="https://use.fontawesome.com/116027340a.js"></script>

    <title>sofastore | admin</title>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
        <div class="container-fluid py-2 px-4">
            <img src="image/img/logo2.png" alt="logo">
                <form action="" method="post" class="d-flex">
                    <input class="form-control me-2" class="search" type="text" name="" placeholder="Search" aria-label="Search" autocomplete="off">
                    <button class="btn btn-outline-success" type="submit" name="">Search</button>
                </form>
            <a href="login/login.html"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
        </div>
    </nav>

    <br><br>
    <h3 class="container">DAFTAR LIST BARANG</h3>
    <br>

    <div class="accordion container" id="accordionExample">

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    List Aksesoris
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td><a href="tambah/tambahaksesoris.php">Tambah Data Barang</a></td>
                        </tr>
                        <form action="" method="post" class="d-flex">
                            <input class="me-2" class="search" type="text" name="keywordaksesoris" placeholder="Search" aria-label="Search" autocomplete="off">
                            <button class="btn-outline-success" type="submit" name="cariaksesoris">Search</button>
                        </form>
                        <br><br>
                    </table>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>No.</th>
                            <th>Pilihan</th>
                            <th>Gambar</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>
                            <th>Stok Barang</th>
                            <th>Harga Barang</th>
                            <th>Deskripsi</th>
                        </tr>

                        <?php $i = 1; ?>
                        <?php foreach($admjkt as $row ) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td>
                                    <a href="ubah/ubahaksesoris.php? id=<?= $row["id"]; ?>">Edit</a> | 
                                    <a href="hapus/hapusaksesoris.php? id=<?= $row["id"]; ?>" onclick="return confirm('Yakin akan menghapus data?');">Delete</a>
                            </td>
                            <td><img src=<?php echo $row["gambar"]; ?> alt="gambar product" width="70"></td>
                            <td><?php echo $row["nama"]; ?></td>
                            <td><?php echo $row["jenis"]; ?></td>
                            <td><?php echo $row["stok"]; ?></td>
                            <td><?php echo $row["harga"]; ?></td>
                            <td><?php echo $row["deskripsi"]; ?></td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    List Sepatu
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td><a href="tambah/tambahsepatu.php">Tambah Data Barang</a></td>
                        </tr>
                        <form action="" method="post" class="d-flex">
                            <input class="me-2" class="search" type="text" name="keywordshoes" placeholder="Search" aria-label="Search" autocomplete="off">
                            <button class="btn-outline-success" type="submit" name="carishoes">Search</button>
                        </form>
                        <br><br>
                    </table>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>No.</th>
                            <th>Pilihan</th>
                            <th>Gambar</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>
                            <th>Stok Barang</th>
                            <th>Harga Barang</th>
                            <th>Deskripsi</th>
                        </tr>

                        <?php $i = 1; ?>
                        <?php foreach($admshoes as $row) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td>
                                    <a href="ubah/ubahsepatu.php? id=<?= $row["id"]; ?>">Edit</a> | 
                                    <a href="hapus/hapussepatu.php? id=<?= $row["id"]; ?>" onclick="return confirm('Yakin akan menghapus data?');">Delete</a>
                            </td>
                            <td><img src=<?php echo $row["gambar"]; ?> alt="gambar product" width="70"></td>
                            <td><?php echo $row["nama"]; ?></td>
                            <td><?php echo $row["jenis"]; ?></td>
                            <td><?php echo $row["stok"]; ?></td>
                            <td><?php echo $row["harga"]; ?></td>
                            <td><?php echo $row["deskripsi"]; ?></td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                        </table>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    List Action Figure
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td><a href="tambah/tambahfigure.php">Tambah Data Barang</a></td>
                        </tr>
                        <form action="" method="post" class="d-flex">
                            <input class="me-2" class="search" type="text" name="keywordfigure" placeholder="Search" aria-label="Search" autocomplete="off">
                            <button class="btn-outline-success" type="submit" name="carifigure">Search</button>
                        </form>
                        <br><br>
                    </table>
                    <table class="table table-bordered table-striped">

                        <tr>
                            <th>No.</th>
                            <th>Pilihan</th>
                            <th>Gambar</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>
                            <th>Stok Barang</th>
                            <th>Harga Barang</th>
                            <th>Deskripsi</th>
                        </tr>

                        <?php $i = 1; ?>
                        <?php foreach($admfigure as $row) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td>
                                    <a href="ubah/ubahfigure.php? id=<?= $row["id"]; ?>">Edit</a> | 
                                    <a href="hapus/hapusfigure.php? id=<?= $row["id"]; ?>" onclick="return confirm('Yakin akan menghapus data?');">Delete</a>
                            </td>
                            <td><img src=<?php echo $row["gambar"]; ?> alt="gambar product" width="70"></td>
                            <td><?php echo $row["nama"]; ?></td>
                            <td><?php echo $row["jenis"]; ?></td>
                            <td><?php echo $row["stok"]; ?></td>
                            <td><?php echo $row["harga"]; ?></td>
                            <td><?php echo $row["deskripsi"]; ?></td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    List Dakimakura
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td><a href="tambah/tambahdakimakura.php">Tambah Data Barang</a></td>
                        </tr>
                        <form action="" method="post" class="d-flex">
                            <input class="me-2" class="search" type="text" name="keyworddakimakura" placeholder="Search" aria-label="Search" autocomplete="off">
                            <button class="btn-outline-success" type="submit" name="caridakimakura">Search</button>
                        </form>
                        <br><br>
                    </table>
                    <table class="table table-bordered table-striped">

                        <tr>
                            <th>No.</th>
                            <th>Pilihan</th>
                            <th>Gambar</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>
                            <th>Stok Barang</th>
                            <th>Harga Barang</th>
                            <th>Deskripsi</th>
                        </tr>

                        <?php $i = 1; ?>
                        <?php foreach($admdakimakura as $row) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td>
                                    <a href="ubah/ubahdakimakura.php? id=<?= $row["id"]; ?>">Edit</a> | 
                                    <a href="hapus/hapusdakimakura.php? id=<?= $row["id"]; ?>" onclick="return confirm('Yakin akan menghapus data?');">Delete</a>
                            </td>
                            <td><img src=<?php echo $row["gambar"]; ?> alt="gambar product" width="70"></td>
                            <td><?php echo $row["nama"]; ?></td>
                            <td><?php echo $row["jenis"]; ?></td>
                            <td><?php echo $row["stok"]; ?></td>
                            <td><?php echo $row["harga"]; ?></td>
                            <td><?php echo $row["deskripsi"]; ?></td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <img src="image/img/logo3.png" alt="logo2">
                <p class="pt-3">We provide services as a dropshipper of goods from Japan that emphasizes the comfort and safety of the buyer.</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
                <h5 class="pb-2">Featured</h5>
                <ul class="text-uppercase list-unstyled">
                    <li><a href="#">men</a></li>
                    <li><a href="#">women</a></li>
                    <li><a href="#">boy</a></li>
                    <li><a href="#">girl</a></li>
                    <li><a href="#">family</a></li>
                    <li><a href="#">friends</a></li>
                </ul>
            </div> 
            <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
                <h5 class="pb-2">Contact Us</h5>
                <div>
                    <h6 class="text-uppercase">Address</h6>
                    <p>Electronic Enginering Politechnic Institute Of Surabaya</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Phone</h6>
                    <p>(3221) 600053</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Email</h6>
                    <p>sofastore@gmal.com</p>
                </div>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <h5 class="pb-2">Documentation</h5>
                <div class="row">
                    <img class="img-fluid w-25 h-100 m-2" src="image/img/insta/1.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="image/img/insta/2.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="image/img/insta/3.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="image/img/insta/4.jpg" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="image/img/insta/5.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="copyright mt-5">
            <div class="row container mx-auto">

                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <img src="image/img/payment.png" alt="pyment">
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-2 text-nowrap">
                    <p>SOFA eComerce © 2022. All Rights Reserved</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>