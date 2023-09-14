<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="asset/image/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/image/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/image/favicons/favicon-16x16.png">
    <link rel="manifest" href="asset/image/favicons/site.webmanifest">
    <link rel="mask-icon" href="asset/image/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="asset/image/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="asset/image/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <?php include_once('includes/navbar.php') ?>

    <!-- Carousel -->
    <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-img"
                    style="background-image:url('https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=74be18f074e19e06a51221f0f09969df&auto=format&fit=crop&w=1280&q=80')">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">Xperz Consult</h1>
                        <p class="lead">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img"
                    style="background-image:url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-0.3.5&s=d8791fe0f9f4e735158400f9daf6a558&auto=format&fit=crop&w=1280&q=80')">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">Xperz Consult</h1>
                        <p class="lead">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img"
                    style="background-image:url('https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixlib=rb-0.3.5&s=17460aa3d0fd3eb2fb7162edafc37175&auto=format&fit=crop&w=1280&q=80')">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">Xperz Consult</h1>
                        <p class="lead">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </section>

    <!-- Hope -->
    <section class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="border-short-bottom">Lorem ipsum dolor sit amet.</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi architecto non nostrum nam
                iste, tenetur voluptate vel beatae rem voluptates sapiente dolorem temporibus voluptatibus incidunt
                mollitia accusantium, dignissimos nesciunt totam!</p>
        </div>
    </section>

    <!-- Blog -->
    <section class="container">
        <h1 class="border-short-bottom text-center">Blog</h1>
        <div class="row">
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="#" class="warpper-card-image">
                        <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHByb2dyYW1tZXJ8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                            class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                    <div class="p-3">
                        <a href="#" class="btn btn-primary btn-block">Read More</a>
                    </div>
                </div>
            </section>

            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="#" class="warpper-card-image">
                        <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHByb2dyYW1tZXJ8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                            class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                    <div class="p-3">
                        <a href="#" class="btn btn-primary btn-block">Read More</a>
                    </div>
                </div>
            </section>

            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="#" class="warpper-card-image">
                        <img src="https://images.unsplash.com/photo-1551033406-611cf9a28f67?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80"
                            class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                    <div class="p-3">
                        <a href="#" class="btn btn-primary btn-block">Read More</a>
                    </div>
                </div>
            </section>

            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="#" class="warpper-card-image">
                        <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHByb2dyYW1tZXJ8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                            class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                    <div class="p-3">
                        <a href="#" class="btn btn-primary btn-block">Read More</a>
                    </div>
                </div>
            </section>

            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="#" class="warpper-card-image">
                        <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHByb2dyYW1tZXJ8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                            class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                    <div class="p-3">
                        <a href="#" class="btn btn-primary btn-block">Read More</a>
                    </div>
                </div>
            </section>

            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="#" class="warpper-card-image">
                        <img src="https://images.unsplash.com/photo-1551033406-611cf9a28f67?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80"
                            class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                    <div class="p-3">
                        <a href="#" class="btn btn-primary btn-block">Read More</a>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- Footer -->
    <footer class="semi-footer p-5 text-center text-md-left">
        <div class="row">
            <div class="col-md-4">
                <a class="navbar-brand" href="#">
                    <img src="/asset/image/logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
                    Xperz Consult
                </a>
                <p>
                    <i class="fa-solid fa-square-phone"></i> 089-999-9999 <br>
                    <i class="fa-solid fa-envelope"></i> email@example.com <br>
                    <i class="fa-solid fa-address-card"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aliquid, corporis!
                </p>
                <a href="https://www.facebook.com/" target="_blank">
                    <i class="fa-brands fa-square-facebook fa-2x"></i>
                </a>
                <a href="https://www.youtube.com/" target="_black">
                    <i class="fa-brands fa-square-youtube fa-2x"></i>
                </a>
            </div>
            <div class="col-md-4">
                <h4 class="">Menu</h4>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4 class="">Map</h4>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15510.458285667853!2d100.67776501888382!3d13.620336289007538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d5f816a6040c7%3A0x84c7c8218667be59!2z4LmA4LiU4Lit4Liw4LiE4Lix4Lil4LmA4Lil4Lit4Lij4LmM4Lia4Liy4LiH4LiZ4LiyIOC4p-C4h-C5geC4q-C4p-C4mTI!5e0!3m2!1sen!2sus!4v1694248976258!5m2!1sen!2sus"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </footer>
    <footer class="footer">
        <span> COPYRIGHT 2023
            <a href="https://www.xperzconsult.com/">Xperz Consult</a>
            All Right Reserved
        </span>
    </footer>

    <!-- On to Top -->
    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>