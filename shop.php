<?php
    require 'functions.php';
    $admaks = query("SELECT * FROM admin_aksesoris");
    $admshoes = query("SELECT * FROM admin_shoes");
    $admfigure = query("SELECT * FROM admin_figure");
    $admdakimakura = query("SELECT * FROM admin_dakimakura");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://use.fontawesome.com/116027340a.js"></script>

    <link rel="stylesheet" href="css/style.css">
    
    <style>

        .product img{
            width: 100%;
            height: auto;
            box-sizing: border-box;
            object-fit: cover;
            border-radius: 5px;
        }
        #navbarSupportedContent > ul > li:nth-child(2) > a{
            color: coral;
        }
        #feature > div:nth-child(6) > nav > ul > li.page-item.active > a{
            background-color: #2a2a2a;
        }
        #feature > div:nth-child(6) > nav > ul > li:nth-child(n):hover>a{
            background-color: coral;
            color: #fff;
        }
        .pagination a{
            color: #000;
        }
        .search{
            display: block;
            border-radius: 5px;
            padding: 1px 70px 1px 10px;
            border: 1 px solid black;
            font-size: 11pt;
            background: #f1f1f1;
        }
        .other{
            padding : 10px 530px;
            border-radius: 10px;
        }
        ul li {
            float:left;
        }
        ul li.break {
            clear: right;
        }
        #product{
            padding: 0px 13px;
        }

        /* Product */
        .product{
            cursor: pointer;
            margin-bottom: 2rem;
        }
        .product img{
            transition: 0.3s;
            width: 250px;
        }
        .product:hover img{
            opacity: 0.7;
        }
        .product .buy-btn{
            background: #fb774b;
            transform: translateY(20px);
            opacity: 0;
            transition: 0.3s all;
        }
        .product:hover .buy-btn{
            transform: translateY(0px);
            opacity: 1;
        }
        .product .desc{
            text-align: center;
        }

        

    </style>

    <title>sofastore.com</title>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <div class="container">
            <img src="image/img/logo1.png" alt="logo1">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span id="bar"><i class="fa-solid fa-bars-staggered"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <form action="GET">
                        <input type="text" placeholder="Find Product...." name="search" class="search">
                    </form>
                    <li class="nav-item">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <i class="fa-solid fa-shopping-bag"></i>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="feature" class="mt-5 pt-5">
        <div class="container mt-4 pt-4">
            <h2 class="font-weight-bold">Our Featured</h2>
            <hr>
            <p>Here you can check out our new product with fair price on SOFA</p>
        </div>

        <div class="row mx-auto container">
            <div onclick="window.location.href='sproduct.php'">
                
                    <ul>
                        <?php $i = 0; foreach ($admaks as $value) : ?>
                        <li style="list-style:none;"<?php if ( $i % 4 == 0 ) echo ' class="break"' ?>>
                            <div id="product">
                                <div class="product">
                                    <?php echo "<img src='".$value["gambar"]."' width=200><br>"; ?>
                                    <div class="desc">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h5 class="p-name"><?php echo $value["nama"]; ?></h5>
                                        <h4 class="p-price">Rp <?php echo $value["harga"]; ?>,00</h4>
                                        <button class="buy-btn">Buy Now</button>
                                    </div>   
                                </div>
                            </div>
                        </li>
                        
                        <?php $i++; endforeach ?>
                    </ul>
                

                <a href="shop1.php">
                    <button class="other" onclick="window.location.href=">Other</button>
                </a>
            </div>
        </div> 
    </section>

    <section id="feature" class="my-1 py-1">
        <div class="container mt-1 py-1">
            <h2 class="font-weight-bold">Our Featured</h2>
            <hr>
            <p>Here you can check out our new product with fair price on SOFA</p>
        </div>

        <div class="row mx-auto container">
            <div onclick="window.location.href='sproduct.php'">
                    <ul>
                        <?php $i = 0; foreach ($admshoes as $value) : ?>
                        <li style="list-style:none;"<?php if ( $i % 4 == 0 ) echo ' class="break"' ?>>
                            <div id="product">
                                <div class="product">
                                    <?php echo "<img src='".$value["gambar"]."' width=200><br>"; ?>
                                    <div class="desc">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h5 class="p-name"><?php echo $value["nama"]; ?></h5>
                                        <h4 class="p-price">Rp <?php echo $value["harga"]; ?>,00</h4>
                                        <button class="buy-btn">Buy Now</button>
                                    </div>   
                                </div>
                            </div>
                        </li>
                        
                        <?php $i++; endforeach ?>
                    </ul>
                
                    
                <a href="shop1.php">
                    <button class="other" onclick="window.location.href=">Other</button>
                </a>
            </div>
        </div> 
    </section>

    <section id="feature" class="my-1 py-1">
        <div class="container mt-1 py-1">
            <h2 class="font-weight-bold">Our Featured</h2>
            <hr>
            <p>Here you can check out our new product with fair price on SOFA</p>
        </div>
        <div class="row mx-auto container">
            <div onclick="window.location.href='sproduct.php'">
                    <ul>
                        <?php $i = 0; foreach ($admfigure as $value) : ?>
                        <li style="list-style:none;"<?php if ( $i % 4 == 0 ) echo ' class="break"' ?>>
                            <div id="product">
                                <div class="product">
                                    <?php echo "<img src='".$value["gambar"]."' width=200><br>"; ?>
                                    <div class="desc">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h5 class="p-name"><?php echo $value["nama"]; ?></h5>
                                        <h4 class="p-price">Rp <?php echo $value["harga"]; ?>,00</h4>
                                        <button class="buy-btn">Buy Now</button>
                                    </div>   
                                </div>
                            </div>
                        </li>
                        
                        <?php $i++; endforeach ?>
                    </ul>
            <a href="shop1.php">
                <button class="other" onclick="window.location.href=">Other</button>
            </a>
        </div> 
    </section>

    <section id="feature" class="my-1 py-1">
        <div class="container mt-1 py-1">
            <h2 class="font-weight-bold">Our Featured</h2>
            <hr>
            <p>Here you can check out our new product with fair price on SOFA</p>
        </div>
        <div class="row mx-auto container">
            <div onclick="window.location.href='sproduct.php'">
                <ul>
                    <?php $i = 0; foreach ($admdakimakura as $value) : ?>
                    <li style="list-style:none;"<?php if ( $i % 4 == 0 ) echo ' class="break"' ?>>
                        <div id="product">
                            <div class="product">
                                <?php echo "<img src='".$value["gambar"]."' width=200><br>"; ?>
                                <div class="desc">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <h5 class="p-name"><?php echo $value["nama"]; ?></h5>
                                    <h4 class="p-price">Rp <?php echo $value["harga"]; ?>,00</h4>
                                    <button class="buy-btn">Buy Now</button>
                                </div>   
                            </div>
                        </div>
                    </li>
                        
                    <?php $i++; endforeach ?>
                </ul>
            </div>
        </div> 
    </section>

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
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>