<?php
session_start();
if ($_SESSION["company_email"] == "" && $_SESSION["company_pwd"] == "") {
    session_destroy();
    session_unset();
    header("Location: index.php");
    exit;
}


require 'db/server.php';
include "company_register1.php"; 
require 'company_regtest.php'; ?>


<!doctype html>
<html lang="en">

<!-- Mirrored from getbootstrap.com/docs/4.1/examples/checkout/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Nov 2018 23:41:46 GMT -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/img/AEP_icon.png" rel="icon">

    <title>AEP Online Registration</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/form.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="dist/jautocalc.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            function autoCalcSetup() {
                $('form[name=cart]').jAutoCalc('destroy');
                $('form[name=cart] tr[name=line_items]').jAutoCalc({
                    keyEventsFire: true,
                    decimalPlaces: 2,
                    emptyAsZero: true
                });
                $('form[name=cart]').jAutoCalc({
                    decimalPlaces: 2
                });
            }
            autoCalcSetup();
        });
    </script>
</head>

<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="assets/img/AEP_icon.png" alt="" width="160" height="150">
            <h2>Online AEP Registration (COMPANY)</h2>
        </div>
        <p><b>Please supply all required information.</b> Misinterpretation, false statement or fraud in this application or in any supporting document is ground for denial/revocation/cancellation of the permit.</p>
        <hr>

        <div class="row">
            <div class="col-md-12 order-md-1">
                <form enctype="multipart/form-data" class="needs-validation" action="company_register.php" method="post" novalidate>

                    <input type="hidden" name="submits" value="Submit" />
                    <input type="hidden" name="user_name" value="<?php echo $_SESSION['company_email']; ?>" />
                    <input type="text" class="form-control" name="company_id" id="company_id" value="<?php echo $output;?>" readonly>

                    <h4 class="mb-3"><b>I. COMPANY INFORMATION</b></h4>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h6>COMPANY NAME:</h6>
                            </div>
                            <div class="col-md-12">

                                <input type="text" class="form-control" id="firstName" name="company_name" placeholder="Enter Company Name" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <br>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <h6>FULL ADDRESS:</h6>
                                <input type="text" class="form-control" id="firstName" name="company_address" placeholder="Lot # / Street / Barangay / City or Town / Province" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>CONTACT NO.:</h6>
                                <input type="tel" class="form-control" id="firstName" placeholder="09xxxxxxxxx" name="company_contact" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6>EMAIL ADDRESS:</h6>
                                <input type="text" class="form-control" id="firstName" name="company_email" placeholder="email@email.com" value="<?php echo $_SESSION['company_email']; ?>" readonly>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <h6>CONTACT PERSON:</h6>
                                <input type="text" class="form-control" id="firstName" placeholder="Contact Person Name" name="company_person" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <h6>ESTABLISHMENT IDENTIFICATION NUMBER (EIN (RULE 1020)):</h6>
                                <input type="text" class="form-control" id="firstName" placeholder="ESTABLISHMENT REGISTRATION NUMBER" name="ein" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <h6>NATURE OF BUSINESS:</h6>
                                <select name="nature_of_business" class="form-control" id="firstName" required>
                                    <option value="">Choose One..</option>
                                    <option value="Agriculture, forestry and fishing">Agriculture, forestry and fishing</option>
                                    <option value="Mining and quarrying">Mining and quarrying</option>
                                    <option value="Manufacturing">Manufacturing</option>
                                    <option value="Electricity, gas, steam and air-conditioning supply">Electricity, gas, steam and air-conditioning supply</option>
                                    <option value="Water Supply, sewerage, waste management and remediation activities">Water Supply, sewerage, waste management and remediation activities</option>
                                    <option value="Construction">Construction</option>
                                    <option value="Wholesale and retail trade, repaire of motor vehicles and etc.">Wholesale and retail trade, repaire of motor vehicles and etc.</option>
                                    <option value="Transportation and Storage">Transportation and Storage</option>
                                    <option value="Accomodation and food services">Accomodation and food services</option>
                                    <option value="Information and communication">Information and communication</option>
                                    <option value="Financial and insurance">Financial and insurance</option>
                                    <option value="Real estate">Real estate</option>
                                    <option value="Professional, Scientific and technical">Professional, Scientific and technical</option>
                                    <option value="Administrative and support">Administrative and support</option>
                                    <option value="Security">Security</option>
                                    <option value="Education">Education</option>
                                    <option value="Human Health and Social Work">Human Health and Social Work</option>
                                    <option value="Arts and Entertainment">Arts and Entertainment</option>
                                    <option value="Other service Actvities">Other service Actvities</option>
                                    <option value="Activities of extraterritorial orgs and bodies"> Activities of extraterritorial orgs and bodies">Activities ofextraterritorial orgs and bodies"> Activities ofextraterritorial orgs and bodies</option>
                                </select>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-block btn-primary" value="REGISTER" name="comp_register">
                        </div>

                    </div>





                </form>
            </div>
        </div>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017-2019 Department of Labor and Employment X</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/vendor/jquery-slim.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';

            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

</body>

</html>