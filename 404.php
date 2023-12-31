<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'common/head.php' ?>
</head>

<body>
    <div class="bg-white p-0">
        <?php include 'common/loader.php' ?>

        <!-- Navbar & Hero Start -->
        <div class="position-relative p-0">

            <?php include 'common/navbar.php' ?>
            <div class="py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">Not Found</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                                  
                                    <li class="breadcrumb-item text-white active" aria-current="page">404</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- 404 Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                        <h2 class="display-1">404</h2>
                        <h2 class="mb-4">Page Not Found</h2>
                        <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe
                            go to our home page or try to use a search?</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="https://xpertlogic.xpertbazaar.com/">Go Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 404 End -->


        <?php include 'common/footer.php'?>
    </div>

    <?php include 'common/jslibrary.php' ?>
</body>

</html>