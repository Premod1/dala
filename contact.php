<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact | DALA</title>
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
        p{
            color: black;
        }
		.banner{position: relative; width: 100%;margin: 0 auto;}
		.banner img{width: 100%;}
		.heading{ color:rgb(255, 255, 255); position: absolute; top:20%; width: 50%; text-align: left; font-size: 2vw; margin-left: 7%; margin-top: 7%;}
        .heading2{ color:rgb(255, 255, 255); position: absolute; top:20%; width: 40%; text-align: left; font-size: 0.9vw; margin-left: 7%; margin-top: 7%;}

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
                margin: 3px 1px 1px  15%;
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
                    <a href="index.php" class="nav-item nav-link">HOME</a>
                    <a href="about-us.php" class="nav-item nav-link">ABOUT US</a>
                    <a href="news.php" class="nav-item nav-link">NEWS</a>
                    <a href="contact.php" class="nav-item nav-link active">CONTACT US</a>
                </div>
            </div>
</nav>
<!-- Navbar End -->

<!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-1 mb-5">
		<div class="row">
			<div class="banner">
				<img class="img-fluid me-2" src="img/Banner2.png" alt="bgimage">
				<h2 class="heading"></h2>
			 </div>
		</div>
	</div>
<!-- Header End -->

 <!-- Contact Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="image-stack">
                        <div style="position:relative">
                            <img src="img/Group 15-1.png" style="position:relative; top:0px; left:0px; z-index:0; width: 70%;"/>
                            <img src="img/Group 16-1.png" style="position:absolute; top:16%; left:40%; z-index:1; width: 70%;"/>
                        </div>
                    </div>
            </div>
            <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h1 class="display-6"><span class="vl"></span>&nbsp;COMPLAINTS</h1>
            </div>
                <br>
                <p class="mb-4">We welcome the feedback, suggestions, and complaints of customers of our members to improve the quality of our service. The DALA team is dedicated to attending to and intervening in all your inquiries to provide solutions.</p>   
                <br>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Name">
                                <label for="name">Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                                <label for="email">Email</label>
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
                                <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Max Size 5MB (.pdf,.docx,.ppt)</label>
                            <input class="form-control" type="file" id="formFile">
                          </div>
                        <div class="col-12">
                            <button class="btn btn-primary py-3 px-4" type="submit" style="background-color: #3c96e6;">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<div class="container-xxl py-5" style="width: 60%; margin-top: 4%;">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h1 class="display-6"><span class="vl"></span>&nbsp;CONTACT US</h1>
            </div>
            <br>
            <!-- <p class="text-center" style="color: black;  font-weight: bold;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>-->
            <br>
            <!--hhhhhhhhhhhhh-->
            <div class="row g-3">
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center p-4">
                        <img class="img-fluid center" src="img/loc.png" alt="" width="110px">
                        <br>
                        <p style="color: black;  font-weight: bold;">OUR LOCATION</p>
                        <p style="color: black;">7/1-1 Cotta Terrace,</br>Colombo 8, Sri Lanka</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center p-4">
                        <img class="img-fluid center" src="img/msg.png" alt="" width="110px">
                        <br>
                        <p style="color: black;  font-weight: bold;">WRITE US ON</p>
                        <p style="color: black;">info@dala.lk</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-center p-4">
                        <img class="img-fluid center" src="img/call.png" alt="" width="110px">
                        <br>
                        <p style="color: black;  font-weight: bold;">HOTLINE</p>
                        <p style="color: black;">011-XXXXXXX</p>
                        <p style="color: black;">011-XXXXXXX</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="text-center p-4">
                        <img class="img-fluid center" src="img/share.png" alt="" width="110px">
                        <br>
                        <p style="color: black;  font-weight: bold;">FOLLOW US ON</p>
                        <div class="container" style="margin-left: 10%;">
                            <div class="row" style="width:100%;">
                              <div class="col">
                                <img class="img-fluid center" src="img/facebook.png" alt="">
                              </div>
                              <div class="col">
                                <img class="img-fluid center" src="img/instagram.png" alt="">
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row g-3">
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center p-3">
                        <!--<img class="img-fluid center" src="img/Asset 1@4x 6-4.PNG" alt="">-->
                    </div>
                </div>                
            </div>
           <!--fffffffffffff-->
        </div>
    </div>

    <!-- Footer Start -->
	 <?php include 'footer.php';?>
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