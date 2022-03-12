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
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="style.php">Style</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Contact</a>
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

<section class="contact m-5 p-5 bg-dark" id="contact">
    <div class="max-width">
        <h2 class="title text-white">Contact Us</h2>
        <div class="contact-content">
            <div class="column left">
                <div class="text text-white">Get in touch</div>
                <p class="text-white">Please do not hesitate to contact us at this email address if you require any information.</p>
                <div class="icons">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <div class="info">
                            <div class="head text-white">Name</div>
                            <div class="sub-title text-white">Fashion Kids</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <div class="head text-white">Address</div>
                            <div class="sub-title text-white">Juja, Republic of Kenya</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <div class="head text-white">Email</div>
                            <div class="sub-title text-white">fashionkids@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column right">
                <div class="text text-white"> Message Us</div>
                <form action="#">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" placeholder="Name" required>
                        </div>
                        <div class="field email">
                            <input type="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Subject" required>
                    </div>
                    <div class="field textarea">
                        <textarea cols="30" rows="10" placeholder="Describe project.." required></textarea>
                    </div>
                    <div class="w-80" >
                        <button type="submit" class="btn btn-warning">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>