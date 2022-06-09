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
        .small-img-group{
            display: flex;
            justify-content: space-between;
        }
        .small-img-col{
            flex-basis: 24%;
            cursor: pointer;
        }
        .sproduct select{
            display: block;
            padding: 5px 10px;
        }
        .sproduct input{
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
        }
        .sproduct input:focus{
            outline: none;
        }
        .buy-btn{
            background-color: #fb774b;
            opacity: 1;
            transition: 0.3s all;
        }
        #navbarSupportedContent > ul > li:nth-child(2) > a{
            color: coral;
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
                            <a class="nav-link active" href="shop.php">Shop</a>
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
                        <li class="nav-item">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <i class="fa-solid fa-shopping-bag"></i>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>

    <section class="container sproduct my-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-12">
                <img class="img-fluid w-100 pb-1" src="image/img/clothes/h.jpg" id="MainImg" alt="sproduct">

                <div class="small-img-group">
                    <div class="small-img-col">
                        <img class="small-img" src="image/img/clothes/i.jpg" alt="smalproduct" width="100%">
                    </div>
                    <div class="small-img-col">
                        <img class="small-img" src="image/img/clothes/c.jpg" alt="smalproduct" width="100%">
                    </div>
                    <div class="small-img-col">
                        <img class="small-img" src="image/img/clothes/f.jpg" alt="smalproduct" width="100%">
                    </div>
                    <div class="small-img-col">
                        <img class="small-img" src="image/img/clothes/a.jpg" alt="smalproduct" width="100%">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-12">
                <h6>Home / T-shirt</h6>
                <h3 class="py-3">Kaos Nakano</h3>
                <h2>Rp 100.000,00</h2>
                <select class="my-3">  
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>L</option>
                    <option>M</option>
                    <option>S</option>
                </select>
                <input type="number" value="1">
                <button class="buy-btn">Add to cart</button>
                <h4 class="mt-4 mb-4">Product Details</h4>
                <span>Waterproof clothing that protects the body from water must remain comfortable when used. Usually good quality waterproof clothes are those that are able to make the user not feel stuffy.</span>

            </div>
        </div>
    </section>

    <section id="feature" class="my-5 pb-5">
        <div class="container text-center mt-4 py-4">
            <h3>Other Product</h3>
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

    <script>
        var MainImg = document.getElementById('MainImg');
        var smallimg = document.getElementsByClassName('small-img');

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
        }
    </script>
</body>
</html>