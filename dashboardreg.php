<?php
session_start();

if ($_SESSION["company_email"] == "" && $_SESSION["company_pwd"] == "") {
    session_destroy();
    session_unset();
    header("Location: index.php");
    exit;
}
include 'db/server.php';
include 'dashboard1.php';
include 'register1.php';
require 'dashboardregtest.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/img/AEP_icon.png" rel="icon">
    <title>AEP - Company Dashboard</title>

    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,700,700i,300,300i,700,700i,800,800i,900,900i" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon">
                    <img src="assets/img/AEP_icon.png" alt="" width="35px" height="35px">
                </div>
                <div class="sidebar-brand-text mx-3">USER DASHBOARD</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fas fa-house-user"></i>
                    <span>HOME</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->


            <!-- Nav Item - Pages Collapse Menu -->


            <!-- Nav Item - Utilities Collapse Menu -->


            <!-- Divider -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-700 small"><?php echo $company_email; ?></span>
                                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/30x30">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-700"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-700"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-700"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal5">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-700"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->


                    <!-- Content Row -->



                    <div class="row text-dark">
                        <form enctype="multipart/form-data" class="needs-validation" action="dashboardreg.php" method="post">

                            <!-- Area Chart -->
                            <div class="col-xl-12 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->

                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="py-5 text-center">
                                            <img class="d-block mx-auto mb-1" src="assets/img/AEP_icon.png" alt="" width="160" height="150">
                                            <h2><b>Online Alien Employment Permit Registration Form</b></h2>
                                        </div>
                                        <p><b>Please supply all required information.</b> Misinterpretation, false statement or fraud in this application or in any supporting document is ground for denial/revocation/cancellation of the permit.</p>
                                        <hr>
                                        <input type="hidden" name="submits" value="Submit" />
                                        <h4 class="mb-3"><b>I. TYPE OF APPLICATION</b></h4>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-5 ml-5">
                                                    <div class="form-check">
                                                        <input class="form-check-input" style="size: 15px;" type="radio" name="application_type" id="exampleRadios1" value="NEW" checked>
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

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->

                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h4 class="mb-3"><b>II. PERSONAL DATA</b></h4>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h6>AEP INDIVIDUAL REGISTRATION NUMBER:</h6>
                                                    <input type="text" class="form-control" name="id_comp" id="id_comp" value="<?php echo $output;?>" readonly>

                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <h6>Full Name:</h6>
                                                </div>
                                                <div class="col-md-4">

                                                    <input type="text" class="form-control" id="firstName" name="user_firstname" placeholder="First Name" required>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-4">

                                                    <input type="text" class="form-control" id="firstName" name="user_middlename" placeholder="Middle Name" >
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">

                                                    <input type="text" class="form-control" id="firstName" name="user_lastname" placeholder="Last Name" required>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <h6>Nationality</h6>
                                                    <select class="form-control" name="user_nationality">
                                                        <option>-SELECT ONE-</option>
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
                                                        <option>-SELECT ONE-</option>
                                                        <option value="MALE">MALE</option>
                                                        <option value="FEMALE">FEMALE</option>
                                                        <option value="PREFER NOT TO SAY">PREFER NOT TO SAY</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 mb-3">
                                                    <h6>Marital Status:</h6>
                                                    <select class="form-control" name="marital_status" id="" required>
                                                        <option>-SELECT ONE-</option>
                                                        <option value="SINGLE">SINGLE</option>
                                                        <option value="MARRIED">MARRIED</option>
                                                        <option value="WINDOWED">WINDOWED</option>
                                                        <option value="DIVORCED">DIVORCED</option>
                                                        <option value="SEPARATED">SEPARATED</option>
                                                        <option value="REGISTERED PARTNERSHIP">REGISTERED PARTNERSHIP</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-5">
                                                    <h6>Taxpayer's Identification Number (TIN):</h6>
                                                    <input type="text" class="form-control" id="firstName" name="user_tin" placeholder="ex. xxx-xxx-xxx" required>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h6>Date of Birth:</h6>
                                                    <input type="date" class="form-control" id="firstName" name="user_dob" required>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-8 mb-3">
                                                    <h6>Place of Birth:</h6>
                                                    <input type="text" class="form-control" id="firstName" name="user_place_birth" required>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h6>Passport No.:</h6>
                                                    <input type="text" class="form-control" id="firstName" name="user_passport" required>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h6>Place of Issuance:</h6>
                                                    <input type="text" class="form-control" id="firstName" name="user_place_issuance" required>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <h6>Issuance Date:</h6>
                                                    <input type="date" class="form-control" id="firstName" name="user_issuance_date" required>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h6>Expiration Date:</h6>
                                                    <input type="date" class="form-control" id="firstName" name="user_pass_exp" required>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h6>Visa:</h6>
                                                    <select name="user_visa" class="form-control" id="firstName">
                                                        <option value="">Select One Below..</option>
                                                        <option value="9(g) Pre-Arranged Employee Commercial Visa">9(g) Pre-Arranged Employee Commercial Visa</option>
                                                        <option value="9(g) Pre-Arranged Employee Non-Commercial Visa">9(g) Pre-Arranged Employee Non-Commercial Visa</option>
                                                        <option value="Special Non-Immigrant Visa or 47(A)(2)">Special Non-Immigrant Visa or 47(A)(2)</option>
                                                        <option value="Special Non-Immigrant Visa under E.O. 226, as amended by R.A. 8756 (ROHQ)">Special Non-Immigrant Visa under E.O. 226, as amended by R.A. 8756 (ROHQ)</option>
                                                        <option value="Temporary Visitor’s Visa for Business Purposes">Temporary Visitor’s Visa for Business Purposes</option>
                                                        <option value="International Treaty Trader / Investor">International Treaty Trader / Investor</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <h6>Visa Validity:</h6>
                                                    <input type="date" class="form-control" id="firstName" name="user_visa_valid" required>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6>Highest Educatonal Attainment</h6>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="user_educ" id="exampleRadios1" value="BASIC" required>
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            BASIC <i>(ELEMENTARY AND HIGHSCHOOL)</i>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="user_educ" id="exampleRadios1" value="INTERMEDIATE" required>
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            INTERMEDIATE <i>(COLLEGE)</i>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="user_educ" id="exampleRadios1" value="ADVANCED" required>
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            ADVANCED <i>(MASTERAL AND DOCTORAL)</i>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 mb-3">
                                                    <h6>Course Of Study:</h6>
                                                    <input type="text" class="form-control" placeholder="ex. Information Technology" name="user_course" required>

                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <h6>Address in the Philippines:</h6>
                                                    <input type="text" class="form-control" placeholder="ex. 73 Corrales Ave, Cagayan de Oro, 9000 Misamis Oriental" name="user_address" id="firstName" required>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6>Contact Number:</h6>
                                                    <input type="text" class="form-control" placeholder="" id="firstName" name="user_contact" required>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <h6>Email Address:</h6>
                                                    <input type="email" class="form-control" placeholder="Email Address" name="user_email" id="firstName" value="<?php echo $company_email ?>" readonly>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6>Permanent Address Abroad:</h6>
                                                    <input type="text" class="form-control" id="firstName" name="user_abroad" placeholder="ex. Fulham Rd, Fulham, London SW6 1HS, United Kingdom" required>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->

                                    <!-- Card Body -->
                                    <div class="card-body">

                                        <h4 class="mb-3"><b>III. PRESENT EMPLOYMENT:</b></h4>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h6>Position:</h6>
                                                    <input type="text" class="form-control" id="firstName" name="comp_position" placeholder="ex. Supervisor" required>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-9 mb-3">
                                                    <h6>Place/s of Assignment:</h6>
                                                    <input type="text" class="form-control" id="firstName" name="comp_assign" placeholder="" required>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-9 mb-3">
                                                    <h6>Name of Company/Employer:</h6>
                                                    <input type="text" class="form-control" id="firstName" name="comp_name" placeholder="Name of Company/Employer" value="<?php echo $company_name ?>" readonly>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <h6>AEP REG NO (COMPANY):</h6>
                                                    <input type="text" class="form-control" id="firstName" name="company_id" value="<?php echo $company_id ?>" readonly>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <h6>Address of Company/Employment:</h6>
                                                    <input type="text" class="form-control" id="firstName" name="comp_address" placeholder="Address of Company/Employment" value="<?php echo $company_address ?>" readonly>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6>Contact No.:</h6>
                                                    <input type="text" class="form-control" id="firstName" name="comp_contact" placeholder="Contact No" value="<?php echo $company_contact ?>" readonly>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <h6>Email Address:</h6>
                                                    <input type="email" class="form-control" id="firstName" name="comp_email" placeholder="Email Address" value=" <?php echo $company_email ?>" readonly>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6>Nature of Business:</h6>
                                                    <input type="text" class="form-control" id="firstName" name="nature" placeholder="Nature of Business" value="<?php echo $nature_of_business ?>" readonly>
                                                    <div class="invalid-feedback">
                                                        This is required.
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>


                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->

                                    <!-- Card Body -->
                                    <div class="card-body">

                                        <h4 class="mb-3"><b>IV. DOCUMENTARY REQUIREMENTS</b></h4>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class=" table" style="color: black;">
                                                        <tr>
                                                            <td>
                                                                <h2><b style="color: black;">INSTRUCTIONS ON UPLOADING REQUIREMENTS:</b></h2>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="color: black;">
                                                                <b>1. <u style="color: black;">SCAN</u> ALL THE REQUIRED DOCUMENTS.( PLEASE REFER TO THE CHECKLIST BELOW)</b>
                                                                <ul>
                                                                    <li>Letter Request from Employer Company/ Ecozone Endorsement Letter</li>
                                                                    <li>Certificate of Registration of RULE 1020: Registration of Establishment</li>
                                                                    <li>Duly Accomplished AEP Application Form (<i style="color: black;">must be notarized</i>)</li>
                                                                    <li>Scanned Copy of Taxpayer Identification Number (TIN) card or BIR form 1904</li>
                                                                    <li>Scanned Copy of Certificate of Registration for DOLE Registration of Establishment (Rule 1020)</li>
                                                                    <li>Scanned Copy of passport withg updated/lastest stamped visa or Certificate of Recognition for Refugees or Stateless Persons (<i style="color: red;">present original passport for verification</i>)</li>
                                                                    <li>Duly Notarized ORoginal Copy of EMployment Contract/Letter of Appointment or Board Secretary's Certificate of Election</li>
                                                                    <li>Lastest 2x2 Picture of Foreign National</li>
                                                                    <li>
                                                                        Certified True Copy of the Following (if applicable):
                                                                        <ul>
                                                                            <li><u><b>Business Name Registration</b></u> and Application Form with <u>Department of Trade and Industry (DTI)</u> or <u>SEC REgistration</u>, <u>latest GIS</u> and valid Mayor's Permit</li>
                                                                            <li>PEZA / ECOZONE Registration / DO174-17 Registration or PCAB License / TESDA (if applicable)</li>
                                                                            <li>PAGCOR Certificate of Accreditation for Philippine Offshore Gaming Operators (POGO) or their Service Providers (if applicable)</li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>Scanned Copy of Special Temporary Permit (STP) from Professional Regulation Commission (PRC) in case of regulated professions / Authority to Employ Foreign National from DOJ in case covered by Anti-Dummy Law or Authority to Hire Alien from DENR in case of mining (if applicable)</li>
                                                                    <li>if applying for <b style="color: black;">RENEWAL</b> Scanned Copy of previously issued AEP </li>
                                                                    <li>Location Map (optional)</li>
                                                                    <li>Authorization Letter for authorized representatives including valid ID (if applicable)</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>2. MOVE THE FILES TO A FOLDER, RENAME USING THE GIVEN FORMAT "<i>Foreign National's Surname</i>_Requirements"</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>3. COMPRESS THE FOLDER INTO ZIP FILE (REFER TO THIS <a target="_blank" href="https://www.wikihow.com/Make-a-Zip-File">LINK</a> FOR INSTRUCTIONS)</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>4. UPLOAD COMPRESSED FILE TO GOOGLE DRIVE (REFER TO THIS <a target="_blank" href="https://www.wikihow.com/Use-Google-Drive">LINK</a> FOR INSTRUCTIONS)</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>5. ALLOW FILE TO BE SHARED (REFER TO THIS <a href="https://www.wikihow.com/Share-a-Google-Drive-File">LINK</a> FOR INSTRUCTIONS )</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>6. COPY LINK AND PASTE IT TO THE FIELD BELOW (REFER TO THIS <a href="https://www.cloudwards.net/google-file-sharing/#:~:text=Click%20%E2%80%9Csharing%20settings.%E2%80%9D,you%20want%20to%20share%20it.">LINK</a> FOR INSTRUCTIONS )</b></td>
                                                        </tr>

                                                    </table>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <h6><b>Google Drive Link</b></h6>
                                                    <input type="text" class="form-control" id="firstName" name="gdrive_link" placeholder="Paste Google Drive link here!" required>
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

                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- Pie Chart -->

                    </div>




                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <form method="POST" action="dashboard.php">
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-primary" name="signout" value="Logout">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Upload Modals -->




    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>



    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>

</body>


</html>