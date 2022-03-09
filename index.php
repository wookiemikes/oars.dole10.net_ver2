<?php


//session_start();
include 'db/server.php';
include 'login.php';
require 'indextest.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Online AEP Application</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/AEP_icon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style2.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NewBiz - v2.1.0
  * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<?php

if (isset($_POST['aep_prereg_company'])) { //user registering
    $userid = "";
    $_SESSION['company_email'] = $_POST["company_email"];
    $_SESSION['comp_reg_no'] = $_POST["comp_reg_no"];
    $_SESSION['company_pwd'] = $_POST["company_pwd"];
    $_SESSION['ein'] = $_POST["ein"];
    require 'index_prereg1.php';
}

/*if (isset($_POST['aep_prereg_individual'])) { //user registering
    $userid = "";
    $_SESSION['indi_uname'] = $_POST["indi_uname"];
    $_SESSION['indi_pwd'] = $_POST["indi_pwd"];
    require 'index_prereg2.php';
}*/
?>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container">

            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an text logo -->
                <!-- <h1><a href="index.html">NewBiz</a></h1> -->
                <a href="index.html"><img src="assets/img/lglogo.png" alt="" class="img-fluid" width="30px" height="80px"></a>
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="#about">About AEP</a></li>
                    <li><a href="http://dole10.net/">DOLE - X Portal</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav><!-- .main-nav -->

        </div>
    </header><!-- #header -->

    <!-- ======= Intro Section ======= -->
    <section id="intro" class="clearfix">
        <div class="container" data-aos="fade-up">

            <div class="intro-info">
                <h2><span>O</span>nline <br> <span>A</span>EP <br> <span>R</span>egistration <br><span>S</span>ystem</h2>

            </div>

            <div class="intro-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets/img/intro-img.svg" alt="" class="img-fluid">
            </div>

            <div class="intro-info">
                <div class="col-sm-12 col-md-6 col-lg-9 mx-auto">
                    <div class="card card-signin my-0">
                        <div class="card-body">
                            <h5 class="card-title text-center">Sign In</h5>
                            <form class="form-signin" action="index.php" method="post">
                                <div class="form-label-group">
                                    <input type="text" id="inputEmail" class="form-control" name="comp_login_uname" placeholder="Email" required autofocus>
                                    <label for="inputEmail"></label>
                                </div>

                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" class="form-control" name="comp_login_pwd" placeholder="Password" required>
                                    <label for="inputPassword"></label>
                                </div>

                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                                </div>
                                <input type="submit" name="comp_login" class="btn btn-lg btn-primary btn-block text-uppercase" value="SIGN IN">

                                <button class="btn btn-lg btn-google btn-block text-uppercase" type="button" data-toggle="modal" data-target="#modalCompany">Register</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
    </section><!-- End Intro Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3><b>About Us</b></h3>

                </header>

                <div class="row about-container">

                    <div class="col-lg-12 content order-lg-1 order-2">
                        <p>
                            Under Article 40 of the Labor Code of the Philippines,
                            as amended, any alien seeking admission to the Philippines for employment purposes
                            and any domestic or foreign employer who desires to engage an alien for employment in
                            the Philippines shall obtain an employment permit from the Department of Labor and Employment.
                        </p>
                        <br>
                        <p>
                            The Alien Employment Permit (AEP) is a permit issued to a nonresident alien or foreign national seeking admission to the Philippines for employment purposes after a determination
                            of the non-availability of Filipino citizen who is competent, able and willing at the time of application to perform the services for which the alien is desired.
                        </p>
                        <br>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                            <h4 class="title"><a href="">CLIENT/APPLICANT(S)</a></h4>

                            <p class="description">All foreign nationals who intend to engage in gainful employment in the Philippines and any domestic or foreign employer who desires to engage an alien for employment in the Philippines.</p>
                        </div>
                        <br>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="fa fa-photo"></i></div>
                            <h4 class="title"><a href="">REQUIREMENTS</a></h4>
                            <p class="description">
                                <ul style="margin-left: 70px;">
                                    <li>
                                        A. For Issuance of New AEP
                                        <ol style=" margin-left: 30px;">
                                            <li>Duly accomplished application form</li>
                                            <li>Photocopy of passport of Foreign National (FN) with valid visa* and present original Certificate of Recognition for refugees or stateless persons*</li>
                                            <li>Original copy of Notarized Contract of Employment/Appointment or Board Secretary’s Certificate of Election enumerating the duties and responsibilities, annual salary and other benefits of FN</li>
                                            <li>Photocopy of valid Mayor’s Permit including CEZA registered companies
                                                <ul>
                                                    <li>If <b>PEZA</b> registered:
                                                        <ul>
                                                            <li>PEZA registration* or</li>
                                                            <li>Ecozone Authority*</li>
                                                        </ul>
                                                    </li>
                                                    <li> If construction company:
                                                        <ul>
                                                            <li>PCAB or</li>
                                                            <li>DO 18-A Registration*</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>Two (2) pieces 2×2 ID picture with white background</li>
                                            <li>Proof of Taxpayer’s Identification Number (TIN)</li>
                                            <li>If in negative list per EO-184, authority to employ STP from DOJ or PRC or DTI or DENR, whichever is applicable</li>
                                            <li>If retailer or in the negative list, updated General Information Sheet (GIS)</li>
                                            <li>Authorization letter from the company or foreign national and photocopy of their IDs </li>

                                        </ol>
                                    </li>
                                    <li>
                                        B. For Renewal of AEP
                                        <ul>
                                            <li>Duly accomplished application form</li>
                                            <li>AEP Card or photocopy of current AEP</li>
                                            <li>Photocopy of passport of Foreign National (FN) with valid visa* and present original Certificate of Recognition for refugees or stateless persons*</li>
                                            <li>Original copy of Notarized Contract of Employment/Appointment or Board Secretary’s Certificate of Election enumerating the duties and responsibilities, annual salary and other benefits of FN.</li>
                                            <li>Two (2) pieces 2×2 ID picture with white background</li>
                                            <li>Proof of Taxpayer’s Identification Number (TIN)</li>
                                            <li>If in negative list per EO-184, authority to employ STP from DOJ or PRC or DTI or DENR, whichever is applicable</li>
                                            <li>If retailer or in the negative list, updated General Information Sheet (GIS)</li>
                                            <li>Authorization letter from the company or foreign national and photocopy of their IDs</li>
                                            


                                        </ul>
                                    </li>

                                </ul>


                            </p>


                        </div>



                    </div>

                    <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
                        <img src="assets/img/about-img.svg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!--Modal Register Company-->

        <div class="modal fade" id="modalCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle"><img src="assets/img/lglogo.png" style="margin: 2px 10px 2px 0px;" alt="" height="20px" width="20px">Register Company Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="user" action="index.php" method="post">
                        <div class="modal-body">
                            <div class="col-md-12 " style="text-align: center;text-justify: inter-word;">
                                <b><p>DISCLAIMER</p></b>
                            </div>
                            <div class="col-md-12 " style="text-align: justify;text-justify: inter-word;">
                                        <p>&nbsp;Please be informed that as an applicant of the various programs of the DOLE-X Regional Office, this office will require
                                            your personal information that is protected under the Data Privacy Act of 2012</p><br>
                                        <p>&nbsp;For this purpose, upon entering this DOLE-X Regional Office Online Portal you hereby freely give your iformal consent to allow this office
                                            to collect and process your personal information.</p>
                                        <p>&nbsp;Upon agreeing to the terms of this portal, and thus giving your consent, the regional office, including its authorized personnel will not be held
                                            accountable or liable for the collection and processing of your personal information, to the extent that it is allowed by the existing laws and guidelines.</p>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <input type="hidden" class="form-control" name="comp_reg_no" id="comp_reg_no" value="<?php echo $output;?>" readonly>
                                <div class="invalid-feedback">
                                    Establishment Name cannot be blank.
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="email" class="form-control form-control-user" name="company_email" id="exampleFirstName" placeholder="Email (Preferably Company Email)" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="ein" id="exampleFirstName" placeholder="Rule 1020 EIN" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="company_pwd" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <div class="form-check">
                                        <input style="font-size: 11px;" type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                        <label style="font-size: 11px;" class="form-check-label" for="exampleCheck1">By checking this means you agree to our <a href="tandco.php" target="_blank">Terms of Service and Privacy Statement</a>. We’ll occasionally send you account related emails.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">

                            <input type="submit" name="aep_prereg_company" class="btn btn-primary btn-user btn-block" placeholder="Register Account">
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 footer-info">
                        <iframe allowfullscreen="" frameborder="0" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d695.6564043342275!2d124.64723952192864!3d8.47921403849653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x51e68fb2ec5970dc!2sPOEA+Regional+Extension!5e1!3m2!1sen!2sph!4v1562142119850!5m2!1sen!2sph" style="border:0" width="100%"></iframe>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>

                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="http://ro10.dole.gov.ph/default.php?retsamlakygee=906&amp;resource=d9681d05860552e9c3113da381f916fc">Transparency</a></li>
                            <li><a href="http://ro10.dole.gov.ph/index.php">Services</a></li>
                            <li><a href="http://ro10.dole.gov.ph/regionnewsarchive.php">News Archives</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>Trinidad Building,<br />
                            Corrales-Yacapin Street,<br />
                            Cagayan de Oro City<br />
                            <strong>Phone:</strong> (088) 858-1658<br />
                            <strong>Email:</strong> dole10.imsd@gmail.com</p>

                        <div class="social-links">
                            <strong>DOLE-X Hotline</strong><br>
                            <strong>Globe: 0977-114-6526 </strong><br>
                            <strong>Smart : 0928-233-7806&nbsp;</strong><br>
                            <a href="https://www.facebook.com/DOLE-NorthMin-1558318694219435/" target="_blank"><img alt="" src="assets/img/facebookLogo.jpg" style="width: 200px; height: 60px;" /></a>
                        </div>

                    </div>



                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Department of Labor and Employment - ROX</strong>.
                <br>All Rights Reserved <?php echo date("Y"); ?>
            </div>
            <div class="credits">
                Designed by wook</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!--Individual Register>
    <div class="modal fade" id="modalLoginIndividual" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Individual Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="card-title text-center">Sign In</h5>
                    <form class="form-signin" action="index.php" method="post">
                        <div class="form-label-group">
                            <input type="text" id="inputEmail" class="form-control" name="indi_login_uname" placeholder="Email" required autofocus>
                            <label for="inputEmail"></label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" name="indi_login_pwd" placeholder="Password" required>
                            <label for="inputPassword"></label>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                        </div>

                </div>
                <div class="modal-footer">
                    <input type="submit" name="indi_login" class="btn btn-lg btn-primary btn-block text-uppercase" placeholder="SIGN IN">

                    </form>
                </div>
            </div>
        </div>
    </div-->


    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>