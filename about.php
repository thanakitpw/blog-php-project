<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <?php include_once('includes/navbar.php') ?>

    <!-- Page-Title -->
    <header data-jarallax='{ "speed": 0.6 }' class="page-title jarallax" style="background-image: url(https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 font-weight-bold">About Us</h1>
                    <p class="lead">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Todo -->
    <section class="container py-5">
        <div class="row">
            <div class="col-lg-6 py-3 p-lg-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pVCgS6018jA?si=CH11FcWlPOeyZ407" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <h2>Lorem ipsum dolor sit, amet consectetur</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere consequatur voluptatibus dicta ullam vitae tempore eius facilis. Quisquam nisi molestiae in exercitationem obcaecati laboriosam cum et unde numquam, culpa voluptatem.</p>
                <br>
                <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere consequatur voluptatibus dicta ullam vitae tempore eius facilis. Quisquam nisi molestiae in exercitationem obcaecati laboriosam cum et unde numquam, culpa voluptatem.</p>
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section class="position-relative py-5 jarallax" data-jarallax='{ "speed": 0.6 }'style="background-image: url(https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="asset/image/logo.png" class="img-fluid" width="150" alt="">
                    <h1 class="text-white display-4 font-weight-bold">Timeline</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row">
            <div class="col-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge">
                            <p>10 Aug 1998</p>
                        </div>
                        <div class="timeline-card">
                            <h5>Birthday</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>
                    <li class="inverted">
                        <div class="timeline-badge">
                            <p>10 Aug 1998</p>
                        </div>
                        <div class="timeline-card">
                            <h5>Birthday</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>
                    <li class="timeline-arrow">
                        <i class="fa-solid fa-chevron-down"></i>
                    </li>
                </ul>
            </div>
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


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>