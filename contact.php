<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
        style="background-image: url(https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80);">
        <div class="blog-image">
            <h1 class="display-4 font-weight-bold">Contact</h1>
            <p class="lead">Lorem ipsum dolor sit amet.</p>
        </div>
    </header>

    <!-- Contact -->
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="border-short-bottom">Contact Us</h1>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-address-card fa-4x py-2 text-info" aria-hidden="true"></i>
                        <h4 class="card-title">Address</h4>
                        <p class="card-text">Bangkok, Thailand</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-phone-square fa-4x py-2 text-info" aria-hidden="true"></i>
                        <h4 class="card-title">Phone</h4>
                        <p class="card-text">099-999-9999</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-envelope fa-4x py-2 text-info" aria-hidden="true"></i>
                        <h4 class="card-title">Email</h4>
                        <p class="card-text">example@email.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contact Form</h5>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone">Phone</label>
                                    <input id="phone" type="text" class="form-control" placeholder="Telephone Number">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control" placeholder="example@email.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10"
                                    placeholder="Enter your message"></textarea>
                            </div>
                            <!-- Recaptcha -->
                            <div id="recaptcha-wrapper" class="text-center my-2">
                                <div class="g-recaptcha d-inline-block" data-callback="recaptchaCallback" data-sitekey="6LdpGRwoAAAAALskXvaEhICkd55Fd_XwuyMmS00G"></div>
                              </div>
                            <button type="submit" class="btn btn-primary d-block mx-auto">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->
    <?php include_once('includes/footer.php') ?>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="/node_modules/jquery/dist/jquery.js"></script>
    <script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>