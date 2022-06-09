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
        #navbarSupportedContent > ul > li:nth-child(1) > a{
            color: coral;
        }
        .search{
            display: inline-block;
            border-radius: 5px;
            padding: 1px 70px 1px 10px;
            border: 1 px solid black;
            font-size: 11pt;
            background: #f1f1f1;
        }
        .login{
            color: #000;
        }
    </style>

    <title>sofastore.com</title>


</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <div class="container">
            <img src="image/img/logo1.png" alt="logo1">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span id="bar"><i class="fa-solid fa-bars-staggered"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
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
                        <a href="login/login.html"><i class="fa-solid fa-user login"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" style= "background-image : url('image/img/head.jpg')">
        <div class="container">
            <h5>NEW ARRAIVALS</h5>
            <h1><span>Best Price</span> This Year</h1>
            <p>Schoomatic offers your very comfortable time</br>on waling and excercise</p>
            <button>Shop Now</button>
        </div>
    </section>

    <section id="brand" class="container">
        <div class="row m-0 py-5">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="image/img/brand/1.png" alt="brand1">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="image/img/brand/2.png" alt="brand1">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="image/img/brand/3.png" alt="brand1">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="image/img/brand/4.png" alt="brand1">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="image/img/brand/5.png" alt="brand1">
            <img class="img-fluid col-lg-2 col-md-4 col-6" src="image/img/brand/6.png" alt="brand1">
        </div>
    </section>

    <section id="new" class="w-100">
        <div class="row p-0 m-0"> 
            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img class="imgfluid" src="image/img/new/a.jpg" alt="newimage">
                <div class="details">
                    <h2>T-shirt Modern</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img class="imgfluid" src="image/img/new/b.jpg" alt="newimage">
                <div class="details">
                    <h2>Action Figure</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div> 
            <div class="one col-lg-4 col-md-12 col-12 p-0">
                <img class="imgfluid" src="image/img/new/c.jpg" alt="newimage">
                <div class="details">
                    <h2>Phone Hardcase</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>
        </div>
    </section>

    <section id="feature" class="my-5 pb-5">
        <div class="container text-center mt-4 py-4">
            <h3>Our Featured</h3>
            <hr class="mx-auto">
            <p>Here you can check out our new product with fair price on SOFA</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="image/img/featured/a.jpg" alt="featuredimage">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Sneakers</h5>
                <h4 class="p-price">Rp. 450.000,00</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="image/img/featured/b.jpg" alt="featuredimage">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Backpack</h5>
                <h4 class="p-price">Rp. 170.000,00</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="image/img/featured/c.jpg" alt="featuredimage">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Bolsters and Pillows</h5>
                <h4 class="p-price">Rp. 90.000,00</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="image/img/featured/d.jpg" alt="featuredimage">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">T-shirts</h5>
                <h4 class="p-price">Rp. 120.000,00</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
        </div>
    </section>
    
    <section id="banner" class="my-5 py-5" style="background-image: url('image/img/banner/3.jpg')">
        <div class="container">
            <h4>RAMADHAN SALE</h4>
            <h1>SOFA Collection<br>UP TO 30% OFF</h1>
            <button class="text-uppercase">Shop Now</button>
        </div>
    </section>

    <section id="clothes" class="my-5">
        <div class="container text-center mt-4 py-4">
            <h3>Shirts & Clothes</h3>
            <hr class="mx-auto">
            <p>Here you can check out our new product with fair price on SOFA</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="image/img/clothes/a.jpg" alt="featuredimage">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">T-shirt Rirakkusu</h5>
                <h4 class="p-price">Rp. 110.000,00</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="image/img/clothes/b.png" alt="featuredimage">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Suit</h5>
                <h4 class="p-price">Rp. 220.000,00</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="image/img/clothes/c.jpg" alt="featuredimage">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Hodiees</h5>
                <h4 class="p-price">Rp. 150.000,00</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="image/img/clothes/b.png" alt="featuredimage">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Uniform</h5>
                <h4 class="p-price">Rp. 130.000,00</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
        </div>
    </section>

    <section id="watches" class="my-5">
        <div class="container text-center mt-4 py-4">
            <h3>Action Figure</h3>
            <hr class="mx-auto">
            <p>Here you can check out our new product with fair price on SOFA</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="image/img/figure/a.jpg" alt="featuredimage">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Fight Figure</h5>
                <h4 class="p-price">Rp. 450.000,00</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="image/img/figure/b.jpg" alt="featuredimage">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Rengoku Figure</h5>
                <h4 class="p-price">Rp. 550.000,00</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="image/img/figure/c.jpeg" alt="featuredimage">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Shinobu Figure</h5>
                <h4 class="p-price">Rp. 700.000,00</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="image/img/figure/d.jpg" alt="featuredimage">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Mikasa Ackerman</h5>
                <h4 class="p-price">Rp. 400.000,00</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
        </div>
    </section>

    <section id="shoes" class="my-5 pb-5">
        <div class="container text-center mt-4 py-4">
            <h3>Shoes & Backpack</h3>
            <hr class="mx-auto">
            <p>Here you can check out our new product with fair price on SOFA</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="image/img/shoes/a.jpg" alt="featuredimage">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Casual Shoes</h5>
                <h4 class="p-price">Rp. 250.000,00</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="image/img/shoes/b.jpg" alt="featuredimage">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">One Piece Bag</h5>
                <h4 class="p-price">Rp. 130.000,00</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="image/img/shoes/c.jpg" alt="featuredimage">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Slipron Shoes</h5>
                <h4 class="p-price">Rp. 180.000,00</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="image/img/shoes/d.jpg" alt="featuredimage">
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Abstact Backpack</h5>
                <h4 class="p-price">Rp. 160.000,00</h4>
                <button class="buy-btn">Buy Now</button>
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
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>