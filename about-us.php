<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us | DALA</title>
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
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/main.min.css">

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
            margin-top: 3%;
        }

        .heading2 {
            color: rgb(255, 255, 255);
            position: absolute;
            top: 20%;
            width: 40%;
            text-align: left;
            font-size: 0.9vw;
            margin-left: 7%;
            margin-top: 6%;
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


        .collapsibledala {
            background-color: #002c94;
            color: white;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            border-style: ridge;
        }

        .activedala,
        .collapsibledala:hover {
            background-color: #555;
        }

        .collapsibledala:after {
            content: '\002B';
            color: white;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }

        .activedala:after {
            content: "\2212";
        }

        .contentdala {
            padding: 0 18px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
            background-color: #e6e6e6;
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
                <a href="index.php" class="nav-item nav-link">HOME</a>
                <a href="about-us.php" class="nav-item nav-link active">ABOUT US</a>
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
                <img class="img-fluid me-2" src="img/Banner.png" alt="bgimage">
                <!--
                <h2 class="heading">ABOUT US</h2>
                <p class="heading2">DALA was incorporated as a company limited by guarantee under the Companies Act No.7 of 2007 (No. GA00244823) to promote and protect the digital lending business in Sri Lanka. Currently, Our members employ 400+ persons and cater to the financial needs of over 750,000 Sri Lankans.<br><br>DALA is a collective of companies that promote the sustainable growth of the digital lending business in Sri Lanka by way of self-governance and ethical business practices which are given in the DALA Code of Conduct.</p>
                -->
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!--
    <div class="container-xxl py-5">
        <div class="container-test">
            <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6"><span class="vl"></span>&nbsp;OUR MISSION & OBJECTIVES</h1>
                        <div class="d-flex align-items-top mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>To promote and protect the interests of the Association’s members by fostering cooperation among members of the digital lending industry, for the rapid development of the said industry in Sri Lanka.</span>
                        </div>
                        <div class="d-flex align-items-top mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Communicate and cooperate with all relevant Governmental Authorities and other stakeholders in the digital lending industry, as well as represent the Association’s, its members’, and the industry’s interests before such Governmental Authorities and other stakeholders.</span>
                        </div>
                        <div class="d-flex align-items-top mb-4">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>To establish and regulate rules, standards, and practices that members must follow in order to maintain the highest ethical and disciplinary standards, and to internally monitor member compliance with rules, standards, and practices in order to ensure that the Association is not discredited by its members.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="container22">
                            <div class="image-stack">
                                <div class="image-stack__item image-stack__item--bottom ">
                                <img src="img/Group 15.png" alt="" class="img_class1">
                                </div>
                                <div class="image-stack__item image-stack__item--top">
                                <img src="img/Group 16.png" alt=""  class="img_class1">
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->

    <div class="container-xxl py-20" style="width: 60%;">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h1 class="display-6"><span class="vl"></span>&nbsp;ABOUT US</h1>
            </div>
            <br>
            <p class="text-center">DALA was incorporated as a company limited by guarantee under the Companies Act No.7
                of 2007 (No. GA00244823) to promote and protect the digital lending business in Sri Lanka. Currently,
                Our members employ 400+ persons and cater to the financial needs of over 750,000 Sri
                Lankans.<br><br>DALA is a collective of companies that promote the sustainable growth of the digital
                lending business in Sri Lanka by way of self-governance and ethical business practices which are given
                in the DALA Code of Conduct.</p>
            <br>
        </div>
    </div>

    <div class="album py-1 bg-light">
        <div class="container">
            <div class="row py-5 mb-1">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 100%;">
                    <h1 class="display-6" style="width:100%;"><span class="vl"></span>&nbsp;EXECUTIVE COUNCIL</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/dala_members/Polina_Vertey.jpg" alt="Card image cap">
                        <div class="card-body" style="background-color: #0e0c5f;">
                            <p class="card-text"
                                style="font-size: 19px;color:white;text-align: center; font-weight: 700;">Polina Vertey
                                - Chairperson</p>
                            <p class="card-text" style="color:white;">
                                < Profile description here>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/dala_members/Vadym_Bortnyk.jpg" alt="Card image cap">
                        <div class="card-body" style="background-color: #0e0c5f;">
                            <p class="card-text"
                                style="font-size: 19px;color:white;text-align: center; font-weight: 700;">Vadym Bortnyk
                            </p>
                            <p class="card-text" style="color:white;">
                                < Profile description here>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/dala_members/Igors_Zemits.jpg" alt="Card image cap">
                        <div class="card-body" style="background-color: #0e0c5f;">
                            <p class="card-text"
                                style="font-size: 19px;color:white;text-align: center; font-weight: 700;">Igors Zemits
                            </p>
                            <p class="card-text" style="color:white;">
                                < Profile description here>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/dala_members/Alexander_Afanasyev.jpg" alt="Card image cap">
                        <div class="card-body" style="background-color: #0e0c5f;">
                            <p class="card-text"
                                style="font-size: 19px;color:white;text-align: center; font-weight: 700;">Alexander
                                Afanasyev</p>
                            <p class="card-text" style="color:white;">
                                < Profile description here>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/dala_members/Ivan_Streltsov.jpg" alt="Card image cap">
                        <div class="card-body" style="background-color: #0e0c5f;">
                            <p class="card-text"
                                style="font-size: 19px;color:white;text-align: center; font-weight: 700;">Ivan Streltsov
                            </p>
                            <p class="card-text" style="color:white;">
                                < Profile description here>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="album py-1 bg-light">
        <div class="container">
            <div class="row py-5 mb-1">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 100%;">
                    <h1 class="display-6" style="width:100%;"><span class="vl"></span>&nbsp;THE SECRETARIAT</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/dala_members/Ranil_de_silva.jpg" alt="Card image cap">
                        <div class="card-body" style="background-color: #0e0c5f;">
                            <p class="card-text"
                                style="font-size: 19px;color:white;text-align: center; font-weight: 700;">Ranil De Silva
                                - President</p>
                            <p class="card-text" style="color:white;">
                                < Profile description here>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/dala_members/noimage.png" alt="Card image cap">
                        <div class="card-body" style="background-color: #0e0c5f;">
                            <p class="card-text"
                                style="font-size: 19px;color:white;text-align: center; font-weight: 700;">Person 2</p>
                            <p class="card-text" style="color:white;">
                                < Profile description here>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/dala_members/noimage.png" alt="Card image cap">
                        <div class="card-body" style="background-color: #0e0c5f;">
                            <p class="card-text"
                                style="font-size: 19px;color:white;text-align: center; font-weight: 700;">Person 3</p>
                            <p class="card-text" style="color:white;">
                                < Profile description here>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row py-5 mb-1">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h1 class="display-6" style="width:100%;"><span class="vl"></span>&nbsp;CODE OF CONDUCT</h1>
                </div>
            </div>
            <div class="align-items-top mb-3">
                <span><i class="fas fa-caret-right"></i> &nbsp;The DALA Code of Conduct is an important milestone for
                    Sri Lanka’s online lending services industry as it provides a self-regulatory platform for its
                    members.</span>
            </div>
            <div class="align-items-top mb-3">
                <span><i class="fas fa-caret-right"></i> &nbsp;Recognising the need for the industry to take action to
                    improve itself, DALA members have worked together to develop a code of conduct that promotes good
                    conduct and a strong customer-focused culture. The Code of Conduct supports existing laws and
                    regulations, bringing self-regulation to the industry.</span>
            </div>
            <div class=" align-items-top mb-3">
                <span><i class="fas fa-caret-right"></i> &nbsp;This Code of Conduct demonstrates the commitment of DALA
                    members to continuously improving conduct, culture, and consumer outcomes for the benefit of Sri
                    Lankans and the Sri Lankan economy.</span>
            </div>

            <!--
            <button class="collapsibledala">< Code Of Conduct Title 1 Here ></title></button>
            <div class="contentdala active">
            <p>The DALA Code of Conduct is an important milestone for Sri Lanka’s online lending services industry as it provides a self-regulatory platform for its members.</p>
            </div>
            <button class="collapsibledala">< Code Of Conduct Title 2 Here ></button>
            <div class="contentdala">
            <p>Recognising the need for the industry to take action to improve itself, DALA members have worked together to develop a code of conduct that promotes good conduct and a strong customer-focused culture. The Code of Conduct supports existing laws and regulations, bringing self-regulation to the industry.</p>
            </div>
            <button class="collapsibledala">< Code Of Conduct Title 3 Here ></button>
            <div class="contentdala">
            <p>This Code of Conduct demonstrates the commitment of DALA members to continuously improving conduct, culture, and consumer outcomes for the benefit of Sri Lankans and the Sri Lankan economy.</p>
            </div>
            -->
            <!--
            <button class="collapsibledala">Open Section</button>
            <div class="contentdala">
            <p>4 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <button class="collapsibledala">Open Section</button>
            <div class="contentdala">
            <p>5 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            -->

            <script>
                var coll = document.getElementsByClassName("collapsibledala");
                var i;

                for (i = 0; i < coll.length; i++) {
                    coll[i].addEventListener("click", function () {
                        this.classList.toggle("activedala");
                        var content = this.nextElementSibling;
                        if (content.style.maxHeight) {
                            content.style.maxHeight = null;
                        } else {
                            content.style.maxHeight = content.scrollHeight + "px";
                        }
                    });
                }
            </script>

        </div>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row py-5 mb-1">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h1 class="display-6" style="width:100%;"><span class="vl"></span>&nbsp;OUR MEMBERS</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="padding: 50px 50px 70px;" src="img/our_members/ROBO_CASH.png"
                            alt="Card image cap">
                        <div class="card-body" style="background-color: none;">
                            <p class="card-text" style="color:black;">Description Here (Characters 150 - 250)</p>
                        </div>
                        <p style="font-size:16px; text-align: center;"><u><b><a href="https://robocash.lk/"
                                        target="_blank">Visit Us</a></b></u>&nbsp;<i class="fa fa-angle-right"
                                style="color:#2772FF"></i></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="padding: 26px 50px 52px;" src="img/our_members/LOTUS_LOAN.svg"
                            alt="Card image cap">
                        <div class="card-body" style="background-color: none;">
                            <p class="card-text" style="color:black;">Description Here (Characters 150 - 250)</p>
                        </div>
                        <p style="font-size:16px; text-align: center;"><u><b><a href="https://lotus.loan/"
                                        target="_blank">Visit Us</a></b></u>&nbsp;<i class="fa fa-angle-right"
                                style="color:#2772FF"></i></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="padding: 50px 50px 80px;" src="img/our_members/LOANME_LOGO.png"
                            alt="Card image cap">
                        <div class="card-body" style="background-color: none;">
                            <p class="card-text" style="color:black;">Description Here (Characters 150 - 250)</p>
                        </div>
                        <p style="font-size:16px; text-align: center;"><u><b><a href="https://loanme.lk/en"
                                        target="_blank">Visit Us</a></b></u>&nbsp;<i class="fa fa-angle-right"
                                style="color:#2772FF"></i></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="padding: 30px 50px 50px;" src="img/our_members/FINOL.LK2.jpg"
                            alt="Card image cap">
                        <div class="card-body" style="background-color: none;">
                            <p class="card-text" style="color:black;">Description Here (Characters 150 - 250)</p>
                        </div>
                        <p style="font-size:16px; text-align: center;"><u><b><a href="https://www.fino.lk/en"
                                        target="_blank">Visit Us</a></b></u>&nbsp;<i class="fa fa-angle-right"
                                style="color:#2772FF"></i></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="padding: 50px 50px 53px;" src="img/our_members/CASHX_LOGO.jpeg"
                            alt="Card image cap">
                        <div class="card-body" style="background-color: none;">
                            <p class="card-text" style="color:black;">Description Here (Characters 150 - 250)</p>
                        </div>
                        <p style="font-size:16px; text-align: center;"><u><b><a href="https://cashx.lk/en/"
                                        target="_blank">Visit Us</a></b></u>&nbsp;<i class="fa fa-angle-right"
                                style="color:#2772FF"></i></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="padding: 30px 50px 45px;" src="img/our_members/ONE_CREDIT.png"
                            alt="Card image cap">
                        <div class="card-body" style="background-color: none;">
                            <p class="card-text" style="color:black;">Description Here (Characters 150 - 250)</p>
                        </div>
                        <p style="font-size:16px; text-align: center;"><u><b><a href="https://www.oncredit.lk/en"
                                        target="_blank">Visit Us</a></b></u>&nbsp;<i class="fa fa-angle-right"
                                style="color:#2772FF"></i></p>
                    </div>
                </div>
                <!--
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/Asset 1@4x 6-1.png" alt="Card image cap">
                        <div class="card-body" style="background-color: none;">
                            <p class="card-text" style="color:black;">This is a wider card with supporting text below as a natural lead-in to additional content.
                                This content is a little bit longer.</p>
                        </div>
                        <p style="font-size:16px; text-align: center;"><u><b>Visit Us</b></u>&nbsp;<i class="fa fa-angle-right" style="color:#2772FF"></i></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/icon-1.png" alt="Card image cap">
                        <div class="card-body" style="background-color: none;">
                            <p class="card-text" style="color:black;">This is a wider card with supporting text below as a natural lead-in to additional content.
                                This content is a little bit longer.</p>
                        </div>
                        <p style="font-size:16px; text-align: center;"><u><b>Visit Us</b></u>&nbsp;<i class="fa fa-angle-right" style="color:#2772FF"></i></p>
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>

    <div class="container-xxl py-5" style="width: 60%;">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h1 class="display-6"><span class="vl"></span>&nbsp;MEMBER BENEFITS</h1>
            </div>
            <br>
            <p>
                Membership at DALA is an ideal forum to share industrial experiences and connect with fellow members.
                The association represents its members common interests with government bodies in order to promote
                business and maintain the integrity of the digital lending business in Sri Lanka. At the same time, DALA
                functions as a knowledge base for its members to share regular market updates and help each other in
                resolving industry issues.
                We welcome entities associated with the wider fintech industry to join DALA as a member or a partner
                organization. Let us join hands to develop the fintech industry in Sri Lanka.
            </p>
            <hr>
            <p class="text-center">
                If you wish to join DALA, please connect with us via email: <b><span
                        style="color:#0292e3;">info@dala.lk</span></b>
            </p>
        </div>
    </div>

    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->


    <!-- Back 
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
    to Top -->

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