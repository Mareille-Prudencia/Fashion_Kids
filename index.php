<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FashionKids | Ecommerce Website Design</title>

    <link rel="stylesheet" href="CSS/style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-info py-3 fixed-top">
    <a href="#" class="fa fa-shopping-bag nav-item nav-link text-white text-uppercase"><b>FashionKids.</b></a>
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggler="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
            <span><i id="bar" class="fa fa-bars"></i></span>
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
                    <a class="nav-link" href="style.php">Style</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="account.php">Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-search" id="search-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-heart"></i>
                        <span class="badge rounded-pill bg-danger position-absolute translate-middle">5+</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i href="#" class="fa fa-shopping-cart"></i>
                        <span class="badge rounded-pill bg-danger position-absolute translate-middle">8+</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section id="home">
    <div class="container">
       <h5>Give your child a new style</h5>
       <h1><span>Best Price</span> This Year</h1>
       <p class=""><b>FashionKids offers you trendy and comfortable outfits for your children<br>suitable for family outings, parties and everyday life.</b></p>
        <button>
            <a href="shop.php">Shop Now</a>
        </button>
    </div>
</section>

<section id="brand" class="container">
    <div class="row m-0 py-4">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="images/brands/Design_By_Humans_logo_PNG1.png" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="images/brands/Asos_logo_PNG7.jpg" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="images/brands/Mamasandpapas_logo_PNG1.png" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="images/brands/Shein_logo_PNG11.png" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="images/brands/Chic_Me_logo_PNG1.png" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="images/brands/Zalando-Logo-PNG2.png" alt="">
    </div>
</section>

<section id="new">
    <div class="row p-0 m-0">
        <div class="one col-lg-4 col-md-12 col-12 p-0">
            <img class="img-fluid" src="images/new/1.jpg">
            <div class="details">
                <h2>Extreme rare boots</h2>
                <button class="text-uppercase">
                    <a href="shop.php">Shop Now</a>
                </button>
            </div>
        </div>
        <div class="one col-lg-4 col-md-12 col-12 p-0">
            <img class="img-fluid" src="images/new/2.jpg" alt="">
            <div class="details">
                <h2>Cute wedding dress</h2>
                <button class="text-uppercase">
                    <a href="shop.php">Shop Now</a>
                </button>
            </div>
        </div>
        <div class="one col-lg-4 col-md-12 col-12 p-0">
            <img class="img-fluid" src="images/new/3.jpg" alt="">
            <div class="details">
                <h2>Awesome shirt for boys</h2>
                <button class="text-uppercase">
                    <a href="shop.php">Shop Now</a>
                </button>
            </div>
        </div>
    </div>
</section>

<section id="featured" class="my-5 pb-5 bg-dark">
    <div class="container text-center mt-5 py-5">
       <h3 class="text-white">Our Featured</h3>
        <hr class="mx-auto">
        <p class="text-primary">Here you can check out our new products with fair price on fashionKids.</p>
    </div>
    <div class="row mx-auto container-fluid">
       <div class="product text-center col-lg-3 col-md-4 col-12">
           <a href="product_details.php"><img class="img-fluid mb-3" src="images/featured/1.jpg" alt=""></a>
            <div class="star">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">Summer Wear</h5>
            <h4 class="p-price">$50.00</h4>
            <button class="buy-btn">
                <a href="login_form.php">Order Now</a>
            </button>

        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <a href="product_details.php"><img class="img-fluid mb-3" src="images/featured/2.jpg" alt=""></a>
            <div class="star">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">Denim Short</h5>
            <h4 class="p-price">$30.00</h4>
            <button class="buy-btn">
                <a href="login_form.php">Order Now</a>
            </button>

        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="images/featured/3.jpg " alt="">
            <div class="star">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">Jumpsuit</h5>
            <h4 class="p-price">$25.00</h4>
            <button class="buy-btn">
                <a href="login_form.php">Order Now</a>
            </button>

        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="images/featured/4.jpg" alt="">
            <div class="star">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">Vans Sneakers</h5>
            <h4 class="p-price">$60.00</h4>
            <button class="buy-btn">
                <a href="login_form.php">Order Now</a>
            </button>

        </div>

    </div>
</section>



<footer class="mt-5 py-5">
    <div class="row">
        <div class="footer-one col-lg-3 col-md-6 col-12">
            <i class=""></i>

        </div>

    </div>
</footer>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>