<?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = end($components);
?>
<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="/" class="navbar-brand p-0">
        <img src="img/logo.png" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="index.php" class="nav-item nav-link <?php if ($first_part=="index.php" || $first_part=="") {echo "active"; } else  {echo "noactive";}?>">Home</a>
            <a href="about.php" class="nav-item nav-link <?php if ($first_part=="about.php") {echo "active"; } else  {echo "noactive";}?>">About</a>
            <a href="service.php" class="nav-item nav-link <?php if ($first_part=="service.php") {echo "active"; } else  {echo "noactive";}?>">Service</a>
            <div class="nav-item dropdown">
                <a href="technology.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Technologies</a>
                <div class="dropdown-menu m-0 column-2">
                    <a href="technology.php" class="dropdown-item">React Js</a>
                    <a href="technology.php" class="dropdown-item">Angular</a>
                    <a href="technology.php" class="dropdown-item">Node Js</a>
                    <a href="technology.php" class="dropdown-item">Next Js</a>
                    <a href="technology.php" class="dropdown-item">Vue Js</a>
                    <a href="technology.php" class="dropdown-item">Wordpress CMS</a>
                    <a href="technology.php" class="dropdown-item">Webflow CMS</a>
                    <a href="technology.php" class="dropdown-item">Acquia CMS</a>
                    <a href="technology.php" class="dropdown-item">HTML</a>
                    <a href="technology.php" class="dropdown-item">CSS</a>
                    <a href="technology.php" class="dropdown-item">Magento</a>
                    <a href="technology.php" class="dropdown-item">Prestashop</a>
                    <a href="technology.php" class="dropdown-item">Shipify</a>
                    <a href="technology.php" class="dropdown-item">WooCommerce</a>
                </div>
            </div>
            <!-- <a href="project.php" class="nav-item nav-link <?php if ($first_part=="project.php") {echo "active"; } else  {echo "noactive";}?>">Project</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="team.php" class="dropdown-item">Our Team</a>
                    <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                    <a href="404.php" class="dropdown-item">404 Page</a>
                </div>
            </div> -->
            <a href="contact.php" class="nav-item nav-link <?php if ($first_part=="contact.php") {echo "active"; } else  {echo "noactive";}?>">Contact</a>
        </div>
        <a href="contact.php" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a>
    </div>
</nav>