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
                            <h1 class="text-white animated slideInDown">Contact</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Contact Us<span></span>
                    </p>
                    <h1 class="text-center mb-5">Contact For Any Query</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <p class="text-center mb-4">Have a question or need assistance? Contact us and our friendly team will be happy to help. We're here to provide support, answer inquiries, and address any concerns you may have. Reach out to us today and let us assist you in the best way possible</p>
                                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                                    <script>
                                    hbspt.forms.create({
                                        region: "na1",
                                        portalId: "40097068",
                                        formId: "e50acc71-a3fe-4e29-94df-b8d5d5384970"
                                    });
                                    </script>
                            <!-- <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here"
                                                id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <?php include 'common/footer.php'?>
    </div>

    <?php include 'common/jslibrary.php' ?>
</body>

</html>