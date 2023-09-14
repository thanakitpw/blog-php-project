<?php
    require_once('php/connect.php');
    $sql = "SELECT * FROM articles WHERE id = '".$_GET['id']."' ";
    $result = $conn->query($sql) or die($conn->error);

    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        header('Location: blog.php');
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['subject']; ?></title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <?php include_once('includes/navbar.php') ?>

    <!-- Page-Title -->
    <header data-jarallax='{ "speed": 0.6 }' class="jarallax"
        style="background-image: url(<?php echo $row['image']; ?>);">
        <div class="blog-image">
            <h1 class="display-4 font-weight-bold"><?php echo $row['subject']; ?></h1>
            <p class="lead"><?php echo $row['sub_title']; ?></p>
        </div>
    </header>

    <!-- Blog -->
    <section class="container blog-content">
        <div class="row">
            <div class="col-12">
                <?php echo $row['detail']; ?>
            </div>
            <div class="col-12">
                <hr>
                <p class="text-right text-muted"><?php echo date_format(new DateTime($row['update_at']), "j F Y") ?></p>
            </div>
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    <section class="col-12 p-2">
                        <div class="card h-100">
                            <a href="#" class="warpper-card-image">
                                <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHByb2dyYW1tZXJ8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                                    class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the
                                    card's content.</p>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the
                                    card's content.</p>
                            </div>
                            <div class="p-3">
                                <a href="#" class="btn btn-primary btn-block">Read More</a>
                            </div>
                        </div>
                    </section>

                    <section class="col-12 p-2">
                        <div class="card h-100">
                            <a href="#" class="warpper-card-image">
                                <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHByb2dyYW1tZXJ8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                                    class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the
                                    card's content.</p>
                            </div>
                            <div class="p-3">
                                <a href="#" class="btn btn-primary btn-block">Read More</a>
                            </div>
                        </div>
                    </section>

                    <section class="col-12 p-2">
                        <div class="card h-100">
                            <a href="#" class="warpper-card-image">
                                <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHByb2dyYW1tZXJ8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                                    class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the
                                    card's content.</p>
                            </div>
                            <div class="p-3">
                                <a href="#" class="btn btn-primary btn-block">Read More</a>
                            </div>
                        </div>
                    </section>

                    <section class="col-12 p-2">
                        <div class="card h-100">
                            <a href="#" class="warpper-card-image">
                                <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHByb2dyYW1tZXJ8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                                    class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the
                                    card's content.</p>
                            </div>
                            <div class="p-3">
                                <a href="#" class="btn btn-primary btn-block">Read More</a>
                            </div>
                        </div>
                    </section>

                    <section class="col-12 p-2">
                        <div class="card h-100">
                            <a href="#" class="warpper-card-image">
                                <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHByb2dyYW1tZXJ8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                                    class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the
                                    card's content.</p>
                            </div>
                            <div class="p-3">
                                <a href="#" class="btn btn-primary btn-block">Read More</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-12">
                <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator"
                    data-width="100%" data-numposts="5"></div>
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous"
                    src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v17.0" nonce="6vkI7puw"></script>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include_once('includes/footer.php') ?>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="/node_modules/jquery/dist/jquery.js"></script>
    <script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>