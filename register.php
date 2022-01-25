<?php
session_start();
if ($_SESSION["user_name"] == "" && $_SESSION["userpassword"] == "") {
    session_destroy();
    session_unset();
    header("Location: index.php");
    exit;
}

require 'db/server.php';
include "register1.php"; ?>


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
            <h2>Online Alien Employment Permit Registration Form</h2>
        </div>
        <p><b>Please supply all required information.</b> Misinterpretation, false statement or fraud in this application or in any supporting document is ground for denial/revocation/cancellation of the permit.</p>
        <hr>

        <div class="row">
            <div class="col-md-12 order-md-1">
                <form enctype="multipart/form-data" class="needs-validation" action="register.php" method="post" novalidate>

                    <input type="hidden" name="submits" value="Submit" />
                    <input type="hidden" name="user_name" value="<?php echo $_SESSION['user_name']; ?>" />
                    <h4 class="mb-3"><b>I. TYPE OF APPLICATION</b></h4>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5 ml-5">
                                <div class="form-check">
                                    <input class="form-check-input" style="size: 15px;" type="radio" name="application_type" id="exampleRadios1" value="NEw" checked>
                                    <h5>
                                        <label class="form-check-label" for="exampleRadios1">
                                            NEW
                                        </label>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="application_type" id="exampleRadios1" value="RENEWAL" checked>
                                    <h5>
                                        <label class="form-check-label" for="exampleRadios1">
                                            RENEWAL
                                        </label>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4 class="mb-3"><b>II. PERSONAL DATA</b></h4>
                    <div class="col-md-12">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <h6>Full Name:</h6>
                            </div>
                            <div class="col-md-4">

                                <input type="text" class="form-control" id="firstName" name="user_firstname" placeholder="First Name" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-4">

                                <input type="text" class="form-control" id="firstName" name="user_middlename" placeholder="Middle Name" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">

                                <input type="text" class="form-control" id="firstName" name="user_lastname" placeholder="Last Name" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <h6>Nationality</h6>
                                <select class="form-control" name="user_nationality">
                                    <option value="">-SELECT ONE-</option>
                                    <option value="afghan">Afghan</option>
                                    <option value="albanian">Albanian</option>
                                    <option value="algerian">Algerian</option>
                                    <option value="american">American</option>
                                    <option value="andorran">Andorran</option>
                                    <option value="angolan">Angolan</option>
                                    <option value="antiguans">Antiguans</option>
                                    <option value="argentinean">Argentinean</option>
                                    <option value="armenian">Armenian</option>
                                    <option value="australian">Australian</option>
                                    <option value="austrian">Austrian</option>
                                    <option value="azerbaijani">Azerbaijani</option>
                                    <option value="bahamian">Bahamian</option>
                                    <option value="bahraini">Bahraini</option>
                                    <option value="bangladeshi">Bangladeshi</option>
                                    <option value="barbadian">Barbadian</option>
                                    <option value="barbudans">Barbudans</option>
                                    <option value="batswana">Batswana</option>
                                    <option value="belarusian">Belarusian</option>
                                    <option value="belgian">Belgian</option>
                                    <option value="belizean">Belizean</option>
                                    <option value="beninese">Beninese</option>
                                    <option value="bhutanese">Bhutanese</option>
                                    <option value="bolivian">Bolivian</option>
                                    <option value="bosnian">Bosnian</option>
                                    <option value="brazilian">Brazilian</option>
                                    <option value="british">British</option>
                                    <option value="bruneian">Bruneian</option>
                                    <option value="bulgarian">Bulgarian</option>
                                    <option value="burkinabe">Burkinabe</option>
                                    <option value="burmese">Burmese</option>
                                    <option value="burundian">Burundian</option>
                                    <option value="cambodian">Cambodian</option>
                                    <option value="cameroonian">Cameroonian</option>
                                    <option value="canadian">Canadian</option>
                                    <option value="cape verdean">Cape Verdean</option>
                                    <option value="central african">Central African</option>
                                    <option value="chadian">Chadian</option>
                                    <option value="chilean">Chilean</option>
                                    <option value="chinese">Chinese</option>
                                    <option value="colombian">Colombian</option>
                                    <option value="comoran">Comoran</option>
                                    <option value="congolese">Congolese</option>
                                    <option value="costa rican">Costa Rican</option>
                                    <option value="croatian">Croatian</option>
                                    <option value="cuban">Cuban</option>
                                    <option value="cypriot">Cypriot</option>
                                    <option value="czech">Czech</option>
                                    <option value="danish">Danish</option>
                                    <option value="djibouti">Djibouti</option>
                                    <option value="dominican">Dominican</option>
                                    <option value="dutch">Dutch</option>
                                    <option value="east timorese">East Timorese</option>
                                    <option value="ecuadorean">Ecuadorean</option>
                                    <option value="egyptian">Egyptian</option>
                                    <option value="emirian">Emirian</option>
                                    <option value="equatorial guinean">Equatorial Guinean</option>
                                    <option value="eritrean">Eritrean</option>
                                    <option value="estonian">Estonian</option>
                                    <option value="ethiopian">Ethiopian</option>
                                    <option value="fijian">Fijian</option>
                                    <option value="finnish">Finnish</option>
                                    <option value="french">French</option>
                                    <option value="gabonese">Gabonese</option>
                                    <option value="gambian">Gambian</option>
                                    <option value="georgian">Georgian</option>
                                    <option value="german">German</option>
                                    <option value="ghanaian">Ghanaian</option>
                                    <option value="greek">Greek</option>
                                    <option value="grenadian">Grenadian</option>
                                    <option value="guatemalan">Guatemalan</option>
                                    <option value="guinea-bissauan">Guinea-Bissauan</option>
                                    <option value="guinean">Guinean</option>
                                    <option value="guyanese">Guyanese</option>
                                    <option value="haitian">Haitian</option>
                                    <option value="herzegovinian">Herzegovinian</option>
                                    <option value="honduran">Honduran</option>
                                    <option value="hungarian">Hungarian</option>
                                    <option value="icelander">Icelander</option>
                                    <option value="indian">Indian</option>
                                    <option value="indonesian">Indonesian</option>
                                    <option value="iranian">Iranian</option>
                                    <option value="iraqi">Iraqi</option>
                                    <option value="irish">Irish</option>
                                    <option value="israeli">Israeli</option>
                                    <option value="italian">Italian</option>
                                    <option value="ivorian">Ivorian</option>
                                    <option value="jamaican">Jamaican</option>
                                    <option value="japanese">Japanese</option>
                                    <option value="jordanian">Jordanian</option>
                                    <option value="kazakhstani">Kazakhstani</option>
                                    <option value="kenyan">Kenyan</option>
                                    <option value="kittian and nevisian">Kittian and Nevisian</option>
                                    <option value="korean">Korean</option>
                                    <option value="kuwaiti">Kuwaiti</option>
                                    <option value="kyrgyz">Kyrgyz</option>
                                    <option value="laotian">Laotian</option>
                                    <option value="latvian">Latvian</option>
                                    <option value="lebanese">Lebanese</option>
                                    <option value="liberian">Liberian</option>
                                    <option value="libyan">Libyan</option>
                                    <option value="liechtensteiner">Liechtensteiner</option>
                                    <option value="lithuanian">Lithuanian</option>
                                    <option value="luxembourger">Luxembourger</option>
                                    <option value="macedonian">Macedonian</option>
                                    <option value="malagasy">Malagasy</option>
                                    <option value="malawian">Malawian</option>
                                    <option value="malaysian">Malaysian</option>
                                    <option value="maldivan">Maldivan</option>
                                    <option value="malian">Malian</option>
                                    <option value="maltese">Maltese</option>
                                    <option value="marshallese">Marshallese</option>
                                    <option value="mauritanian">Mauritanian</option>
                                    <option value="mauritian">Mauritian</option>
                                    <option value="mexican">Mexican</option>
                                    <option value="micronesian">Micronesian</option>
                                    <option value="moldovan">Moldovan</option>
                                    <option value="monacan">Monacan</option>
                                    <option value="mongolian">Mongolian</option>
                                    <option value="moroccan">Moroccan</option>
                                    <option value="mosotho">Mosotho</option>
                                    <option value="motswana">Motswana</option>
                                    <option value="mozambican">Mozambican</option>
                                    <option value="namibian">Namibian</option>
                                    <option value="nauruan">Nauruan</option>
                                    <option value="nepalese">Nepalese</option>
                                    <option value="new zealander">New Zealander</option>
                                    <option value="ni-vanuatu">Ni-Vanuatu</option>
                                    <option value="nicaraguan">Nicaraguan</option>
                                    <option value="nigerian">Nigerian</option>
                                    <option value="north korean">North Korean</option>
                                    <option value="northern irish">Northern Irish</option>
                                    <option value="norwegian">Norwegian</option>
                                    <option value="omani">Omani</option>
                                    <option value="pakistani">Pakistani</option>
                                    <option value="palauan">Palauan</option>
                                    <option value="panamanian">Panamanian</option>
                                    <option value="papua new guinean">Papua New Guinean</option>
                                    <option value="paraguayan">Paraguayan</option>
                                    <option value="peruvian">Peruvian</option>
                                    <option value="polish">Polish</option>
                                    <option value="portuguese">Portuguese</option>
                                    <option value="qatari">Qatari</option>
                                    <option value="romanian">Romanian</option>
                                    <option value="russian">Russian</option>
                                    <option value="rwandan">Rwandan</option>
                                    <option value="saint lucian">Saint Lucian</option>
                                    <option value="salvadoran">Salvadoran</option>
                                    <option value="samoan">Samoan</option>
                                    <option value="san marinese">San Marinese</option>
                                    <option value="sao tomean">Sao Tomean</option>
                                    <option value="saudi">Saudi</option>
                                    <option value="scottish">Scottish</option>
                                    <option value="senegalese">Senegalese</option>
                                    <option value="serbian">Serbian</option>
                                    <option value="seychellois">Seychellois</option>
                                    <option value="sierra leonean">Sierra Leonean</option>
                                    <option value="singaporean">Singaporean</option>
                                    <option value="slovakian">Slovakian</option>
                                    <option value="slovenian">Slovenian</option>
                                    <option value="solomon islander">Solomon Islander</option>
                                    <option value="somali">Somali</option>
                                    <option value="south african">South African</option>
                                    <option value="spanish">Spanish</option>
                                    <option value="sri lankan">Sri Lankan</option>
                                    <option value="sudanese">Sudanese</option>
                                    <option value="surinamer">Surinamer</option>
                                    <option value="swazi">Swazi</option>
                                    <option value="swedish">Swedish</option>
                                    <option value="swiss">Swiss</option>
                                    <option value="syrian">Syrian</option>
                                    <option value="taiwanese">Taiwanese</option>
                                    <option value="tajik">Tajik</option>
                                    <option value="tanzanian">Tanzanian</option>
                                    <option value="thai">Thai</option>
                                    <option value="togolese">Togolese</option>
                                    <option value="tongan">Tongan</option>
                                    <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                    <option value="tunisian">Tunisian</option>
                                    <option value="turkish">Turkish</option>
                                    <option value="tuvaluan">Tuvaluan</option>
                                    <option value="ugandan">Ugandan</option>
                                    <option value="ukrainian">Ukrainian</option>
                                    <option value="uruguayan">Uruguayan</option>
                                    <option value="uzbekistani">Uzbekistani</option>
                                    <option value="venezuelan">Venezuelan</option>
                                    <option value="vietnamese">Vietnamese</option>
                                    <option value="welsh">Welsh</option>
                                    <option value="yemenite">Yemenite</option>
                                    <option value="zambian">Zambian</option>
                                    <option value="zimbabwean">Zimbabwean</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <h6>Sex:</h6>
                                <select class="form-control" name="gender" id="" required>
                                    <option value="">-SELECT ONE-</option>
                                    <option value="MALE">MALE</option>
                                    <option value="FEMALE">FEMALE</option>
                                    <option value="PREFER NOT TO SAY">PREFER NOT TO SAY</option>
                                </select>
                            </div>
                            <div class="col-md-2 mb-3">
                                <h6>Marital Status:</h6>
                                <select class="form-control" name="marital_status" id="" required>
                                    <option value="">-SELECT ONE-</option>
                                    <option value="SINGLE">SINGLE</option>
                                    <option value="MARRIED">MARRIED</option>
                                    <option value="WINDOWED">WINDOWED</option>
                                    <option value="DIVORCED">DIVORCED</option>
                                    <option value="SEPARATED">SEPARATED</option>
                                    <option value="REGISTERED PARTNERSHIP">REGISTERED PARTNERSHIP</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <h6>Tin:</h6>
                                <input type="text" class="form-control" id="firstName" name="user_tin" placeholder="Last Name" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h6>Date of Birth:</h6>
                                <input type="date" class="form-control" id="firstName" name="user_dob" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-8 mb-3">
                                <h6>Place of Birth:</h6>
                                <input type="text" class="form-control" id="firstName" name="user_place_birth" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h6>Passport No.:</h6>
                                <input type="text" class="form-control" id="firstName" name="user_passport" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h6>Place of Issuance:</h6>
                                <input type="text" class="form-control" id="firstName" name="user_place_issuance" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <h6>Issuance Date:</h6>
                                <input type="date" class="form-control" id="firstName" name="user_issuance_date" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h6>Expiration Date:</h6>
                                <input type="date" class="form-control" id="firstName" name="user_pass_exp" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h6>Visa:</h6>
                                <input type="text" class="form-control" id="firstName" name="user_visa" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <h6>Visa Validity:</h6>
                                <input type="date" class="form-control" id="firstName" name="user_visa_valid" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h6>Highest Educatonal Attainment</h6>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="user_educ" id="exampleRadios1" value="BASIC">
                                    <label class="form-check-label" for="exampleRadios1">
                                        BASIC <i>(ELEMENTARY AND HIGHSCHOOL)</i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="user_educ" id="exampleRadios1" value="INTERMEDIATE">
                                    <label class="form-check-label" for="exampleRadios1">
                                        INTERMEDIATE <i>(COLLEGE)</i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="user_educ" id="exampleRadios1" value="ADVANCED">
                                    <label class="form-check-label" for="exampleRadios1">
                                        ADVANCED <i>(MASTERAL AND DOCTORAL)</i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-8 mb-3">
                                <h6>Course Of Study:</h6>
                                <input type="text" class="form-control" placeholder="Course Of Study" name="user_course" value="">

                            </div>
                            <div class="col-md-12 mb-3">
                                <h6>Address in the Philippines:</h6>
                                <input type="text" class="form-control" placeholder="Address in the Philippines" name="user_address" id="firstName" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6>Contact Number:</h6>
                                <input type="text" class="form-control" placeholder="Contact Number" id="firstName" name="user_contact" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <h6>Email Address:</h6>
                                <input type="email" class="form-control" placeholder="Email Address" name="user_email" id="firstName" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h6>Permanent Address Abroad:</h6>
                                <input type="text" class="form-control" id="firstName" name="user_abroad" placeholder="Permanent Address Abroad" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>

                        </div>

                    </div>
                    <hr>
                    <h4 class="mb-3"><b>III. PRESENT EMPLOYMENT:</b></h4>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Position:</h6>
                                <input type="text" class="form-control" id="firstName" name="comp_position" placeholder="Position" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-9 mb-3">
                                <h6>Place/s of Assignment:</h6>
                                <input type="text" class="form-control" id="firstName" name="comp_assign" placeholder="Place/s of Assignment" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-9 mb-3">
                                <h6>Name of Company/Employer:</h6>
                                <input type="text" class="form-control" id="firstName" name="comp_name" placeholder="Name of Company/Employer" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-9 mb-3">
                                <h6>Address of Company/Employment:</h6>
                                <input type="text" class="form-control" id="firstName" name="comp_address" placeholder="Address of Company/Employment" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6>Contact No.:</h6>
                                <input type="text" class="form-control" id="firstName" name="comp_contact" placeholder="Contact No" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <h6>Email Address:</h6>
                                <input type="email" class="form-control" id="firstName" name="comp_email" placeholder="Email Address" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h6>Nature of Business:</h6>
                                <input type="text" class="form-control" id="firstName" name="nature" placeholder="Nature of Business" value="" required>
                                <div class="invalid-feedback">
                                    This is required.
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-block btn-primary" value="REGISTER" name="register">
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