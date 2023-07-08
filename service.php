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
                            <h1 class="text-white animated slideInDown">Service</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                                  
                                    <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


       <!-- Service Start -->
       <?php include 'common/services.php' ?>
        <!-- Service End -->


        <!-- Newsletter Start -->
        <!-- <div class="bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <p class="section-title text-white justify-content-center"><span></span>Newsletter<span></span>
                        </p>
                        <h1 class="text-center text-white mb-4">Stay Always In Touch</h1>
                        <p class="text-white mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos
                            labore. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                                placeholder="Enter Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Newsletter End -->


        <!-- Testimonial Start -->
        <?php include 'common/testimonials.php'?>
        <!-- Testimonial End -->

        <?php include 'common/footer.php'?>
    </div>

    <?php include 'common/jslibrary.php' ?>
</body>

</html>