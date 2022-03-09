<?php
session_start();

if ($_SESSION["aca_email"] == "" && $_SESSION["aca_pw"] == "") {
    session_destroy();
    session_unset();
    header("Location: index.php");
    exit;
}
include 'db/server.php';
include 'dashboard1.php';
include 'dashboardreport.php';
//include 'userpdf.php';
//include 'dashboardupload.php';
include 'logout.php';

?>
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><b class="text-danger">WELCOME</b> <?php echo $company_name; ?>!</h1>

                    </div>

                    <!-- Content Row -->
                    <div class="row">



                        <!-- Pending Requests Card Example -->

                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <div class="col-xl-4 col-md-6 mb-4">
                            <a href="dashboardreg.php">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">AEP</div>
                                                <div class="h3 mb-0 font-weight-bold text-primary ">ADD APPLICANTS +</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-plus fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <a href="dashboardlistapproved.php">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-sm font-weight-bold text-success text-uppercase mb-1">AEP</div>
                                                <div class="h3 mb-0 font-weight-bold text-gray-800">MY APPROVED APPLICANTS</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-list fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <a href="dashboardlistapplicant.php">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">AEP</div>
                                                <div class="h3 mb-0 font-weight-bold text-gray-800">MY PENDING APPLICANTS</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-spinner fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>



                    </div>

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Profile Overview</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class=" table">
                                        <tr>
                                            <td style="width: 20%;" class="text-dark"><b>NAME OF COMPANY :</b> </td>
                                            <td style="width: 50%;" colspan="3"><b><?php echo $company_name; ?></b> </td>


                                        </tr>
                                        <tr>
                                            <td style="width: 20%;" class="text-dark"><b>COMPANY ADDRESS :</b> </td>
                                            <td style="width: 50%;" colspan="3"><b><?php echo $company_address; ?></b> </td>


                                        </tr>
                                        <tr>
                                            <td style="width: 20%;" class="text-dark"><b>CONTACT NUMBER :</b> </td>
                                            <td style="width: 30%;"><b><?php echo $company_contact; ?></b> </td>
                                            <td style="width: 20%;" class="text-dark"><b>CONTACT PERSON :</b> </td>
                                            <td style="width: 50%;"><b><?php echo $company_person; ?></b> </td>


                                        </tr>
                                        <tr>
                                            <td style="width: 25%;" class="text-dark"><b>COMPANY EMAIL ADDRESS :</b> </td>
                                            <td style="width: 25%;" colspan="3"><b><?php echo $company_email; ?></b> </td>
                                            
                                        </tr>
                                        <tr>
                                            <td style="width: 30%;" class="text-dark"><b>NATURE OF BUSINESS :</b> </td>
                                            <td style="width: 70%;" colspan="3"><b><?php echo $nature_of_business; ?></b> </td>
                                        </tr>



                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">AEP Details</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <table class=" table">
                                            <tr>
                                                <td style="width: 50%;" class="text-dark"><b>Approved AEP Employees:</b> </td>
                                                <td style="width: 50%;"><b><?php echo $total_approved; ?></b> </td>


                                            </tr>
                                            <tr>
                                                <td style="width: 50%;" class="text-dark"><b>Pending AEP Applicant:</b> </td>
                                                <td style="width: 50%;"><b><?php echo $total_applicant; ?></b> </td>


                                            </tr>
                                            <tr>
                                                <td style="width: 30%;" class="text-dark"><b>AEP REG NO. :</b> </td>
                                                <td style="width: 70%;" colspan="1"><b><?php echo $company_id; ?></b> </td>
                                            </tr>
                                            




                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
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
    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered bd-example-modal-lg" role="document">
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Submit File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="dashboard.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <h6 style="color: black;"><b>5.CLICK THE "BROWSE" TO UPLOAD YOUR FILE</b></h6>

                        <div class="custom-file">
                            <input type="hidden" name="username" value="<?php echo $user_name; ?>">
                            <input type="file" accept=".zip" class="custom-file-input" id="customFile" name="file1">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <br>
                        <br>
                        <h6 style="color: black;"><b>6.CLICK "SAVE CHANGES" BUTTON BELOW TO SUBMIT</b></h6>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Save changes" name="upload1">
                    </div>
                </form>
            </div>
        </div>
    </div>



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