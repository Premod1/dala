<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home | DALA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        p {
            color: black;
        }

        .banner {
            position: relative;
            width: 100%;
            margin: 0 auto;
        }

        .banner img {
            width: 100%;
        }

        .heading {
            color: rgb(255, 255, 255);
            position: absolute;
            top: 20%;
            width: 50%;
            text-align: left;
            font-size: 2vw;
            margin-left: 7%;
            margin-top: 4%;
        }

        .heading2 {
            color: rgb(255, 255, 255);
            position: absolute;
            top: 20%;
            width: 40%;
            text-align: left;
            font-size: 0.9vw;
            margin-left: 7%;
            margin-top: 7%;
        }

        .vl {
            border-left: thick solid #007eec;
        }

        .container22 {
            padding: 2px 2px;
            width: 100%;
            margin: 0 auto;
        }

        .image-stack {
            position: relative;
            width: 80%;
        }

        .image-stack__item--bottom {
            position: absolute;
            right: 0;
            top: 0;
            width: 80%;
            margin-right: -23%;
            z-index: -1;
        }

        .image-stack__item--top {
            padding-top: 13%;
            padding-right: 0%;
            width: 80%;
        }

        .img_class1 {
            width: 100%;
            display: block;
        }

        .sizeDivLeft {
            margin: 3px 1px 1px 15%;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        /*mobile view*/
        @media only screen and (max-width: 600px) {
            .sizeDivLeft {
                margin: 3px 1px 1px 12px;
            }
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <img class="img-fluid me-2" src="img/icon-1.png" alt="" style="width: 240px;">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="index.php" class="nav-item nav-link active">HOME</a>
                <a href="about-us.php" class="nav-item nav-link">ABOUT US</a>
                <a href="news.php" class="nav-item nav-link">NEWS</a>
                <a href="contact.php" class="nav-item nav-link">CONTACT US</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-1 mb-5">
        <div class="row">
            <div class="banner">
                <img class="img-fluid me-2" src="img/Banner.jpg" alt="bgimage">

                <!--
                <h2 class="heading">PROFFESIONAL FINANCING</h2>
                <p class="heading2">To ensure that the members conduct their business ethically, honestly  and in full compliance with the laws of the country, thereby fostering sound business practices, harmony among the members, favourable
                    relationships with the relevant Authorities and maintaining the
                    integrity and the trust of the digital lending business in Sri Lanka.</p>
                -->
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6"><span class="vl"></span>&nbsp;WHO WE ARE</h1>
                    <br>
                    <p class="animated slideInDown">DALA (Digital Alternative Lending Association) is a non-profit
                        oriented association registered under the Companies Act No.7 of 2007. DALA plays a significant
                        role in the booming fintech industry in Sri Lanka. We stand out as the only self-regulating body
                        for service providers in the digital lending industry. The establishment of DALA platform is a
                        watershed to strengthen a solid rapport among its members, customers, stakeholders, and relevant
                        supervisory authorities in a more collaborative, open, and transparent manner. To achieve this
                        objective, DALA is committed to adhering to fair and ethical business standards, practices, and
                        laws.
                    </p>
                    <p class="animated slideInDown">
                        Our members are dedicated to uplifting and supporting the lifestyles of Sri Lankans with a
                        financial helping hand when they are in need, and at the same time, DALA will also boost the
                        sustainable development and growth of the Sri Lankan financial sector. Most importantly, as a
                        self-regulatory platform, DALA is a unique marketplace to facilitate and encourage the digital
                        lending industry representing the common interests of our members.</p>
                    <br>
                    <a href="about-us.php" target="_self"><button type="button" class="btn btn-primary"
                            style="background-color: #04a2d2;">Read More</button></a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="container22">
                            <div class="image-stack">
                                <div class="image-stack__item image-stack__item--bottom ">
                                    <img src="img/Group 15.png" alt="" class="img_class1">
                                </div>
                                <div class="image-stack__item image-stack__item--top">
                                    <img src="img/Group 16.png" alt="" class="img_class1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="image-stack">
                        <div style="position:relative">
                            <img src="img/Group 15-1.png"
                                style="position:relative; top:0px; left:0px; z-index:0; width: 70%;" />
                            <img src="img/Group 16-1.png"
                                style="position:absolute; top:16%; left:40%; z-index:1; width: 70%;" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6"><span class="vl"></span>&nbsp;PURPOSE STATEMENT / OBJECTIVES</h1>
                        <br>
                        <div class="d-flex align-items-top mb-3">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>We strive to ensure that the digital lending community in Sri Lanka conducts business
                                ethically, honestly, and in full compliance with the laws of the country, thereby
                                fostering sound business practices, harmony among the members, favorable relationships
                                with the relevant authorities, and maintaining the integrity and trust of the fintech
                                industry in Sri Lanka. </span>
                        </div>
                        <!--
                        <div class="d-flex align-items-top mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Communicate and cooperate with all relevant Governmental Authorities and other stakeholders in the digital lending industry, as well as represent the Association’s, its members’, and the industry’s interests before such Governmental Authorities and other stakeholders.</span>
                        </div>
                        <div class="d-flex align-items-top mb-4">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>To establish and regulate rules, standards, and practices that members must follow in order to maintain the highest ethical and disciplinary standards, and to internally monitor member compliance with rules, standards, and practices in order to ensure that the Association is not discredited by its members.</span>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Start -->
    <!--
    <div class="container-xxl py-5" style="width: 60%;">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h1 class="display-6"><span class="vl"></span>&nbsp;TO BECOME A MEMBER?</h1>
            </div>
            <br>
            <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
            <br>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light p-5 text-center">
                        <img class="img-fluid mb-4 " src="img/icon-7.png" alt="">
                        <h5 class="mb-3 text-center">CONVENTIONAL LOANS</h5>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp text-center" data-wow-delay="0.3s">
                    <div class="p-5" style="background-color: #007eec;">
                        <img class="img-fluid mb-4" src="img/icon-3.png" alt="">
                        <h5 class="mb-3 text-center">JUMBO LOANS</h5>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp text-center" data-wow-delay="0.5s">
                    <div class="service-item bg-light p-5">
                        <img class="img-fluid mb-4" src="img/icon-9.png" alt="">
                        <h5 class="mb-3 text-center">USDA LOANS</h5>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp text-center" data-wow-delay="0.1s" >
                    <div class="p-5" style="background-color: #007eec;" >
                        <img class="img-fluid mb-4" src="img/icon-5.png" alt="">
                        <h5 class="mb-3 text-center">FHA LOANS</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp text-center" data-wow-delay="0.3s">
                    <div class="service-item bg-light p-5">
                        <img class="img-fluid mb-4" src="img/icon-2.png" alt="">
                        <h5 class="mb-3 text-center">CONVENTIONAL LOANS</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp text-center" data-wow-delay="0.5s">
                    <div class="p-5" style="background-color: #007eec;">
                        <img class="img-fluid mb-4" src="img/icon-8.png" alt="">
                        <h5 class="mb-3 text-center">MINI LOANS</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <!-- Service End -->
    <!--
    <div class="container-xxl py-5" style="width: 60%;">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h1 class="display-6"><span class="vl"></span>&nbsp;MEMBER BENIFITS</h1>
            </div>
            <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>  
        </div>
    </div>
    <div class="container-xxl py-5" style="width: 60%;">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h1 class="display-6"><span class="vl"></span>&nbsp;OUR MEMBERS</h1>
            </div>
            <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
            <br>
            <div class="row g-3">
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center p-3" style="background-color: #0025a0;">
                        <span class="text-primary fs-5">MEMBER 1</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center p-3" style="background-color: #0025a0;">
                        <span class="text-primary fs-5">MEMBER 2</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-center p-3" style="background-color: #0025a0;">
                        <span class="text-primary fs-5">MEMBER 3</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="text-center p-3" style="background-color: #0025a0;">
                        <span class="text-primary fs-5">MEMBER 4</span>
                    </div>
                </div>
            </div>
            <br>
            <div class="row g-3">
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center p-3" style="background-color: #0025a0;">
                        <span class="text-primary fs-5">MEMBER 1</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center p-3" style="background-color: #0025a0;">
                        <span class="text-primary fs-5">MEMBER 2</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-center p-3" style="background-color: #0025a0;">
                        <span class="text-primary fs-5">MEMBER 3</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="text-center p-3" style="background-color: #0025a0;">
                        <span class="text-primary fs-5">MEMBER 4</span>
                    </div>
                </div>
                
            </div>
            <br>
            <img class="img-flui center" src="img/Network.PNG" alt="">
        </div>
    </div>
    -->

    <div class="container-xxl py-2" style="width: 100%;">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6"><span class="vl"></span>&nbsp;OUR MEMBERS</h1>
            </div>
            <br>
            <div class="row g-3">
                <div class=" col-md-4 col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center p-3">
                        <img class="img-thumbnail" src="img/Asset 1@4x 6.png" alt="">
                    </div>
                </div>
                <div class=" col-md-4 col-sm-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-center p-3">
                        <img class="img-thumbnail center" src="img/Asset 1@4x 6-2.png" alt="">
                    </div>
                </div>
                <div class=" col-md-4 col-sm-12 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center p-3">
                        <img class="img-thumbnail center" src="img/Asset 1@4x 6-5.png" alt="">
                    </div>
                </div>
            </div>
            <br>
            <div class="row g-3">
                <div class=" col-md-4 col-sm-12 wow fadeIn" data-wow-delay="0.7s">
                    <div class="text-center p-3">
                        <img class="img-thumbnail center" src="img/Asset 1@4x 6-3.png" alt="">
                    </div>
                </div>
                <div class=" col-md-4 col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center p-3">
                        <img class="img-thumbnail center" src="img/Asset 1@4x 6-4.png" alt="">
                    </div>
                </div>
                <div class=" col-md-4 col-sm-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-center p-3">
                        <img class="img-thumbnail center" src="img/Asset 1@4x 6-6.png" alt="">
                    </div>
                </div>
                <!--
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center p-3">
                        <img class="img-fluid center" src="img/Asset 1@4x 6-1.PNG" alt="">
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="text-center p-3">
                        <img class="img-fluid center" src="img/icon-1.PNG" alt="">
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>
    <!-- Resource start
    <div class="container-xxl py-5" style="width: 60%;">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h1 class="display-6"><span class="vl"></span>&nbsp;RESOURCES</h1>
            </div>
            <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
            <br>
            <div class="row g-3">
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="card">
                        <img src="img/person2.jpg" alt="Avatar" style="width:100%">
                        <div class="container">
                            <br>
                            <h5><b>Title text</b></h5> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis mauris purus, at suscipit molestie.</p> 
                            <p style="font-size:14px; text-align: left;"><u><b>Read More</b></u>&nbsp;<i class="fa fa-angle-right" style="color:#2772FF"></i></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="card">
                        <img src="img/person2.jpg" alt="Avatar" style="width:100%">
                        <div class="container">
                            <br>
                            <h5><b>Title text</b></h5> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis mauris purus, at suscipit molestie.</p> 
                            <p style="font-size:14px; text-align: left;"><u><b>Read More</b></u>&nbsp;<i class="fa fa-angle-right" style="color:#2772FF"></i></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="card">
                        <img src="img/person2.jpg" alt="Avatar" style="width:100%">
                        <div class="container">
                            <br>
                            <h5><b>Title text</b></h5> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis mauris purus, at suscipit molestie.</p> 
                            <p style="font-size:14px; text-align: left;"><u><b>Read More</b></u>&nbsp;<i class="fa fa-angle-right" style="color:#2772FF"></i></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="card">
                        <img src="img/person2.jpg" alt="Avatar" style="width:100%">
                        <div class="container">
                            <br>
                            <h5><b>Title text</b></h5> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis mauris purus, at suscipit molestie.</p> 
                            <p style="font-size:14px; text-align: left;"><u><b>Read More</b></u>&nbsp;<i class="fa fa-angle-right" style="color:#2772FF"></i></p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <br>
           Resource End-->
    </div style="background-image: url('img/whatourclientsay.png');">

    <div>

    </div>
    </div>

    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>