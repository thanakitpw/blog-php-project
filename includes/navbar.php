    <?php $file_name = basename($_SERVER['SCRIPT_FILENAME'],".php"); ?>
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-alpha fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="/asset/image/logo1.png" width="40" height="40" class="d-inline-block align-top" alt="">
                Xperz Consult
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKey"
                aria-controls="navbarKey" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarKey">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item <?php echo $file_name == 'index' ? 'active': '' ?>">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'about' ? 'active': '' ?>">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'blog' || $file_name == 'blog-detail' ? 'active': '' ?>">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'contact' ? 'active': '' ?>">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>