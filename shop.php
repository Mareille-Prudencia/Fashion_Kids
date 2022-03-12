<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

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

    <style>
        #featured > div.row.mx-auto.container-fluid > nav > ul > li.page-item.active > a {
            background: black;
        }
        #featured > div.row.mx-auto.container-fluid > nav > ul > li:nth-child(n):hover > a {
            background-color: coral;
            color: #ffffff;
        }

        .pagination a {
            color: #000000;
        }
    </style>

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
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Shop</a>
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

<section id="featured" class="my-3 py-3 bg-dark">
    <div class="container mt-3 py-3">
        <h2 class="font-weight-bold text-center text-white">Our Featured</h2>
        <hr>
        <p class="text-center text-primary">Here you can check out our new products with fair price on fashionKids.</p>
    </div>
    <div class="row mx-auto container">
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img onclick="window.location.href='sproduct.html';" class="img-fluid mb-3" src="images/shop/1.jpg" alt="">
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">T-Shirt and Short Summer Wear</h5>
            <h4 class="p-price text-danger">$50.00</h4>
            <button class="buy-btn">Order Now</button>

        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="images/shop/2.jpg" alt="">
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">Pants and Top</h5>
            <h4 class="p-price text-danger">$30.00</h4>
            <button class="buy-btn">Order Now</button>

        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="images/shop/3.jpg " alt="">
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">Shirt</h5>
            <h4 class="p-price text-danger">$25.00</h4>
            <button class="buy-btn">Order Now</button>

        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="images/shop/4.jpg" alt="">
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">Cutie Dress</h5>
            <h4 class="p-price text-danger">$60.00</h4>
            <button class="buy-btn">Order Now</button>

        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="images/shop/5.jpg" alt="">
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">Cutie Printed Dress</h5>
            <h4 class="p-price text-danger">$50.00</h4>
            <button class="buy-btn">Order Now</button>

        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="images/shop/6.jpg" alt="">
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">Vest and Short Summer Wear</h5>
            <h4 class="p-price text-danger">$30.00</h4>
            <button class="buy-btn">Order Now</button>

        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="images/shop/7.jpg " alt="">
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">Sneakers for Girls</h5>
            <h4 class="p-price text-danger">$25.00</h4>
            <button class="buy-btn">Order Now</button>

        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="images/shop/8.jpg" alt="">
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">Pants</h5>
            <h4 class="p-price text-danger">$60.00</h4>
            <button class="buy-btn">Order Now</button>

        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="images/shop/9.jpg" alt="">
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">Crop-Top and Pants</h5>
            <h4 class="p-price text-danger">$50.00</h4>
            <button class="buy-btn">Order Now</button>

        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="images/shop/10.jpg" alt="">
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">Crop-Top and Short</h5>
            <h4 class="p-price text-danger">$30.00</h4>
            <button class="buy-btn">order Now</button>

        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="images/shop/11.jpg " alt="">
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">Pants for Boys</h5>
            <h4 class="p-price text-danger">$25.00</h4>
            <button class="buy-btn">Order Now</button>

        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="images/shop/12.jpg" alt="">
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <h5 class="p-name">Skirt</h5>
            <h4 class="p-price text-danger">$60.00</h4>
            <button class="buy-btn">Buy Now</button>
        </div>

        <nav aria-label="...">
            <ul class="pagination mt-2">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item" aria-current="page">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

    </div>
</section>











<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>