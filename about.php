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
    <?php include_once('includes/footer.php') ?>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>