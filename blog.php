<?php
    require_once('php/connect.php');

    $sql = "SELECT * FROM articles";
    $result = $conn->query($sql) or die($conn->error);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
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
                    <h1 class="display-4 font-weight-bold">Blog</h1>
                    <p class="lead">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Blog -->
    <section class="container py-5">
        <div class="row pb-4">
            <div class="col-12 text-center">
                <div class="btn-group-custom">
                    <a href="blog.php?tag=html">
                        <button class="btn btn-primary active">All</button>
                    </a>
                    <button class="btn btn-primary">HTML</button>
                    <button class="btn btn-primary">CSS</button>
                    <button class="btn btn-primary">Javascript</button>
                    <button class="btn btn-primary">PHP</button>
                    <button class="btn btn-primary">MySQL</button>
                </div>
            </div>
        </div>

        <div class="row">
            <?php while($row = $result->fetch_assoc()) { ?>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="warpper-card-image">
                        <img src="<?php echo $row['image']?>"
                            class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['subject']?></h5>
                        <p class="card-text"><?php echo $row['sub_title']?></p>
                    </div>
                    <div class="p-3">
                        <a href="blog-detail.php?<?php echo $row['id'] ?>" class="btn btn-primary btn-block">Read More</a>
                    </div>
                </div>
            </section>
            <?php } ?>
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