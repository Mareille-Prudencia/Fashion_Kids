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

<div class="small-container single-product bg-dark">
    <div class="row">
        <div class="col-4 mt-5 p-5">
            <img src="images/featured/1.jpg" width="400" height="400" >
        </div>
        <div class="col-6 mt-5 p-5 ">
            <p><b>Home / Summer Wear</b></p>
            <h5>Yellow top and printed short by mamas&papas</h5>
            <h4 class="text-danger">$50.00</h4>

            <select>
                <option>Select Age</option>
                <option>3 years</option>
                <option>4 years</option>
                <option>5 years</option>
                <option>6 years</option>
                <option>7 years</option>
            </select>

            <div>
            <input type="number" class="m-1 p-1" value="1">
            <a href="" class="btn bg-danger">Add to Cart</a>
            </div>

            <h3 class="mt-2 py-2 text-white">Product Details</h3>
            <p class="text-white">Give your kids' summer wardrobe a style upgrade with the mamas&papas girl's crop-top and printed short. It's already team for your aftenoon out with the family.</p>
        </div>
    </div>
</div>
<div class="small-container single-product">
    <div class="row">
        <div class="col-4 mt-5 p-5">
            <img src="images/featured/2.jpg" width="400" height="400" >
        </div>
        <div class="col-6 mt-5 p-5 ">
            <p><b>Home / Summer Wear</b></p>
            <h5>Yellow top and printed short by Shein</h5>
            <h4 class="text-danger">$30.00</h4>
            <select>
                <option>Select Age</option>
                <option>3 years</option>
                <option>4 years</option>
                <option>5 years</option>
                <option>6 years</option>
                <option>7 years</option>
            </select>
            <input type="number" value="1">
            <a href="" class="btn bg-danger">Add to Cart</a>

            <h3 class="mt-2 py-2">Product Details</h3>
            <p></p>
        </div>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>